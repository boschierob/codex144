<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Filalete - Lecture et Méditation</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="star-canvas"></canvas>
<nav>
<a class="btn-back" href="index_general.html">← Retour au répertoire</a>
</nav>
<div class="content-wrapper">
<div class="text-header">
<div class="meta" id="date-display">Chargement sémantique...</div>
<h1 id="title-display">Titre du Texte</h1>
</div>
<div class="article-body" id="text-content">
<p>Le chemin de l'éveil est une sémantique qui se construit pas à pas...</p>
<img alt="Illustration Sémantique" src="placeholder_image_1.jpg"/>
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

</body>
</html>

@push('scripts')
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
@endpush