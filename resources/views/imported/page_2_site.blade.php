<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Filalete - Accès et Commande</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="star-canvas"></canvas>
<div class="container">
<div class="section">
<div>
<h2>DÉJÀ MEMBRE</h2>
<p>Entrez votre identifiant et votre code d'accès généré par la clé maître.</p>
<div class="form-group">
<label>NOM D'UTILISATEUR</label>
<input id="username" placeholder="Identifiant" type="text"/>
</div>
<div class="form-group">
<label>CODE D'ACCÈS / JETON</label>
<input id="access_code" placeholder="xxxx-xxxx-xxxx" type="password"/>
</div>
</div>
<button class="btn" onclick="connect()">Se connecter</button>
</div>
<div class="section">
<div>
<h2>OBTENIR UN ACCÈS</h2>
<p>Choisissez votre formule d'éveil sémantique.</p>
<div class="form-group">
<label>FORMULE</label>
<select id="formule" onchange="updatePrice()">
<option value="20">Accès 30 jours (Standard)</option>
<option value="180">Accès Annuel (Privilège)</option>
<option value="500">Accès Permanent (Soutien)</option>
</select>
</div>
<div class="price-tag" id="display-price">CHF 20.00</div>
<div class="info-paiement">
<strong>Méthode :</strong> Virement bancaire ou QR-Facture (Suisse).<br/>
<strong>Délai :</strong> Votre code personnel vous sera envoyé par email sous <span style="color:#fff">48h à 72h</span> après réception du paiement.<br/><br/>
                    Un email contenant les instructions de versement vous sera adressé instantanément.
                </div>
</div>
<button class="btn" onclick="commander()">Commander un accès</button>
</div>
</div>

</body>
</html>

@push('scripts')
<script>
// Gestion du fond étoilé (reprise de la page 1 pour cohérence)
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

        function updatePrice() {
            const val = document.getElementById('formule').value;
            document.getElementById('display-price').innerText = "CHF " + val + ".00";
        }

        function connect() {
            // Logique de redirection vers l'Index Général (Page 3)
            window.location.href = "index_general.html";
        }

        function commander() {
            alert("Une requête de paiement a été envoyée. Vérifiez vos emails (simulation).");
        }

        window.addEventListener('resize', initCanvas);
        initCanvas();
        drawStars();
</script>
@endpush