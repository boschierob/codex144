<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Filalete - Index Général</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="star-canvas"></canvas>
<div class="main-container">
<x-header></x-header>
<div class="special-sections">
<a class="btn-special" href="filalete.html">Session Filalete (Vérité)</a>
<a class="btn-special" href="amorc.html">Session AMORC</a>
</div>
<input class="search-bar" placeholder="Rechercher dans l'annuaire musical (ex: 01.05)..." type="text"/>
<div class="grid-categories" id="category-grid">
</div>
</div>

</body>
</html>

@push('scripts')
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
@endpush