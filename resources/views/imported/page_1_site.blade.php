<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Filalete - Portail de Transparence</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="star-canvas"></canvas>
<div class="overlay">
<div class="modal">
<h1>Filalete</h1>
<p>Bienvenue dans un espace de liberté intellectuelle et sémantique.</p>
<p>Conformément à l'éthique de ce projet : <br/>
<span class="highlight">Aucun cookie</span> n'est installé sur votre appareil.<br/>
<span class="highlight">Aucune base de données</span> personnelle n'est créée.<br/>
<span class="highlight">Aucun traçage</span> n'est effectué.
            </p>
<p>Ce site est un miroir de vérité, libre de toute influence algorithmique externe.</p>
<button class="btn-enter" onclick="enterSite()">Accéder au Portail</button>
<div class="footer-note">
                Sémantique computationnelle au service de l'éveil individuel.
            </div>
</div>
</div>

</body>
</html>

@push('scripts')
<script>
const canvas = document.getElementById('star-canvas');
        const ctx = canvas.getContext('2d');
        let stars = [];
        const colors = ['#4285F4', '#EA4335', '#FBBC05', '#34A853']; // Bleu, Rouge, Jaune, Vert Google

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

        function enterSite() {
            // Redirection vers la Page 2 (Accueil, Paiement et Connexion)
            window.location.href = "accueil.html";
        }

        window.addEventListener('resize', initCanvas);
        initCanvas();
        drawStars();
</script>
@endpush