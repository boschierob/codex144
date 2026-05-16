<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ELPIS 360 — CODEX 144</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Cinzel:wght@400;600;700&amp;family=EB+Garamond:ital,wght@0,400;0,500;1,400&amp;display=swap" rel="stylesheet"/>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="starsCanvas"></canvas>
<div class="container">
<!-- ══ HEADER ══ -->
<x-header></x-header>
<div class="divider"><span class="divider-symbol">✦</span></div>
<!-- ══ TITRE ELPIS ══ -->
<div class="elpis-titre">
<div class="elpis-nom">ELPIS 360</div>
<div class="elpis-grec">Ἐλπίς</div>
<div class="elpis-sous">Dea Spei  ·  La déesse de l'Espoir  ·  Goddess of Hope</div>
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
<a class="btn-lancement" href="elpis.html">Lancez-vous  ·  Take the challenge</a>
<div class="btn-sous">ELPIS 360 — Gratuit — Free</div>
</div>
<!-- ══ SÉPARATEUR LANGUE ══ -->
<div class="lang-separator">
<span class="lang-separator-label">English  ·  Latin</span>
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