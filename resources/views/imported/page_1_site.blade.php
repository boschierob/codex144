<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Filalete - Portail de Transparence</title>

    <style>

        body, html {

            margin: 0;

            padding: 0;

            width: 100%;

            height: 100%;

            overflow: hidden;

            background-color: #000000;

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            color: #ffffff;

        }



        #star-canvas {

            position: absolute;

            top: 0;

            left: 0;

            z-index: 1;

        }



        .overlay {

            position: relative;

            z-index: 10;

            display: flex;

            justify-content: center;

            align-items: center;

            width: 100%;

            height: 100%;

            background: rgba(0, 0, 0, 0.4);

        }



        .modal {

            background: rgba(15, 15, 15, 0.95);

            border: 1px solid #333;

            padding: 40px;

            max-width: 600px;

            text-align: center;

            box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);

            border-radius: 2px;

        }



        h1 {

            font-weight: 300;

            letter-spacing: 4px;

            margin-bottom: 30px;

            text-transform: uppercase;

        }



        p {

            line-height: 1.8;

            font-size: 1.1em;

            margin-bottom: 25px;

            color: #cccccc;

        }



        .highlight {

            color: #ffffff;

            font-weight: bold;

        }



        .btn-enter {

            background: transparent;

            color: #ffffff;

            border: 1px solid #ffffff;

            padding: 15px 40px;

            font-size: 1em;

            cursor: pointer;

            text-transform: uppercase;

            letter-spacing: 2px;

            transition: all 0.3s ease;

        }



        .btn-enter:hover {

            background: #ffffff;

            color: #000000;

        }



        .footer-note {

            margin-top: 30px;

            font-size: 0.8em;

            color: #666666;

            font-style: italic;

        }

    </style>

</head>

<body>



    <canvas id="star-canvas"></canvas>



    <div class="overlay">

        <div class="modal">

            <h1>Filalete</h1>

            <p>Bienvenue dans un espace de liberté intellectuelle et sémantique.</p>

            <p>Conformément à l'éthique de ce projet : <br>

               <span class="highlight">Aucun cookie</span> n'est installé sur votre appareil.<br>

               <span class="highlight">Aucune base de données</span> personnelle n'est créée.<br>

               <span class="highlight">Aucun traçage</span> n'est effectué.

            </p>

            <p>Ce site est un miroir de vérité, libre de toute influence algorithmique externe.</p>

            

            <button class="btn-enter" onclick="enterSite()">Accéder au Portail</button>



            <div class="footer-note">

                Sémantique computationnelle au service de l'éveil individuel.

            </div>

        </div>

    </div>



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

            window.location.href = "/index_site";

        }



        window.addEventListener('resize', initCanvas);

        initCanvas();

        drawStars();

    </script>

</body>

</html>