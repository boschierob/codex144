import os
from pathlib import Path
from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

# --- CONFIGURATION DES CHEMINS ---
# Ajuste le chemin vers ton projet Laravel "Codex"
LARAVEL_PROJECT_ROOT = Path(__file__).resolve().parent.parent / "Codex"

VIEWS_PATH = LARAVEL_PROJECT_ROOT / "resources" / "views" / "imported"
PUBLIC_PATH = LARAVEL_PROJECT_ROOT / "public"

def clean_filename(filename):
    """ Nettoie le nom de fichier pour Laravel """
    stem = Path(filename).stem.lower().replace(' ', '_').replace('-', '_')
    suffix = Path(filename).suffix.lower()
    return f"{stem}{suffix}"

@app.route('/api/convert', methods=['POST'])
def convert():
    try:
        # On vérifie la présence de fichiers sous 'files' ou 'files[]'
        uploaded_files = request.files.getlist('files[]') or request.files.getlist('files')
        
        if not uploaded_files:
            return jsonify({"status": "error", "message": "Aucun fichier reçu"}), 400

        sub_folder = request.form.get('sub_folder', '').strip()
        created_files = []

        for file in uploaded_files:
            filename = clean_filename(file.filename)
            ext = Path(filename).suffix.lower()
            
            # 1. HTML -> Views (deviennent .blade.php)
            if ext in ['.html', '.htm']:
                target_dir = VIEWS_PATH / sub_folder
                target_dir.mkdir(parents=True, exist_ok=True)
                target_path = target_dir / f"{Path(filename).stem}.blade.php"
                content = file.read().decode('utf-8', errors='ignore')
                target_path.write_text(content, encoding='utf-8')
            
            # 2. Images
            elif ext in ['.jpg', '.jpeg', '.png', '.gif', '.svg', '.webp']:
                target_dir = PUBLIC_PATH / "images"
                target_dir.mkdir(parents=True, exist_ok=True)
                target_path = target_dir / filename
                file.save(str(target_path))
            
            # 3. Vidéos
            elif ext in ['.mp4', '.webm', '.mov']:
                target_dir = PUBLIC_PATH / "videos"
                target_dir.mkdir(parents=True, exist_ok=True)
                target_path = target_dir / filename
                file.save(str(target_path))
            
            created_files.append({"name": filename})

        return jsonify({
            "status": "success", 
            "message": f"{len(created_files)} fichiers importés",
            "tree": created_files
        }), 200

    except Exception as e:
        return jsonify({"status": "error", "message": str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True, port=5000)