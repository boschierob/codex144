<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Site en construction — CODEX 144</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400;600;700&family=EB+Garamond:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<style>
  /* ============================================================
     CODEX 144 — Page Site en Construction
     TAILLES CORRIGEES :
     - Textes corps     : 0.95rem
     - Noms / labels    : 0.82rem
     - Labels sections  : 0.75rem
     - Footer textes    : 0.88rem
     - Footer latin/url : 0.76rem
     - Lien retour      : 0.72rem
  ============================================================ */

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --gold:        #C9A84C;
    --gold-light:  #E8C97A;
    --gold-bright: #FFD700;
    --dark:        #0A0806;
    --parchment:   #F2E8D5;
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

  /* ── HEADER CODEX réduit ── */
  .site-header { text-align: center; margin-bottom: 50px; }
  .arrows-top { display: flex; justify-content: center; align-items: center; gap: 2.5rem; margin-bottom: 1rem; opacity: 0; animation: fadeIn 1s ease 0.2s forwards; }
  .arrow-side { color: var(--gold); font-size: 1.1rem; opacity: 0.7; }
  .arrow-up { color: var(--gold-bright); font-size: 1.5rem; animation: pulseGold 2.5s ease-in-out infinite; }
  .ornament-line-top { width: 1px; height: 40px; background: linear-gradient(to bottom, transparent, var(--gold)); margin: 0 auto 14px; opacity: 0; animation: fadeIn 1s ease 0.3s forwards; }
  .codex-label-small { font-family: 'Cinzel', serif; font-size: 0.6rem; letter-spacing: 0.4em; color: var(--gold); text-transform: uppercase; margin-bottom: 0.6rem; opacity: 0; animation: fadeIn 1s ease 0.4s forwards; }
  .site-title-small { font-family: 'Cinzel Decorative', serif; font-size: clamp(1.4rem, 4vw, 2.2rem); font-weight: 700; letter-spacing: 0.15em; color: var(--gold); text-shadow: 0 0 30px rgba(201,168,76,0.25); margin-bottom: 0.3rem; opacity: 0; animation: fadeUp 1.2s ease 0.5s forwards; }
  .site-url-small { font-family: 'Cinzel', serif; font-size: 0.6rem; letter-spacing: 0.3em; color: rgba(201,168,76,0.4); margin-bottom: 1rem; opacity: 0; animation: fadeIn 1s ease 0.7s forwards; }
  .formula-codex { font-family: 'Cinzel', serif; font-size: clamp(0.5rem, 1.3vw, 0.7rem); letter-spacing: 0.2em; color: rgba(201,168,76,0.5); text-transform: uppercase; margin-bottom: 0.3rem; opacity: 0; animation: fadeIn 1s ease 0.9s forwards; }
  .translation-codex { font-family: 'EB Garamond', serif; font-style: italic; font-size: clamp(0.75rem, 1.5vw, 0.88rem); color: rgba(242,232,213,0.3); opacity: 0; animation: fadeIn 1s ease 1s forwards; }

  /* ── DIVIDER ── */
  .divider { display: flex; align-items: center; gap: 20px; margin: 0 0 50px; opacity: 0; animation: fadeIn 1s ease 1.1s forwards; }
  .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: linear-gradient(to right, transparent, rgba(201,168,76,0.4), transparent); }
  .divider-symbol { color: var(--gold); font-size: 1.2rem; font-family: 'Cinzel', serif; }

  /* ── TITRE CONSTRUCTION ── */
  .construction-header { text-align: center; margin-bottom: 60px; opacity: 0; animation: fadeUp 1.4s ease 1.2s forwards; }

  .construction-icon {
    font-size: 3rem;
    margin-bottom: 1.2rem;
    animation: pulseGold 3s ease-in-out infinite;
  }

  .construction-title {
    font-family: 'Cinzel Decorative', serif;
    font-size: clamp(2rem, 6vw, 4rem);
    font-weight: 900;
    letter-spacing: 0.12em;
    color: var(--gold);
    text-shadow: 0 0 40px rgba(201,168,76,0.35), 0 0 80px rgba(201,168,76,0.12);
    line-height: 1.1;
    margin-bottom: 1rem;
  }

  .construction-subtitle {
    font-family: 'Cinzel', serif;
    font-size: 0.75rem;
    letter-spacing: 0.4em;
    color: rgba(201,168,76,0.6);
    text-transform: uppercase;
    margin-bottom: 1.5rem;
  }

  /* ── BARRE DE PROGRESSION ── */
  .progress-bar-outer {
    max-width: 500px;
    margin: 0 auto 2rem;
    height: 2px;
    background: rgba(201,168,76,0.15);
    position: relative;
    overflow: hidden;
  }

  .progress-bar-inner {
    height: 100%;
    background: linear-gradient(to right, transparent, var(--gold-bright), transparent);
    width: 100%;
    animation: scan 2.5s ease-in-out infinite;
  }

  @keyframes scan {
    0%   { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }

  /* ── LANGUES ── */
  .languages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1px;
    margin-bottom: 80px;
    border: 1px solid rgba(201,168,76,0.12);
    opacity: 0;
    animation: fadeUp 1.2s ease 1.5s forwards;
  }

  .lang-item {
    padding: 1.6rem 2rem;
    background: rgba(10,8,6,0.6);
    border: 1px solid rgba(201,168,76,0.08);
    display: flex;
    align-items: center;
    gap: 1.4rem;
    transition: border-color 0.3s, background 0.3s;
  }

  .lang-item:hover {
    border-color: rgba(201,168,76,0.25);
    background: rgba(201,168,76,0.04);
  }

  .lang-flag {
    font-size: 2.2rem;
    flex-shrink: 0;
    line-height: 1;
  }

  /* SPQR custom */
  .lang-flag.spqr {
    font-size: 1rem;
    font-family: 'Cinzel', serif;
    font-weight: 700;
    color: var(--gold-bright);
    letter-spacing: 0.1em;
    background: rgba(201,168,76,0.1);
    border: 1px solid rgba(201,168,76,0.3);
    padding: 0.3rem 0.5rem;
    text-shadow: 0 0 8px rgba(255,215,0,0.4);
    min-width: 52px;
    text-align: center;
  }

  .lang-content { flex: 1; }

  .lang-name {
    font-family: 'Cinzel', serif;
    font-size: 0.68rem;
    letter-spacing: 0.3em;
    color: var(--gold);
    opacity: 0.6;
    text-transform: uppercase;
    margin-bottom: 0.3rem;
  }

  .lang-text {
    font-family: 'EB Garamond', serif;
    font-size: clamp(0.95rem, 2vw, 1.15rem);
    color: rgba(242,232,213,0.75);
    line-height: 1.4;
  }

  .lang-text em {
    font-style: italic;
    color: rgba(242,232,213,0.45);
    font-size: 0.9em;
    display: block;
    margin-top: 0.2rem;
  }

  /* ── FOOTER ── */
  .site-footer { text-align: center; padding-top: 60px; border-top: 1px solid rgba(201,168,76,0.15); }
  .ornament-line-bottom { width: 1px; height: 50px; background: linear-gradient(to bottom, var(--gold), transparent); margin: 0 auto 20px; }
  .arrows-bottom { display: flex; justify-content: center; align-items: center; gap: 0.8rem; margin-bottom: 1.2rem; }
  .arrows-bottom-left, .arrows-bottom-right { display: flex; gap: 0.2rem; color: var(--gold); font-size: 0.9rem; opacity: 0.6; }
  .arrow-down { color: var(--gold-bright); font-size: 1.2rem; animation: pulseGold 2.5s ease-in-out infinite; margin: 0 0.8rem; }
  .footer-codex { font-family: 'Cinzel Decorative', serif; font-size: 1.4rem; color: var(--gold); letter-spacing: 0.2em; margin-bottom: 0.3rem; }
  .footer-url   { font-family: 'Cinzel', serif; font-size: 0.76rem; letter-spacing: 0.3em; color: rgba(201,168,76,0.5); margin-bottom: 0.5rem; }
  .footer-latin { font-family: 'Cinzel', serif; font-size: 0.76rem; letter-spacing: 0.2em; color: rgba(201,168,76,0.4); margin-bottom: 0.3rem; }
  .footer-fr    { font-family: 'EB Garamond', serif; font-style: italic; font-size: 0.88rem; color: rgba(242,232,213,0.35); margin-bottom: 0.2rem; }
  .footer-en    { font-family: 'EB Garamond', serif; font-style: italic; font-size: 0.88rem; color: rgba(242,232,213,0.22); margin-bottom: 2rem; }
  .footer-divider { display: flex; align-items: center; gap: 16px; margin: 1.5rem 0; }
  .footer-divider::before, .footer-divider::after { content: ''; flex: 1; height: 1px; background: linear-gradient(to right, transparent, rgba(201,168,76,0.25), transparent); }
  .footer-divider span { color: var(--gold); font-size: 0.9rem; }
  .footer-back { font-family: 'Cinzel', serif; font-size: 0.72rem; letter-spacing: 0.3em; color: var(--gold); opacity: 0.5; text-transform: uppercase; text-decoration: none; transition: opacity 0.3s; display: block; margin-bottom: 1.5rem; }
  .footer-back:hover { opacity: 1; }
  .footer-copyright { font-size: 0.88rem; color: rgba(242,232,213,0.3); line-height: 1.8; font-style: italic; }
  .footer-copyright strong { color: var(--gold); font-style: normal; font-weight: 500; }
  .footer-date { font-family: 'Cinzel', serif; font-size: 0.68rem; letter-spacing: 0.3em; color: rgba(201,168,76,0.35); margin-top: 1rem; }

  @keyframes fadeIn  { from { opacity: 0; } to { opacity: 1; } }
  @keyframes fadeUp  { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  @keyframes pulseGold { 0%, 100% { opacity: 0.5; text-shadow: none; } 50% { opacity: 1; text-shadow: 0 0 10px rgba(255,215,0,0.5); } }
</style>
</head>
<body>

<canvas id="starsCanvas"></canvas>

<div class="container">

  <!-- ══ HEADER CODEX réduit ══ -->
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
    <div class="formula-codex">
    Codex est Memoria &nbsp;·&nbsp; Structura &nbsp;·&nbsp; Lux &nbsp;·&nbsp; Fons &nbsp;·&nbsp; Cognitio &nbsp;·&nbsp; Vinculum &nbsp;·&nbsp; et Porta Veritatis
      </div>
    <div class="translation-codex">« Le codex est mémoire, structure, lumière, source, connaissance, lien et porte de la vérité. »
      </div>

      <div class="translation-en">
        "The codex is memory, structure, light, source, knowledge, bond and gateway to truth."
    </div>
  </header>

  <div class="divider"><span class="divider-symbol">✦</span></div>

  <!-- ══ TITRE ══ -->
  <div class="construction-header">
    <div class="construction-icon">⚙</div>
    <div class="construction-title">CODEX 144</div>
    <div class="construction-subtitle">— Site en construction —</div>
    <div class="progress-bar-outer">
      <div class="progress-bar-inner"></div>
    </div>
  </div>

  <!-- ══ LANGUES ══ -->
  <div class="languages-grid">

    <!-- LATIN / ROME -->
    <div class="lang-item">
      <div class="lang-flag spqr">SPQR</div>
      <div class="lang-content">
        <div class="lang-name">Latin — Roma</div>
        <div class="lang-text">
          Hic locus in aedificatione est.
          <em>Ce lieu est en construction.</em>
        </div>
      </div>
    </div>

    <!-- FRANÇAIS -->
    <div class="lang-item">
      <div class="lang-flag">🇫🇷</div>
      <div class="lang-content">
        <div class="lang-name">Français — France</div>
        <div class="lang-text">
          Ce site est en construction.
          <em>Revenez bientôt.</em>
        </div>
      </div>
    </div>

    <!-- ANGLAIS -->
    <div class="lang-item">
      <div class="lang-flag">🇬🇧</div>
      <div class="lang-content">
        <div class="lang-name">English — United Kingdom</div>
        <div class="lang-text">
          This website is under construction.
          <em>Please come back soon.</em>
        </div>
      </div>
    </div>

    <!-- ITALIEN -->
    <div class="lang-item">
      <div class="lang-flag">🇮🇹</div>
      <div class="lang-content">
        <div class="lang-name">Italiano — Italia</div>
        <div class="lang-text">
          Questo sito è in costruzione.
          <em>Torna presto.</em>
        </div>
      </div>
    </div>

    <!-- LITUANIEN -->
    <div class="lang-item">
      <div class="lang-flag">🇱🇹</div>
      <div class="lang-content">
        <div class="lang-name">Lietuvių — Lietuva</div>
        <div class="lang-text">
          Ši svetainė kuriama.
          <em>Grįžkite netrukus.</em>
        </div>
      </div>
    </div>

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
    <div class="footer-date">March &nbsp; MMXXVI</div>
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
