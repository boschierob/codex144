<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filalete - Index Général</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #000000;
            font-family: 'Segoe UI', sans-serif;
            color: #ffffff;
            overflow-x: hidden;
        }

        #star-canvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .main-container {
            position: relative;
            z-index: 10;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 50px;
            border-bottom: 1px solid #333;
            padding-bottom: 20px;
        }

        h1 {
            font-weight: 300;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin: 0;
        }

        .grid-categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 30px;
        }

        .category-card {
            background: rgba(20, 20, 20, 0.6);
            border: 1px solid #333;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100px;
        }

        .category-card:hover {
            border-color: #ffffff;
            background: rgba(40, 40, 40, 0.8);
            transform: translateY(-3px);
        }

        .cat-id {
            font-size: 0.8em;
            color: #666;
            margin-bottom: 10px;
        }

        .cat-name {
            font-size: 1.1em;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Barre de recherche rapide pour l'annuaire */
        .search-bar {
            width: 100%;
            max-width: 600px;
            margin: 0 auto 40px auto;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 15px;
            background: rgba(10, 10, 10, 0.9);
            border: 1px solid #444;
            color: #fff;
            font-size: 1em;
            text-align: center;
        }

        .special-sections {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }

        .btn-special {
            padding: 15px 30px;
            border: 1px solid #FBBC05; /* Jaune pour Filalete / Amorc */
            color: #FBBC05;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
            transition: 0.3s;
        }

        .btn-special:hover {
            background: #FBBC05;
            color: #000;
        }
    </style>
</head>
<body>

    <canvas id="star-canvas"></canvas>

    <div class="main-container">
        <header>
            <h1>RÉPERTOIRE UNIVERSEL</h1>
        </header>

        <div class="special-sections">
            <a href="filalete.html" class="btn-special">Session Filalete (Vérité)</a>
            <a href="amorc.html" class="btn-special">Session AMORC</a>
        </div>

        <input type="text" class="search-bar" placeholder="Rechercher dans l'annuaire musical (ex: 01.05)...">

        <div class="grid-categories" id="category-grid">
            </div>
    </div>

    <script>
        // Génération visuelle des 99 blocs
        const grid = document.getElementById('category-grid');
        for (let i = 1; i <= 99; i++) {
            const card = document.createElement('div');
            card.className = 'category-card';
            const idStr = i.toString().padStart(2, '0');
            
            // Simulation de noms pour l'exemple, sera remplacé par les données de la clé
            let name = "Catégorie " + idStr;
            if(i === 1) name = "Musique Classique";
            if(i === 2) name = "Archives Sémantiques";
            
            card.innerHTML = `
                <div class="cat-id">${idStr}</div>
                <div class="cat-name">${name}</div>
            `;
            
            card.onclick = () => {
                window.location.href = `categorie.html?id=${idStr}`;
            };
            grid.appendChild(card);
        }

        // Système d'étoiles (Idem Pages 1 & 2 pour la portance visuelle)
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

        window.addEventListener('resize', initCanvas);
        initCanvas();
        drawStars();
    </script>
</body>
</html>