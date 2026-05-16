<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ELPIS 360 — Félicitations — CODEX 144</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400;600;700&family=EB+Garamond:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<style>
  /* ============================================================
     CODEX 144 — Page Déblocage — Félicitations
     Bilingue français / anglais
  ============================================================ */

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --gold:        #C9A84C;
    --gold-light:  #E8C97A;
    --gold-bright: #FFD700;
    --dark:        #0A0806;
    --parchment:   #F2E8D5;
    --rouge:       #9B2335;
  }

  html { scroll-behavior: smooth; }

  body {
    background-color: var(--dark);
    color: var(--parchment);
    font-family: 'EB Garamond', serif;
    min-height: 100vh;
    overflow-x: hidden;
    position: relative;
  }

  body::before {
    content: '';
    position: fixed; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none; z-index: 100; opacity: 0.4;
  }

  body::after {
    content: '';
    position: fixed; top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 900px; height: 900px;
    background: radial-gradient(ellipse, rgba(201,168,76,0.07) 0%, transparent 70%);
    pointer-events: none; z-index: 0;
  }

  #starsCanvas { position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; }

  .container { max-width: 900px; margin: 0 auto; padding: 60px 40px 100px; position: relative; z-index: 2; }

  /* ── HEADER ── */
  .site-header { text-align: center; margin-bottom: 50px; }
  .arrows-top { display: flex; justify-content: center; align-items: center; gap: 2.5rem; margin-bottom: 1rem; opacity: 0; animation: fadeIn 1s ease 0.2s forwards; }
  .arrow-side { color: var(--gold); font-size: 1.1rem; opacity: 0.7; }
  .arrow-up { color: var(--gold-bright); font-size: 1.5rem; animation: pulseGold 2.5s ease-in-out infinite; }
  .ornament-line-top { width: 1px; height: 40px; background: linear-gradient(to bottom, transparent, var(--gold)); margin: 0 auto 14px; opacity: 0; animation: fadeIn 1s ease 0.3s forwards; }
  .codex-label-small { font-family: 'Cinzel', serif; font-size: 0.7rem; letter-spacing: 0.4em; color: var(--gold); text-transform: uppercase; margin-bottom: 0.6rem; opacity: 0; animation: fadeIn 1s ease 0.4s forwards; }
  .site-title-small { font-family: 'Cinzel Decorative', serif; font-size: clamp(1.4rem, 4vw, 2.2rem); font-weight: 700; letter-spacing: 0.15em; color: var(--gold); text-shadow: 0 0 30px rgba(201,168,76,0.25); margin-bottom: 0.3rem; opacity: 0; animation: fadeUp 1.2s ease 0.5s forwards; }
  .site-url-small { font-family: 'Cinzel', serif; font-size: 0.7rem; letter-spacing: 0.3em; color: rgba(201,168,76,0.4); margin-bottom: 1rem; opacity: 0; animation: fadeIn 1s ease 0.7s forwards; }
  .formula-codex { font-family: 'Cinzel', serif; font-size: clamp(0.6rem, 1.3vw, 0.8rem); letter-spacing: 0.2em; color: rgba(201,168,76,0.5); text-transform: uppercase; margin-bottom: 0.3rem; opacity: 0; animation: fadeIn 1s ease 0.9s forwards; }
  .translation-codex { font-family: 'EB Garamond', serif; font-style: italic; font-size: clamp(0.87rem, 1.5vw, 1rem); color: rgba(242,232,213,0.45); opacity: 0; animation: fadeIn 1s ease 1s forwards; }

  /* ── DIVIDER ── */
  .divider { display: flex; align-items: center; gap: 20px; margin: 2rem 0; opacity: 0; animation: fadeIn 1s ease 1.1s forwards; }
  .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: linear-gradient(to right, transparent, rgba(201,168,76,0.4), transparent); }
  .divider-symbol { color: var(--gold); font-size: 1.2rem; font-family: 'Cinzel', serif; }

  /* ── FÉLICITATIONS ── */
  .felicitations {
    text-align: center;
    margin-bottom: 3rem;
    opacity: 0;
    animation: fadeUp 1.4s ease 1.2s forwards;
  }

  .felicitations-titre {
    font-family: 'Cinzel Decorative', serif;
    font-size: clamp(1.8rem, 6vw, 3.5rem);
    font-weight: 900;
    letter-spacing: 0.15em;
    color: var(--gold);
    text-shadow: 0 0 40px rgba(201,168,76,0.4);
    line-height: 1.1;
    margin-bottom: 0.5rem;
  }

  .felicitations-latin {
    font-family: 'Cinzel', serif;
    font-size: 0.75rem;
    letter-spacing: 0.5em;
    color: rgba(201,168,76,0.5);
    text-transform: uppercase;
    margin-bottom: 0.5rem;
  }

  .felicitations-sous {
    font-family: 'EB Garamond', serif;
    font-size: clamp(1rem, 2.5vw, 1.25rem);
    font-style: italic;
    color: rgba(242,232,213,0.65);
    line-height: 1.7;
  }

  /* ── BLOCS TEXTE ── */
  .bloc-texte {
    margin-bottom: 2.5rem;
    opacity: 0;
    animation: fadeUp 1.2s ease 1.4s forwards;
  }

  .bloc-titre-section {
    font-family: 'Cinzel', serif;
    font-size: 0.75rem;
    letter-spacing: 0.5em;
    color: var(--rouge);
    text-transform: uppercase;
    margin-bottom: 1rem;
    opacity: 0.8;
  }

  .bloc-texte p {
    font-family: 'EB Garamond', serif;
    font-size: clamp(1.1rem, 2.5vw, 1.3rem);
    color: rgba(242,232,213,0.85);
    line-height: 1.9;
    margin-bottom: 1.2rem;
  }

  .latin {
    font-family: 'Cinzel', serif;
    font-size: 0.82rem;
    letter-spacing: 0.3em;
    color: rgba(201,168,76,0.55);
    font-style: italic;
    display: block;
    margin: 0.8rem 0 0.4rem;
    border-left: 1px solid rgba(201,168,76,0.25);
    padding-left: 1rem;
  }

  .latin-fr {
    font-family: 'EB Garamond', serif;
    font-size: 1rem;
    font-style: italic;
    color: rgba(242,232,213,0.45);
    display: block;
    margin-bottom: 1.5rem;
    padding-left: 1rem;
  }

  /* ── FORMULAIRE DE DEMANDE ── */
  .form-deblocage {
    border: 1px solid rgba(201,168,76,0.2);
    padding: 2rem;
    background: rgba(201,168,76,0.02);
    margin: 2rem 0;
    opacity: 0;
    animation: fadeUp 1.2s ease 1.5s forwards;
  }

  .form-titre {
    font-family: 'Cinzel', serif;
    font-size: 0.72rem;
    letter-spacing: 0.4em;
    color: var(--gold);
    text-transform: uppercase;
    margin-bottom: 1.2rem;
  }

  .form-input {
    width: 100%;
    background: rgba(242,232,213,0.04);
    border: 1px solid rgba(201,168,76,0.2);
    color: var(--parchment);
    font-family: 'EB Garamond', serif;
    font-size: 1.05rem;
    padding: 0.75rem 1rem;
    outline: none;
    transition: border-color 0.3s;
    margin-bottom: 0.75rem;
  }

  .form-input:focus { border-color: var(--gold); }

  .form-input::placeholder {
    color: rgba(242,232,213,0.3);
    font-style: italic;
  }

  .form-btn {
    font-family: 'Cinzel', serif;
    font-size: 0.72rem;
    letter-spacing: 0.4em;
    text-transform: uppercase;
    background: none;
    border: 1px solid var(--gold);
    color: var(--gold);
    padding: 0.85rem 2rem;
    cursor: pointer;
    transition: all 0.3s;
    width: 100%;
  }

  .form-btn:hover { background: var(--gold); color: var(--dark); }

  .form-note {
    font-family: 'EB Garamond', serif;
    font-size: 0.9rem;
    font-style: italic;
    color: rgba(242,232,213,0.35);
    margin-top: 0.75rem;
    text-align: center;
    line-height: 1.6;
  }

  /* ── LIENS TÉLÉCHARGEMENT ── */
  .telechargements {
    margin: 2rem 0;
    opacity: 0;
    animation: fadeUp 1.2s ease 1.6s forwards;
  }

  .dl-item {
    border: 1px solid rgba(201,168,76,0.15);
    padding: 1.2rem 1.5rem;
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
    background: rgba(201,168,76,0.02);
  }

  .dl-info { flex: 1; }

  .dl-titre {
    font-family: 'Cinzel', serif;
    font-size: 0.68rem;
    letter-spacing: 0.3em;
    color: var(--gold);
    text-transform: uppercase;
    margin-bottom: 0.3rem;
  }

  .dl-desc {
    font-family: 'EB Garamond', serif;
    font-size: 1rem;
    color: rgba(242,232,213,0.65);
    font-style: italic;
  }

  .dl-btn {
    font-family: 'Cinzel', serif;
    font-size: 0.6rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    background: none;
    border: 1px solid rgba(201,168,76,0.4);
    color: var(--gold);
    padding: 0.6rem 1.2rem;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s;
    white-space: nowrap;
  }

  .dl-btn:hover { background: var(--gold); color: var(--dark); }
  .dl-btn.bientot { border-color: rgba(201,168,76,0.2); color: rgba(201,168,76,0.35); cursor: default; }
  .dl-btn.bientot:hover { background: none; color: rgba(201,168,76,0.35); }

  /* ── NOTE ASTÉRISQUE ── */
  .note-asterisque {
    font-family: 'EB Garamond', serif;
    font-size: 0.95rem;
    font-style: italic;
    color: rgba(242,232,213,0.45);
    line-height: 1.7;
    border-left: 1px solid rgba(201,168,76,0.2);
    padding-left: 1rem;
    margin: 1.5rem 0;
  }

  /* ── SÉPARATEUR LANGUE ── */
  .lang-separator {
    display: flex; align-items: center; gap: 20px; margin: 3rem 0;
  }
  .lang-separator::before, .lang-separator::after {
    content: ''; flex: 1; height: 1px;
    background: linear-gradient(to right, transparent, rgba(201,168,76,0.3), transparent);
  }
  .lang-separator-label {
    font-family: 'Cinzel', serif; font-size: 0.65rem;
    letter-spacing: 0.4em; color: rgba(201,168,76,0.4); text-transform: uppercase;
  }

  /* ── FOOTER ── */
  .site-footer { text-align: center; padding-top: 60px; border-top: 1px solid rgba(201,168,76,0.15); }
  .ornament-line-bottom { width: 1px; height: 50px; background: linear-gradient(to bottom, var(--gold), transparent); margin: 0 auto 20px; }
  .arrows-bottom { display: flex; justify-content: center; align-items: center; gap: 0.8rem; margin-bottom: 1.2rem; }
  .arrows-bottom-left, .arrows-bottom-right { display: flex; gap: 0.2rem; color: var(--gold); font-size: 0.9rem; opacity: 0.6; }
  .arrow-down { color: var(--gold-bright); font-size: 1.2rem; animation: pulseGold 2.5s ease-in-out infinite; margin: 0 0.8rem; }
  .footer-codex { font-family: 'Cinzel Decorative', serif; font-size: 1.4rem; color: var(--gold); letter-spacing: 0.2em; margin-bottom: 0.3rem; }
  .footer-url   { font-family: 'Cinzel', serif; font-size: 0.87rem; letter-spacing: 0.3em; color: rgba(201,168,76,0.5); margin-bottom: 0.5rem; }
  .footer-latin { font-family: 'Cinzel', serif; font-size: 0.87rem; letter-spacing: 0.2em; color: rgba(201,168,76,0.4); margin-bottom: 0.3rem; }
  .footer-fr    { font-family: 'EB Garamond', serif; font-style: italic; font-size: 1.01rem; color: rgba(242,232,213,0.35); margin-bottom: 0.2rem; }
  .footer-en    { font-family: 'EB Garamond', serif; font-style: italic; font-size: 1.01rem; color: rgba(242,232,213,0.22); margin-bottom: 2rem; }
  .footer-divider { display: flex; align-items: center; gap: 16px; margin: 1.5rem 0; }
  .footer-divider::before, .footer-divider::after { content: ''; flex: 1; height: 1px; background: linear-gradient(to right, transparent, rgba(201,168,76,0.25), transparent); }
  .footer-divider span { color: var(--gold); font-size: 0.9rem; }
  .footer-back { font-family: 'Cinzel', serif; font-size: 0.83rem; letter-spacing: 0.3em; color: var(--gold); opacity: 0.5; text-transform: uppercase; text-decoration: none; transition: opacity 0.3s; display: block; margin-bottom: 1.5rem; }
  .footer-back:hover { opacity: 1; }
  .footer-copyright { font-size: 1.01rem; color: rgba(242,232,213,0.3); line-height: 1.8; font-style: italic; }
  .footer-copyright strong { color: var(--gold); font-style: normal; font-weight: 500; }
  .footer-date { font-family: 'Cinzel', serif; font-size: 0.78rem; letter-spacing: 0.3em; color: rgba(201,168,76,0.35); margin-top: 1rem; }

  @keyframes fadeIn  { from { opacity: 0; } to { opacity: 1; } }
  @keyframes fadeUp  { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  @keyframes pulseGold { 0%, 100% { opacity: 0.5; text-shadow: none; } 50% { opacity: 1; text-shadow: 0 0 10px rgba(255,215,0,0.5); } }
</style>
</head>
<body>

<canvas id="starsCanvas"></canvas>

<div class="container">

  <!-- ══ HEADER ══ -->
  <header class="site-header">
    <div class="arrows-top">
      <span class="arrow-side">←</span>
      <span class="arrow-up">↑</span>
      <span class="arrow-side">→</span>
    </div>
    <div class="ornament-line-top"></div>
    <div class="codex-label-small">Codex 144 &nbsp;·&nbsp; www.codex144.com</div>
    <div class="site-title-small">CODEX 144</div>
    <div class="site-url-small">www.codex144.com</div>
    <div class="formula-codex">Codex est Memoria &nbsp;·&nbsp; Structura &nbsp;·&nbsp; Lux &nbsp;·&nbsp; Fons &nbsp;·&nbsp; Cognitio &nbsp;·&nbsp; Vinculum &nbsp;·&nbsp; et Porta Veritatis</div>
    <div class="translation-codex">« Le codex est mémoire, structure, lumière, source, connaissance, lien et porte de la vérité. »</div>
    <div class="translation-codex" style="color:rgba(242,232,213,0.25);margin-top:0.2rem">« The codex is memory, structure, light, source, knowledge, bond and gate of truth. »</div>
  </header>

  <div class="divider"><span class="divider-symbol">✦</span></div>

  <!-- ══ FÉLICITATIONS ══ -->
  <div class="felicitations">
    <div class="felicitations-titre">Félicitations</div>
    <div class="felicitations-latin">Macte animo &nbsp;·&nbsp; Elpis libera est</div>
    <div class="felicitations-sous">
      Le but n'était pas forcément de trouver le code.<br>
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
    <div class="form-titre">Demander le code &nbsp;·&nbsp; Request the code</div>
    <input type="text" class="form-input" placeholder="Votre prénom — Your first name">
    <input type="email" class="form-input" placeholder="Votre email — Your email">
    <input type="text" class="form-input" placeholder="PC / Android / iPhone — votre appareil">
    <button class="form-btn" onclick="envoyerDemande()">Envoyer ma demande &nbsp;·&nbsp; Send my request</button>
    <div class="form-note">
      Vous recevrez une réponse dans les prochaines heures.<br>
      <em>You will receive a reply within the next few hours.</em>
    </div>
  </div>

  <!-- ══ TÉLÉCHARGEMENTS ══ -->
  <div class="telechargements">
    <div class="bloc-titre-section">Téléchargements disponibles &nbsp;·&nbsp; Available downloads</div>

    <div class="dl-item">
      <div class="dl-info">
        <div class="dl-titre">PC — Windows / Linux</div>
        <div class="dl-desc">Application ELPIS 360 — version complète</div>
      </div>
      <!-- Remplacer # par le lien réel quand le serveur est configuré -->
      <a href="#" class="dl-btn">Télécharger &nbsp;·&nbsp; Download</a>
    </div>

    <div class="dl-item">
      <div class="dl-info">
        <div class="dl-titre">Android</div>
        <div class="dl-desc">Application ELPIS 360 — Google Play / APK direct</div>
      </div>
      <!-- Remplacer # par le lien réel quand le serveur est configuré -->
      <a href="#" class="dl-btn">Télécharger &nbsp;·&nbsp; Download</a>
    </div>

    <div class="dl-item">
      <div class="dl-info">
        <div class="dl-titre">iPhone &nbsp;·&nbsp; Mac</div>
        <div class="dl-desc">Application ELPIS 360 — App Store / macOS</div>
      </div>
      <span class="dl-btn bientot">Bientôt &nbsp;·&nbsp; Coming soon</span>
    </div>

  </div>

  <!-- ══ NOTE ASTÉRISQUE ══ -->
  <div class="note-asterisque">
    * Si vous êtes sur Mac ou iPhone, l'application fonctionne en HTML mais vous serez obligé de passer par les cycles d'attente à chaque session. L'application native Mac et iPhone est en préparation — bientôt disponible sur le serveur CODEX 144.
    <br><br>
    <em>* If you are on Mac or iPhone, the application works in HTML but you will need to go through the waiting cycles each session. The native Mac and iPhone application is in preparation — coming soon on the CODEX 144 server.</em>
  </div>

  <!-- ══ SÉPARATEUR LANGUE ══ -->
  <div class="lang-separator">
    <span class="lang-separator-label">English &nbsp;·&nbsp; Latin</span>
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
  <footer class="site-footer">
    <div class="ornament-line-bottom"></div>
    <div class="arrows-bottom">
      <div class="arrows-bottom-left"><span>←</span><span>←</span></div>
      <span class="arrow-down">↓</span>
      <div class="arrows-bottom-right"><span>→</span><span>→</span></div>
    </div>
    <div class="footer-codex">CODEX 144</div>
    <div class="footer-url">www.codex144.com</div>
    <div class="footer-latin">Codex Numericus Centum Quadraginta Quattuor</div>
    <div class="footer-fr">Le livre des cent quarante-quatre</div>
    <div class="footer-en">The book of one hundred and forty-four</div>
    <div class="footer-divider"><span>✦</span></div>
    <a href="index.html" class="footer-back">↑ Retour à la page d'accueil CODEX 144</a>
    <div class="footer-copyright">
      © 2026 <strong>Paulinus</strong> — Aix-les-Bains, <strong>France</strong><br>
      Tous droits réservés. Toute reproduction interdite sans autorisation écrite de l'auteur.<br>
      CODEX 144 est un produit original protégé par le droit d'auteur français et européen.<br>
      Built by Python &nbsp;·&nbsp; Assisted by Claude Sonnet 4.6
    </div>
    <div class="footer-date">April &nbsp; MMXXVI</div>
  </footer>

</div>

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
</body>
</html>
