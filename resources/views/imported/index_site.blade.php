<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Site en construction — CODEX 144</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Cinzel:wght@400;600;700&amp;family=EB+Garamond:ital,wght@0,400;0,500;1,400&amp;display=swap" rel="stylesheet"/>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="starsCanvas"></canvas>
<div class="container">
<!-- ══ HEADER CODEX réduit ══ -->
<x-header></x-header>
<div class="divider"><span class="divider-symbol">✦</span></div>
<!-- ══ TITRE CONSTRUCTION ══ -->
<div class="construction-header">
<div class="construction-icon">⚙</div>
<div class="construction-title">CODEX 144</div>
<div class="construction-subtitle">— Site en construction —</div>
<div class="progress-bar-outer">
<div class="progress-bar-inner"></div>
</div>
</div>
<!-- ══ ACCROCHE ELPIS — AJOUT V2 ══ -->
<div class="elpis-accroche">
<div class="elpis-accroche-latin">
      Elpis expectat  ·  Aliquid vos iam expectat
    </div>
<div class="elpis-accroche-texte">
      Le site arrive. Mais quelque chose vous attend déjà.<br/>
      Une expérience interactive, gratuite, à découvrir maintenant.
    </div>
<div class="elpis-accroche-texte" style="font-size:clamp(1rem,2vw,1.2rem);opacity:0.7;margin-bottom:1.5rem">
      The website is coming. But something is already waiting for you.<br/>
      A free, interactive experience — discover it now.
    </div>
<a class="btn-elpis" href="elpis.html">
      Découvrir ELPIS 360  ·  Discover ELPIS 360
    </a>
</div>
<!-- ══ LANGUES ══ -->
<div class="languages-grid">
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
<div class="lang-item">
<div class="lang-flag">🇵🇱</div>
<div class="lang-content">
<div class="lang-name">Polski — Polska</div>
<div class="lang-text">
          Ta strona jest w budowie.
          <em>Wróć wkrótce.</em>
</div>
</div>
</div>
</div>
<!-- ══ FOOTER ══ -->
<x-footer></x-footer>
</div>

</body>
</html>


@push('scripts')
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
@endpush