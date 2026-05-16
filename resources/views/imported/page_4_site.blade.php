<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filalete - Lecture et Méditation</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            background-color: #000000;
            font-family: 'Segoe UI', serif; /* Serif pour une meilleure lecture des textes */
            color: #ffffff;
            overflow-x: hidden;
        }

        #star-canvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Barre de navigation haute */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            background: rgba(10, 10, 10, 0.9);
            border-bottom: 1px solid #333;
            display: flex;
            align-items: center;
            padding: 0 30px;
            z-index: 100;
        }

        .btn-back {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8em;
            border: 1px solid #444;
            padding: 8px 15px;
            transition: 0.3s;
        }

        .btn-back:hover {
            border-color: #fff;
        }

        /* Zone de contenu textuel */
        .content-wrapper {
            position: relative;
            z-index: 10;
            max-width: 800px;
            margin: 100px auto 150px auto;
            padding: 0 20px;
        }

        .text-header {
            border-bottom: 1px solid #222;
            margin-bottom: 40px;
            padding-bottom: 20px;
        }

        h1 {
            font-weight: 300;
            font-size: 2.5em;
            letter-spacing: 2px;
            margin: 0;
        }

        .meta {
            color: #666;
            font-size: 0.9em;
            margin-top: 10px;
        }

        .article-body {
            line-height: 1.9;
            font-size: 1.2em;
            color: #dddddd;
            text-align: justify;
        }

        .article-body img {
            max-width: 100%;
            height: auto;
            margin: 30px 0;
            border: 1px solid #333;
            display: block;
        }

        /* LECTEUR FLOTTANT (PERSISTANT) */
        #music-player {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 320px;
            background: rgba(15, 15, 15, 0.95);
            border: 1px solid #4285F4; /* Bleu Google */
            padding: 15px;
            z-index: 200;
            box-shadow: 0 10px 30px rgba(0,0,0,0.8);
            display: flex;
            flex-direction: column;
        }

        .player-title {
            font-size: 0.8em;
            color: #4285F4;
            margin-bottom: 10px;
            text-transform: uppercase;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        iframe {
            width: 100%;
            height: 80px; /* Taille réduite pour l'audio/vidéo bridge */
            border: none;
            background: #000;
        }

        .close-player {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #4285F4;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <canvas id="star-canvas"></canvas>

    <nav>
        <a href="index_general.html" class="btn-back">← Retour au répertoire</a>
    </nav>

    <div class="content-wrapper">
        <div class="text-header">
            <div class="meta" id="date-display">Chargement sémantique...</div>
            <h1 id="title-display">Titre du Texte</h1>
        </div>

        <div class="article-body" id="text-content">
            <p>Le chemin de l'éveil est une sémantique qui se construit pas à pas...</p>
            <img src="placeholder_image_1.jpg" alt="Illustration Sémantique">
            <p>La vérité ne se possède pas, elle se vit à travers le mouvement constant de l'esprit.</p>
        </div>
    </div>

    <div id="music-player">
        <button class="close-player" onclick="document.getElementById('music-player').style.display='none'">×</button>
        <div class="player-title" id="now-playing">Flux Audio : En attente de sélection...</div>
        <div id="player-container">
            <div style="color:#444; text-align:center; padding: 20px; font-size: 0.8em;">Sélectionnez un lien dans l'annuaire</div>
        </div>
    </div>

    <script>
        // Système d'étoiles (Identique pour cohésion totale)
        const canvas = document.getElementById('star-canvas');
        const ctx = canvas.getContext('2d');
        let stars = [];
        const colors = ['#4285F4', '#EA4335', '#FBBC05', '#34A853'];

        function initCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            stars = [];
            for (let i = 0; i < 200; i++) {
                stars.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 1.5,
                    color: colors[Math.floor(Math.random() * colors.length)],
                    blink: Math.random() * 0.05,
                    opacity: Math.random()
                });
            }
        }

        function drawStars() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            stars.forEach(s => {
                ctx.beginPath();
                ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2);
                ctx.fillStyle = s.color;
                s.opacity += s.blink;
                if (s.opacity > 1 || s.opacity < 0) s.blink = -s.blink;
                ctx.globalAlpha = Math.max(0.2, s.opacity);
                ctx.fill();
            });
            requestAnimationFrame(drawStars);
        }

        // Fonction pour charger un média dans le lecteur flottant sans quitter la page
        function loadMedia(url, titre) {
            const container = document.getElementById('player-container');
            document.getElementById('now-playing').innerText = "Lecture : " + titre;
            // Exemple simple d'injection de bridge
            container.innerHTML = `<iframe src="${url}"></iframe>`;
        }

        window.addEventListener('resize', initCanvas);
        initCanvas();
        drawStars();
    </script>
</body>
</html>