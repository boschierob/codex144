<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ELPIS 360 — Félicitations — CODEX 144</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Cinzel:wght@400;600;700&amp;family=EB+Garamond:ital,wght@0,400;0,500;1,400&amp;display=swap" rel="stylesheet"/>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="starsCanvas"></canvas>
<div class="container">
<!-- ══ HEADER ══ -->
<x-header></x-header>
<div class="divider"><span class="divider-symbol">✦</span></div>
<!-- ══ FÉLICITATIONS ══ -->
<div class="felicitations">
<div class="felicitations-titre">Félicitations</div>
<div class="felicitations-latin">Macte animo  ·  Elpis libera est</div>
<div class="felicitations-sous">
      Le but n'était pas forcément de trouver le code.<br/>
      Le but était de jouer. Vous avez joué. ELPIS est libre.
    </div>
</div>
<!-- ══ TEXTE FRANÇAIS ══ -->
<div class="bloc-texte">
<div class="bloc-titre-section">Français</div>
<p>Vous avez traversé les 360 secondes. Vous avez découvert l'univers CODEX 144 — ELPIS, TEMPUS, l'Oracle, le Scanner. Le code était là, nécessaire, mais pas obligatoire pour comprendre l'essentiel.</p>
<span class="latin">Iter factum est. Elpis libera est.</span>
<span class="latin-fr">Le chemin a été parcouru. ELPIS est libre.</span>
<p>Pour activer l'application complète sur votre appareil, deux fonctionnalités ne sont pas encore incluses dans la version HTML pour des raisons technologiques. Elles arrivent très prochainement via les mises à jour du serveur.</p>
<p>En attendant, demandez votre code de déblocage ci-dessous. Vous recevrez une réponse dans les prochaines heures.</p>
</div>
<!-- ══ FORMULAIRE ══ -->
<div class="form-deblocage">
<div class="form-titre">Demander le code  ·  Request the code</div>
<input class="form-input" placeholder="Votre prénom — Your first name" type="text"/>
<input class="form-input" placeholder="Votre email — Your email" type="email"/>
<input class="form-input" placeholder="PC / Android / iPhone — votre appareil" type="text"/>
<button class="form-btn" onclick="envoyerDemande()">Envoyer ma demande  ·  Send my request</button>
<div class="form-note">
      Vous recevrez une réponse dans les prochaines heures.<br/>
<em>You will receive a reply within the next few hours.</em>
</div>
</div>
<!-- ══ TÉLÉCHARGEMENTS ══ -->
<div class="telechargements">
<div class="bloc-titre-section">Téléchargements disponibles  ·  Available downloads</div>
<div class="dl-item">
<div class="dl-info">
<div class="dl-titre">PC — Windows / Linux</div>
<div class="dl-desc">Application ELPIS 360 — version complète</div>
</div>
<!-- Remplacer # par le lien réel quand le serveur est configuré -->
<a class="dl-btn" href="#">Télécharger  ·  Download</a>
</div>
<div class="dl-item">
<div class="dl-info">
<div class="dl-titre">Android</div>
<div class="dl-desc">Application ELPIS 360 — Google Play / APK direct</div>
</div>
<!-- Remplacer # par le lien réel quand le serveur est configuré -->
<a class="dl-btn" href="#">Télécharger  ·  Download</a>
</div>
<div class="dl-item">
<div class="dl-info">
<div class="dl-titre">iPhone  ·  Mac</div>
<div class="dl-desc">Application ELPIS 360 — App Store / macOS</div>
</div>
<span class="dl-btn bientot">Bientôt  ·  Coming soon</span>
</div>
</div>
<!-- ══ NOTE ASTÉRISQUE ══ -->
<div class="note-asterisque">
    * Si vous êtes sur Mac ou iPhone, l'application fonctionne en HTML mais vous serez obligé de passer par les cycles d'attente à chaque session. L'application native Mac et iPhone est en préparation — bientôt disponible sur le serveur CODEX 144.
    <br/><br/>
<em>* If you are on Mac or iPhone, the application works in HTML but you will need to go through the waiting cycles each session. The native Mac and iPhone application is in preparation — coming soon on the CODEX 144 server.</em>
</div>
<!-- ══ SÉPARATEUR LANGUE ══ -->
<div class="lang-separator">
<span class="lang-separator-label">English  ·  Latin</span>
</div>
<!-- ══ TEXTE ANGLAIS ══ -->
<div class="bloc-texte">
<div class="bloc-titre-section">English</div>
<p>You have completed the 360 seconds. You have discovered the CODEX 144 universe — ELPIS, TEMPUS, the Oracle, the Scanner. The code was there, necessary, but not mandatory to understand what truly matters.</p>
<span class="latin">Iter factum est. Elpis libera est.</span>
<span class="latin-fr">The journey has been made. ELPIS is free.</span>
<p>To activate the full application on your device, two features are not yet included in the HTML version for technological reasons. They are coming very soon through server updates.</p>
<p>In the meantime, request your unlock code below. You will receive a reply within the next few hours.</p>
</div>
<!-- ══ FOOTER ══ -->
<x-footer></x-footer>
</div>

</body>
</html>


@push('scripts')
<script>
// ── Étoiles ──
const canvas = document.getElementById('starsCanvas');
const ctx = canvas.getContext('2d');
let stars = [];
function resize() { canvas.width = window.innerWidth; canvas.height = document.body.scrollHeight; initStars(); }
function initStars() {
  stars = [];
  for (let i = 0; i < 220; i++) {
    const side = Math.random() < 0.5 ? 'left' : 'right';
    const x = side === 'left' ? Math.random() * 100 : canvas.width - Math.random() * 100;
    stars.push({ x, y: Math.random() * canvas.height, r: Math.random() * 1.6 + 0.5, speed: Math.random() * 3000 + 2000, offset: Math.random() * Math.PI * 2 });
  }
}
function draw(ts) {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  for (const s of stars) {
    const t = (ts % s.speed) / s.speed;
    const opc = 0.15 + 0.75 * (0.5 + 0.5 * Math.sin(2 * Math.PI * t + s.offset));
    ctx.beginPath(); ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
    ctx.fillStyle = `rgba(242, 232, 213, ${opc})`; ctx.fill();
  }
  requestAnimationFrame(draw);
}
window.addEventListener('resize', resize);
resize(); requestAnimationFrame(draw);

// ── Formulaire — placeholder en attendant le serveur ──
function envoyerDemande() {
  const inputs = document.querySelectorAll('.form-input');
  const prenom = inputs[0].value.trim();
  const email  = inputs[1].value.trim();
  const device = inputs[2].value.trim();

  if (!prenom || !email) {
    alert('Merci de renseigner votre prénom et votre email.\nPlease fill in your name and email.');
    return;
  }

  // Sauvegarder localement en attendant le serveur
  const demande = { prenom, email, device, date: new Date().toISOString() };
  localStorage.setItem('elpis_demande', JSON.stringify(demande));

  // Message de confirmation
  inputs.forEach(i => i.value = '');
  const btn = document.querySelector('.form-btn');
  btn.textContent = 'Demande envoyée — Request sent ✦';
  btn.style.borderColor = 'rgba(201,168,76,0.4)';
  btn.style.cursor = 'default';
  btn.onclick = null;

  document.querySelector('.form-note').innerHTML =
    'Votre demande a été enregistrée. Vous recevrez une réponse dans les prochaines heures.<br>' +
    '<em>Your request has been recorded. You will receive a reply within the next few hours.</em>';
}
</script>
@endpush