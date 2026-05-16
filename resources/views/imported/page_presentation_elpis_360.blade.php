<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ELPIS 360 — CODEX 144</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400;600;700&family=EB+Garamond:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<style>
  /* ============================================================
     CODEX 144 — Page 2 — Présentation ELPIS 360
     Bilingue français / anglais — Latin intégré
     3 scans décalés en escalier
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

  /* ── TITRE ELPIS ── */
  .elpis-titre {
    text-align: center;
    margin-bottom: 3rem;
    opacity: 0;
    animation: fadeUp 1.4s ease 1.2s forwards;
  }

  .elpis-nom {
    font-family: 'Cinzel Decorative', serif;
    font-size: clamp(2.5rem, 8vw, 5rem);
    font-weight: 900;
    letter-spacing: 0.2em;
    color: var(--gold);
    text-shadow: 0 0 40px rgba(201,168,76,0.4), 0 0 80px rgba(201,168,76,0.15);
    line-height: 1;
    margin-bottom: 0.3rem;
  }

  .elpis-grec {
    font-family: 'EB Garamond', serif;
    font-size: clamp(1.2rem, 3vw, 1.8rem);
    font-style: italic;
    color: rgba(201,168,76,0.5);
    letter-spacing: 0.15em;
    margin-bottom: 0.5rem;
  }

  .elpis-sous {
    font-family: 'Cinzel', serif;
    font-size: 0.75rem;
    letter-spacing: 0.5em;
    color: rgba(201,168,76,0.6);
    text-transform: uppercase;
  }

  /* ── BLOC TEXTE ── */
  .bloc-texte {
    margin-bottom: 3rem;
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
    text-transform: none;
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

  /* ── 3 SCANS DÉCALÉS EN ESCALIER ── */
  .scans-zone {
    margin: 3rem 0 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    opacity: 0;
    animation: fadeIn 1.5s ease 1.6s forwards;
  }

  .scan-ligne {
    height: 2px;
    background: rgba(201,168,76,0.12);
    position: relative;
    overflow: hidden;
  }

  .scan-ligne-1 { width: 100%; }
  .scan-ligne-2 { width: 85%; margin-left: 5%; }
  .scan-ligne-3 { width: 70%; margin-left: 10%; }

  .scan-inner {
    position: absolute;
    top: 0; left: 0;
    height: 100%; width: 100%;
    background: linear-gradient(to right, transparent, var(--gold-bright), transparent);
  }

  .scan-ligne-1 .scan-inner { animation: scan 2.2s ease-in-out infinite; }
  .scan-ligne-2 .scan-inner { animation: scan 2.2s ease-in-out 0.4s infinite; }
  .scan-ligne-3 .scan-inner { animation: scan 2.2s ease-in-out 0.8s infinite; }

  @keyframes scan {
    0%   { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }

  /* ── BOUTON LANCEMENT ── */
  .btn-zone {
    text-align: center;
    margin: 2.5rem 0 4rem;
    opacity: 0;
    animation: fadeUp 1.5s ease 1.8s forwards;
  }

  .btn-lancement {
    display: inline-block;
    font-family: 'Cinzel', serif;
    font-size: 0.87rem;
    letter-spacing: 0.45em;
    text-transform: uppercase;
    color: var(--gold);
    border: 1px solid var(--gold);
    padding: 1.2rem 3rem;
    text-decoration: none;
    transition: all 0.3s ease;
    background: none;
    cursor: pointer;
  }

  .btn-lancement:hover {
    background: var(--gold);
    color: var(--dark);
    box-shadow: 0 0 30px rgba(201,168,76,0.3);
  }

  .btn-sous {
    font-family: 'EB Garamond', serif;
    font-size: 0.9rem;
    font-style: italic;
    color: rgba(242,232,213,0.35);
    margin-top: 0.75rem;
  }

  /* ── SÉPARATEUR DE LANGUE ── */
  .lang-separator {
    display: flex;
    align-items: center;
    gap: 20px;
    margin: 4rem 0;
  }
  .lang-separator::before, .lang-separator::after {
    content: ''; flex: 1; height: 1px;
    background: linear-gradient(to right, transparent, rgba(201,168,76,0.3), transparent);
  }
  .lang-separator-label {
    font-family: 'Cinzel', serif;
    font-size: 0.65rem;
    letter-spacing: 0.4em;
    color: rgba(201,168,76,0.4);
    text-transform: uppercase;
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

  <!-- ══ TITRE ELPIS ══ -->
  <div class="elpis-titre">
    <div class="elpis-nom">ELPIS 360</div>
    <div class="elpis-grec">Ἐλπίς</div>
    <div class="elpis-sous">Dea Spei &nbsp;·&nbsp; La déesse de l'Espoir &nbsp;·&nbsp; Goddess of Hope</div>
  </div>

  <!-- ══ TEXTE FRANÇAIS ══ -->
  <div class="bloc-texte">

    <div class="bloc-titre-section">Français</div>

    <p>Dans la mythologie grecque, Zeus enferma tous les maux du monde dans une boîte. Au fond, une seule chose demeura : ELPIS — l'Espoir. La dernière. L'essentielle.</p>

    <span class="latin">In ultima parte arcae Pandorae, Elpis mansit sola.</span>
    <span class="latin-fr">Au fond de la boîte de Pandore, ELPIS demeura seule.</span>

    <div class="bloc-titre-section" style="margin-top:2rem">Le temps est une valse.</div>

    <p>Certaines étapes ne se sautent pas. ELPIS 360 dure 360 secondes. Six cycles. Six interruptions. Pendant ce temps — explorez. Découvrez CODEX 144, TEMPUS, l'Oracle. Ce que vous faites pendant ces 360 secondes compte.</p>

    <p>Pour libérer ELPIS — lancez-vous. Faites le jeu une fois. La première découverte est toujours instinctive. La deuxième est celle qui compte. Si vous ne trouvez pas, des solutions vous sont proposées à la fin du jeu.</p>

    <span class="latin">Tempus non expectat. Sed Elpis semper expectat.</span>
    <span class="latin-fr">Le temps n'attend pas. Mais ELPIS attend toujours.</span>

    <div class="bloc-titre-section" style="margin-top:2rem">Derrière le jeu — un outil.</div>

    <p>Agenda, notes, gestion de fichiers entre téléphone et PC. Gratuit. Sans installation. Pour celui qui veut maîtriser son temps plutôt que le subir. Pour le codeur qui a une idée à 23h. Pour l'artisan qui travaille sur le terrain.</p>

    <span class="latin">Si non invenisti — iterum tempta.</span>
    <span class="latin-fr">Si tu n'as pas trouvé — recommence.</span>

  </div>

  <!-- ══ 3 SCANS EN ESCALIER ══ -->
  <div class="scans-zone">
    <div class="scan-ligne scan-ligne-1"><div class="scan-inner"></div></div>
    <div class="scan-ligne scan-ligne-2"><div class="scan-inner"></div></div>
    <div class="scan-ligne scan-ligne-3"><div class="scan-inner"></div></div>
  </div>

  <!-- ══ BOUTON ══ -->
  <div class="btn-zone">
    <a href="elpis.html" class="btn-lancement">Lancez-vous &nbsp;·&nbsp; Take the challenge</a>
    <div class="btn-sous">ELPIS 360 — Gratuit — Free</div>
  </div>

  <!-- ══ SÉPARATEUR LANGUE ══ -->
  <div class="lang-separator">
    <span class="lang-separator-label">English &nbsp;·&nbsp; Latin</span>
  </div>

  <!-- ══ TEXTE ANGLAIS ══ -->
  <div class="bloc-texte">

    <div class="bloc-titre-section">English</div>

    <p>In Greek mythology, Zeus sealed all the evils of the world inside a box. At the very bottom, one thing remained: ELPIS — Hope. The last. The essential.</p>

    <span class="latin">In ultima parte arcae Pandorae, Elpis mansit sola.</span>
    <span class="latin-fr">At the bottom of Pandora's box, ELPIS remained alone.</span>

    <div class="bloc-titre-section" style="margin-top:2rem">Time is a waltz.</div>

    <p>Some steps cannot be skipped. ELPIS 360 lasts 360 seconds. Six cycles. Six interruptions. During that time — explore. Discover CODEX 144, TEMPUS, the Oracle. What you do during these 360 seconds matters.</p>

    <p>To free ELPIS — take the challenge. Play the game at least once. The first discovery is always instinctive. The second is the one that counts. If you do not find the code, solutions are offered at the end of the game.</p>

    <span class="latin">Tempus non expectat. Sed Elpis semper expectat.</span>
    <span class="latin-fr">Time does not wait. But ELPIS always waits.</span>

    <div class="bloc-titre-section" style="margin-top:2rem">Behind the game — a tool.</div>

    <p>Calendar, notes, file management between phone and PC. Free. No installation required. For those who want to master their time rather than endure it. For the developer with an idea at 11pm. For the craftsman working in the field.</p>

    <span class="latin">Si non invenisti — iterum tempta.</span>
    <span class="latin-fr">If you have not found it — try again.</span>

  </div>

  <!-- ══ SCANS EN ESCALIER (bas) ══ -->
  <div class="scans-zone">
    <div class="scan-ligne scan-ligne-3"><div class="scan-inner"></div></div>
    <div class="scan-ligne scan-ligne-2"><div class="scan-inner"></div></div>
    <div class="scan-ligne scan-ligne-1"><div class="scan-inner"></div></div>
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
</script>
</body>
</html>
