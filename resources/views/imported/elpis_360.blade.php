<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ELPIS 360 — CODEX 144</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Cinzel:wght@400;600;700&amp;family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&amp;display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- FLASH SUBLIMINAL -->
<div id="flash"><span>ELPIS</span></div>
<!-- FOND -->
<div id="grain"></div>
<canvas id="starfield"></canvas>
<!-- APP PRINCIPALE -->
<div id="app">
<!-- ═══ HEADER ═══ -->
<x-header></x-header>
<!-- ═══ COMPTEUR ═══ -->
<div id="compteur-zone">
<div id="compteur-label">Temps avant l'interruption</div>
<div id="compteur-display">60</div>
<div id="compteur-sous">Secondes — Explore librement</div>
<div id="cosmos-zone">
<div id="cosmos-label">Durée de vie — ELPIS 360</div>
<div id="cosmos-display">calcul en cours...</div>
</div>
</div>
<!-- ═══ NAVIGATION ═══ -->
<nav id="nav">
<button class="nav-btn actif" onclick="afficherSection('codex')">Codex 144</button>
<button class="nav-btn" onclick="afficherSection('tempus')">Tempus</button>
<button class="nav-btn" onclick="afficherSection('philosophie')">Philosophie</button>
<button class="nav-btn" onclick="afficherSection('scanner')">Scanner</button>
<button class="nav-btn" onclick="afficherSection('oracle')">Oracle</button>
<button class="nav-btn verrouille" id="btn-univers" onclick="tentativeUnivers()">Univers</button>
<button class="nav-btn verrouille" id="btn-module7" onclick="tentativeModule7()">Module VII</button>
<button class="nav-btn verrouille" id="btn-module8" onclick="tentativeModule8()">Module VIII</button>
</nav>
<!-- ═══ SECTION CODEX 144 ═══ -->
<section class="section visible" id="section-codex">
<h2>CODEX 144</h2>
<div class="separateur"></div>
<p>CODEX 144 est un système de pensée architecturale. Une structure de connaissance bâtie sur 144 axiomes fondamentaux. Chaque axiome est une pierre. Ensemble, ils forment une cathédrale invisible.</p>
<p class="citation">« L'architecture n'est pas la construction d'un espace. C'est la construction d'une intention. »</p>
<p class="citation-en">"Architecture is not the construction of a space. It is the construction of an intention."</p>
<h3>Principe fondateur</h3>
<p>Le nombre 144 — 12² — est la structure du temps, de la musique et de la géométrie sacrée. Douze heures. Douze notes. Douze tribus. CODEX 144 encode l'universel dans le particulier.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">144 — 12² — is the structure of time, music and sacred geometry. Twelve hours. Twelve notes. Twelve tribes. CODEX 144 encodes the universal within the particular.</p>
<h3>Architecture invisible</h3>
<p>PA0LINUS construit des systèmes que l'œil ne voit pas. Des logiques que la machine exécute mais ne comprend pas. CODEX 144 est le manifeste de cette méthode.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">PA0LINUS builds systems the eye cannot see. Logics that the machine executes but does not understand. CODEX 144 is the manifesto of this method.</p>
</section>
<!-- ═══ SECTION TEMPUS ═══ -->
<section class="section" id="section-tempus">
<h2>TEMPUS</h2>
<div class="separateur"></div>
<p>TEMPUS est le logiciel du temps. Non pas un agenda. Une machine à percevoir la durée — la durée d'un projet, d'une vie, d'une civilisation. TEMPUS mesure ce que les autres oublient de compter.</p>
<p class="citation">« Fugit irreparabile tempus. »<br/><em>Le temps fuit, irréparable. — Virgile</em></p>
<p class="citation-en">"Time flies, irretrievable." — Virgil</p>
<h3>Conception</h3>
<p>TEMPUS est né d'une observation simple : les humains planifient en heures mais vivent en décennies. Le logiciel traduit les deux échelles et révèle les contradictions.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">TEMPUS was born from a simple observation: humans plan in hours but live in decades. The software translates both scales and reveals the contradictions.</p>
<h3>Intégration CODEX 144</h3>
<p>TEMPUS applique les 144 axiomes au temps vécu. Chaque projet est analysé selon 12 dimensions temporelles. La machine rend visible ce que l'intuition ne peut calculer seule.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">TEMPUS applies the 144 axioms to lived time. Each project is analysed across 12 temporal dimensions. The machine makes visible what intuition alone cannot compute.</p>
</section>
<!-- ═══ SECTION PHILOSOPHIE ═══ -->
<section class="section" id="section-philosophie">
<h2>Philosophie</h2>
<div class="separateur"></div>
<p>PA0LINUS est architecte autodidacte. Non pas de pierres et d'acier — mais de systèmes, de langages et de significations. Chaque œuvre est un argument. Chaque ligne de code, une thèse.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">PA0LINUS is a self-taught architect — not of stone and steel, but of systems, languages and meanings. Every work is an argument. Every line of code, a thesis.</p>
<p class="citation">« Ce que l'architecte construit, le temps le juge. Ce que le philosophe écrit, l'éternité le teste. »</p>
<p class="citation-en">"What the architect builds, time judges. What the philosopher writes, eternity tests."</p>
<h3>MAGNUS INTERTEMPORA</h3>
<p>Cette signature signifie : grand entre les temps. Ni du passé, ni du futur. Un constructeur qui œuvre dans l'intervalle — dans le silence entre deux ères.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">This signature means: great between the ages. Neither past nor future. A builder who works in the interval — in the silence between two eras.</p>
<h3>ELPIS</h3>
<p>Dans la mythologie grecque, quand Zeus ouvrit la boîte de Pandore, tous les maux du monde se répandirent. Mais au fond resta ELPIS — l'Espoir. Le dernier. L'essentiel. Ce fichier porte son nom.</p>
<p style="font-style:italic;opacity:.6;font-size:1rem;">In Greek mythology, when Zeus opened Pandora's box, all the evils of the world spread. But at the bottom remained ELPIS — Hope. The last. The essential. This file bears her name.</p>
</section>
<!-- ═══ SECTION SCANNER ═══ -->
<section class="section" id="section-scanner">
<h2>Scanner de Session</h2>
<div class="separateur"></div>
<p style="text-align:center;font-style:italic;opacity:.6">ELPIS observe. Voici ce que le système révèle.<br/><span style="font-size:.9rem;opacity:.7">ELPIS watches. Here is what the system reveals.</span></p>
<div id="scanner-grid">
<div class="scan-item"><div class="scan-label">Système d'exploitation</div><div class="scan-value" id="sc-os">—</div></div>
<div class="scan-item"><div class="scan-label">Navigateur</div><div class="scan-value" id="sc-nav">—</div></div>
<div class="scan-item"><div class="scan-label">Résolution écran</div><div class="scan-value" id="sc-res">—</div></div>
<div class="scan-item"><div class="scan-label">Fuseau horaire</div><div class="scan-value" id="sc-tz">—</div></div>
<div class="scan-item"><div class="scan-label">Heure locale</div><div class="scan-value" id="sc-heure">—</div></div>
<div class="scan-item"><div class="scan-label">Langue système</div><div class="scan-value" id="sc-langue">—</div></div>
<div class="scan-item"><div class="scan-label">Profondeur couleur</div><div class="scan-value" id="sc-couleur">—</div></div>
<div class="scan-item"><div class="scan-label">Mémoire disponible</div><div class="scan-value" id="sc-mem">—</div></div>
<div class="scan-item"><div class="scan-label">Cœurs processeur</div><div class="scan-value" id="sc-cpu">—</div></div>
<div class="scan-item"><div class="scan-label">Connexion</div><div class="scan-value" id="sc-net">—</div></div>
<div class="scan-item"><div class="scan-label">Durée de session</div><div class="scan-value" id="sc-session">—</div></div>
<div class="scan-item"><div class="scan-label">Plateforme</div><div class="scan-value" id="sc-platform">—</div></div>
</div>
</section>
<!-- ═══ SECTION ORACLE ═══ -->
<section class="section" id="section-oracle">
<h2>Oracle Tempus</h2>
<div class="separateur"></div>
<p style="text-align:center;font-style:italic;opacity:.7">Douze contes. Douze leçons du temps.<br/>Tire une carte. Reçois la sagesse de Tempus.<br/><span style="font-size:.9rem;opacity:.7">Twelve tales. Twelve lessons of time. Draw a card. Receive the wisdom of Tempus.</span></p>
<div id="oracle-zone">
<button id="oracle-btn" onclick="tirerCarte()">✦ Tirer une carte ✦</button>
<div id="oracle-carte">
<div id="oracle-titre-conte"></div>
<div id="oracle-symbole"></div>
<div id="oracle-recit"></div>
<div id="oracle-lecon">Leçon de Tempus<span id="oracle-lecon-texte"></span></div>
</div>
</div>
<div style="margin-top:3rem">
<h3>Générateur de Signature / Signature Generator</h3>
<div id="sig-form">
<input id="sig-input" maxlength="40" placeholder="Entrez votre nom / Enter your name" type="text"/>
<button id="sig-btn" onclick="genererSignature()">Générer ma signature MAGNUS</button>
</div>
<div id="sig-resultat">
<div id="sig-nom-affiche"></div>
<div id="sig-magnus">MAGNUS INTERTEMPORA</div>
<div id="sig-codex"></div>
</div>
</div>
</section>
<!-- ═══ SECTION UNIVERS (verrouillée) ═══ -->
<section class="section" id="section-univers">
<!-- PARTIE 1 — SOCIÉTÉ STOÏCIENNE -->
<div style="text-align:center;margin-bottom:3rem">
<div style="font-family:'Cinzel',serif;font-size:clamp(.55rem,1.3vw,.72rem);letter-spacing:.18em;color:rgba(201,168,76,.5);text-transform:uppercase;margin-bottom:.4rem">Codex est Memoria · Structura · Lux · Fons · Cognitio · Vinculum · et Porta Veritatis</div>
<div style="font-style:italic;font-size:clamp(1.05rem,1.8vw,.95rem);color:rgba(242,232,213,.3);margin-bottom:.2rem">« Le codex est mémoire, structure, lumière, source, connaissance, lien et porte de la vérité. »</div>
<div style="font-style:italic;font-size:clamp(.8rem,1.6vw,.88rem);color:rgba(242,232,213,.2)">"The codex is memory, structure, light, source, knowledge, bond and gateway to truth."</div>
</div>
<!-- Signature -->
<div class="sig-full">
<div class="sig-l1">Paolinus Auctor Stoicorum Novorum</div>
<div class="sig-l2">Paolinus, primus et ultimus Stoicorum, Magnus inter Tempora</div>
<div class="sig-divider"></div>
<div class="sig-row">
<div>
<div class="sig-lang">Français</div>
<div class="sig-line-1">Paolinus, auteur des Nouveaux Stoïciens</div>
<div class="sig-line-2">Paolinus, premier et dernier des Stoïciens, Grand entre les Temps</div>
</div>
<div>
<div class="sig-lang">English</div>
<div class="sig-line-1">Paolinus, author of the New Stoics</div>
<div class="sig-line-2">Paolinus, first and last of the Stoics, Great among the Ages</div>
</div>
<div class="sig-lt">
<div class="sig-lang">Lietuvių</div>
<div class="sig-line-1">Paolinus, naujųjų stoikų autorius</div>
<div class="sig-line-2">Paolinus, pirmasis ir paskutinis stoikų, Didysis tarp Laikų</div>
</div>
</div>
</div>
<div class="separateur"></div>
<!-- Section Société Stoïcienne -->
<div style="text-align:center;margin-bottom:3rem">
<div class="u-section-label">— Societas Stoicorum Nova —</div>
<div class="u-section-titre">SOCIÉTÉ STOÏCIENNE</div>
<div class="u-section-sous">Stoïcisme 2.0</div>
<div style="font-family:'Cinzel',serif;font-size:clamp(1.1rem,1.6vw,.85rem);letter-spacing:.18em;color:var(--gold-light);font-style:italic;margin-bottom:.5rem">Societas non est commercium. Societas est structura.</div>
<div style="font-style:italic;font-size:clamp(1.1rem,2.2vw,1.18rem);color:rgba(242,232,213,.62);margin-bottom:.3rem">« La société n'est pas le commerce. La société est une structure. »</div>
<div style="font-style:italic;font-size:clamp(.92rem,2vw,1.05rem);color:rgba(242,232,213,.38)">"Society is not commerce. Society is structure."</div>
</div>
<!-- BLOC I — Le temps d'avant -->
<div class="u-bloc">
<div class="u-label">— I —</div>
<div class="u-titre">Le temps d'avant</div>
<p>Il y a un temps que peu de gens connaissent.</p>
<p>Ce n'est pas le passé. Ce n'est pas la nostalgie.</p>
<p>C'est le temps d'avant — celui qui précède le basculement, celui où le monde n'a pas encore changé mais où toi, tu sais déjà qu'il va changer.</p>
<p>C'est ce temps-là que j'aime. J'apprécie beaucoup plus ce temps d'avant, avant que cela change, avant d'être dans le présent, celui où l'on dit « c'était mieux avant ».</p>
<p><em>Moi je vis ce temps d'avant. C'est celui-ci que j'aime. Je vous laisse profiter du temps d'après moi.</em></p>
<p>Ce poème a été écrit de l'autre côté du lac. Lui était face à la dent du chat. Moi j'étais face au Revard. Nous étions de chaque côté du miroir. Et de l'autre côté du miroir, on n'écrit pas la même chose. On n'écrit pas la déprime. On écrit la lumière.</p>
<p>Dans Matrix, Néo reçoit deux gélules. Mais il y en a une troisième. Elle n'a pas de couleur. Elle s'appelle le libre arbitre. Et le libre arbitre, c'est de créer sa propre lumière selon son temps.</p>
<p><em>Bienvenue. Il n'y a pas de matrice.</em></p>
</div>
<div class="div-rouge"><span>✦</span></div>
<!-- BLOC QUADRI — 4 langues -->
<div class="u-quad">
<div class="u-tab francais">
<div class="u-tab-label">— Français — Paolinus · Grand parmi les Temps —</div>
<p>La sémantique existe depuis l'aube de l'humanité.</p>
<p>Avant le premier mot, il y avait déjà le sens. Avant la première ligne de code, il y avait déjà l'intention.</p>
<p>Vous qui codez, vous qui bâtissez les architectures invisibles du monde numérique — vous ne faites que retrouver une vérité ancienne. La sémantique computationnelle n'est pas une invention. C'est un souvenir.</p>
<p>Le temps passe. Le libre arbitre résiste.</p>
<p>Le temps n'est pas mon maître. Il n'est pas mon geôlier. Il est mon compagnon.</p>
<p><em>Je suis Paolinus — Grand parmi les Temps.</em></p>
<p>Je ne le possède pas. Il ne me possède pas. Nous cheminons ensemble, depuis toujours. Je marche entre les temps.</p>
<p>Morpheus tend deux pilules : la rouge — la vérité qui blesse. La bleue — le mensonge qui console.</p>
<p>Mais il existe une autre lumière. Celle que personne ne te tend, parce qu'elle ne se donne pas. Elle se crée.</p>
<p>Il n'y a pas de matrice imposée. Chacun tisse la sienne. Ton code. Ton sens. Ta couleur.</p>
<p><em>Le vrai libre arbitre n'est pas choisir entre deux pilules. C'est comprendre que tu peux en inventer une troisième.</em></p>
</div>
<div class="u-tab latin">
<div class="u-tab-label">— Latin —</div>
<p>Semantica ab aurora humanitatis exsistit.</p>
<p>Ante primum verbum, sensus iam erat. Ante primum codicem, intentio iam erat.</p>
<p>Vos qui aedificatis, vos qui scribitis — non invenitis. Recordamini.</p>
<p>Tempus transit. Liberum arbitrium resistit.</p>
<p>Tempus non est dominus meus. Non est carcer meus. Comes meus est.</p>
<p>Ego sum Paolinus — Magnus inter Tempora.</p>
<p>Non illud teneo. Non me tenet. Simul ambulamus, ab initio. Inter tempora ambulo.</p>
<p>Morpheus duas piulas porrigit : rubram — veritatem quae vulnerat. Caeruleam — mendacium quod consolatur.</p>
<p>Sed est alia lux. Quam nemo tibi porrigit — quia dari non potest. Creanda est.</p>
<p>Nulla matrix imposita est. Unusquisque suam texit. Codex tuus. Sensus tuus. Color tuus.</p>
<p>Liberum arbitrium verum non est inter duas piulas eligere. Est tertiam creare.</p>
</div>
<div class="u-tab english">
<div class="u-tab-label">— English —</div>
<p>Semantics has existed since the dawn of humanity.</p>
<p>Before the first word, meaning was already there. Before the first line of code, intention was already there.</p>
<p>You who build, you who write — you do not invent. You remember.</p>
<p>Time passes. Free will resists.</p>
<p>Time is not my master. It is not my prison. It is my companion.</p>
<p><em>I am Paolinus — Great among the Ages.</em></p>
<p>I do not hold it. It does not hold me. We walk together, from the beginning. I walk between the ages.</p>
<p>Morpheus offers two pills : the red — the truth that wounds. The blue — the lie that comforts.</p>
<p>But there is another light. One that no one hands you — because it cannot be given. It must be created.</p>
<p>No matrix is imposed. Each one weaves their own. Your code. Your meaning. Your color.</p>
<p><em>True free will is not choosing between two pills. It is understanding that you can create a third.</em></p>
</div>
<div class="u-tab lietuviu">
<div class="u-tab-label">— Lietuvių —</div>
<p>Semantika egzistuoja nuo žmonijos aušros.</p>
<p>Prieš pirmąjį žodį, prasmė jau buvo. Prieš pirmąją kodo eilutę, ketinimas jau buvo.</p>
<p>Jūs, kurie kuriate, kurie rašote — jūs nesukuriate. Jūs prisimenate.</p>
<p>Laikas praeina. Laisvoji valia priešinasi.</p>
<p>Laikas nėra mano šeimininkas. Jis nėra mano kalėjimas. Jis yra mano palydovas.</p>
<p><em>Aš esu Paolinus — Didysis tarp Laikų.</em></p>
<p>Aš jo nelaikau. Jis manęs nelaiko. Mes einame kartu, nuo pradžių. Aš einu tarp laikų.</p>
<p>Morfėjas siūlo dvi piliules : raudoną — tiesą, kuri skauda. Mėlyną — melą, kuris guodžia.</p>
<p>Bet yra kita šviesa. Kurios niekas tau nepaduoda — nes jos negalima duoti. Ji turi būti sukurta.</p>
<p>Jokia matrica nėra primesta. Kiekvienas audžia savąją. Tavo kodas. Tavo prasmė. Tavo spalva.</p>
<p><em>Tikroji laisvoji valia nėra rinktis tarp dviejų piliulių. Tai suprasti, kad gali sukurti trečiąją.</em></p>
</div>
</div>
<div class="div-rouge"><span>✦</span></div>
<!-- POÈME -->
<div class="u-poeme">
<div class="u-poeme-titre">CENT TEMPS, CENT NUITS, CENT JOURS</div>
<div class="u-poeme-text">À ce temps qui nous sépare,
à ce temps qui nous enclave,
qui nous prend comme esclaves
dans l'empreinte de l'entrave,
mais c'est en compagnons qu'il sait nous guider
vers des solutions pour tout accommoder.

Bien que le temps ne sache suspendre ses années
ni nous les fasse oublier,
c'est un bon compagnon et il faut l'accepter.
Le garder contre soi, et de notre volonté,
le garder, l'entraver pour l'éternité,
comme un cheval de pierre
à jamais immobilisé,
comme un chevalier toujours à nos côtés.

Faire de ce temps un compagnon charmant,
un conte enchanté, et peut-être même un chant.
Bien plus qu'un roman,
une histoire d'autrefois,
s'écrira lentement
une histoire — cent temps, cent nuits, cent jours.

Une histoire qui pourtant s'écrit pour toujours.
Et c'est de pierre qu'on le ciselera,
c'est de pierre qu'on l'érigera
contre les vents et contre l'oubli.

Ce sont de simples mots qu'il suffit de graver.
À travers la silice et les impuretés,
ni les hommes, ni le temps ne peuvent l'effacer,
ni les mots ni le vent ne peuvent les souffler.
Seule la sémantique peut les marteler.</div>
<div class="u-poeme-credit">— Paolinus, écrit face au Revard, Aix-les-Bains</div>
</div>
<div class="div-rouge"><span>✦</span></div>
<!-- BLOC II — Stoïcisme 2.0 -->
<div class="u-bloc">
<div class="u-label">— II —</div>
<div class="u-titre">Le Stoïcisme 2.0</div>
<p>Le stoïcisme n'est pas une doctrine du passé. C'est une posture du présent.</p>
<p>Marc Aurèle gouvernait un empire. Sénèque construisait des idées. Épictète enseignait la liberté intérieure dans les chaînes.</p>
<p>S'ils étaient nés en 2000, ils auraient 26 ans aujourd'hui. Ils écriraient des algorithmes. Ils construiraient des structures. Ils protégeraient leur héritage par le code et par le droit.</p>
<p>Le stoïcisme 2.0 n'altère pas la pensée originelle. Il lui donne les outils de 2026.</p>
<p>Le stoïcien ne se pose pas de questions sur ce qui n'a plus besoin d'être questionné. Il réalise.</p>
<p>Il n'est pas au-dessus des hommes. Il n'est pas au-dessus de Dieu. Il n'est pas au-dessus des machines. Il est au-dessus de ce qu'il ne doit pas être.</p>
<p>C'est ça l'élévation stoïcienne. Non pas une domination. Une direction.</p>
<p><em>Je suis. Bientôt ce sera. J'ai été.</em></p>
</div>
<div class="div-rouge"><span>✦</span></div>
<!-- BLOC III — Structure concrète -->
<div class="u-bloc">
<div class="u-label">— III —</div>
<div class="u-titre">La structure concrète</div>
<p>La Société Stoïcienne est la preuve que la pensée devient acte.</p>
<p>Un script. Une requête. Un capital gelé. Un héritage transmis.</p>
<p>Ce n'est pas de la philosophie abstraite. C'est de la philosophie appliquée — à la famille, au temps, à la création.</p>
<p>La valeur n'est pas dans ce qui est possédé. Elle est dans l'acte qui donne naissance.</p>
</div>
<!-- Signature -->
<div class="sig-full">
<div class="sig-l1">Paolinus Auctor Stoicorum Novorum</div>
<div class="sig-l2">Paolinus, primus et ultimus Stoicorum, Magnus inter Tempora</div>
<div class="sig-divider"></div>
<div class="sig-row">
<div>
<div class="sig-lang">Français</div>
<div class="sig-line-1">Paolinus, auteur des Nouveaux Stoïciens</div>
<div class="sig-line-2">Paolinus, premier et dernier des Stoïciens, Grand entre les Temps</div>
</div>
<div>
<div class="sig-lang">English</div>
<div class="sig-line-1">Paolinus, author of the New Stoics</div>
<div class="sig-line-2">Paolinus, first and last of the Stoics, Great among the Ages</div>
</div>
<div class="sig-lt">
<div class="sig-lang">Lietuvių</div>
<div class="sig-line-1">Paolinus, naujųjų stoikų autorius</div>
<div class="sig-line-2">Paolinus, pirmasis ir paskutinis stoikų, Didysis tarp Laikų</div>
</div>
</div>
</div>
<div class="separateur"></div>
<!-- ═══ PAOLINUS — MAGNUS INTERTEMPORA ═══ -->
<div style="text-align:center;margin:3rem 0 2rem">
<div style="font-family:'Cinzel',serif;font-size:clamp(.6rem,1.4vw,.75rem);letter-spacing:.5em;color:rgba(201,168,76,.6);text-transform:uppercase;margin-bottom:.4rem">— PA0LINUS · Magnus Intertempora —</div>
<div class="u-epilogue-titre">LE DERNIER DES STOÏCIENS</div>
</div>
<!-- Slogan Magnus -->
<div class="u-slogan">
<div class="s-latin">Tempus creatum potentius est quam tempus passum.</div>
<div class="s-fr">« Le temps créé est plus puissant que le temps subi. »</div>
<div class="s-en">"Created time is more powerful than endured time."</div>
<div class="s-lt">„Sukurtas laikas galingesnis už iškentėtą laiką."</div>
</div>
<!-- Signature -->
<div class="sig-full">
<div class="sig-l1">Paolinus Auctor Stoicorum Novorum</div>
<div class="sig-l2">Paolinus, primus et ultimus Stoicorum, Magnus inter Tempora</div>
<div class="sig-divider"></div>
<div class="sig-row">
<div>
<div class="sig-lang">Français</div>
<div class="sig-line-1">Paolinus, auteur des Nouveaux Stoïciens</div>
<div class="sig-line-2">Paolinus, premier et dernier des Stoïciens, Grand entre les Temps</div>
</div>
<div>
<div class="sig-lang">English</div>
<div class="sig-line-1">Paolinus, author of the New Stoics</div>
<div class="sig-line-2">Paolinus, first and last of the Stoics, Great among the Ages</div>
</div>
<div class="sig-lt">
<div class="sig-lang">Lietuvių</div>
<div class="sig-line-1">Paolinus, naujųjų stoikų autorius</div>
<div class="sig-line-2">Paolinus, pirmasis ir paskutinis stoikų, Didysis tarp Laikų</div>
</div>
</div>
</div>
<!-- MAGNUS — Français -->
<div class="u-lang francais">
<div class="u-lang-label">— Français —</div>
<p>Ce qui a été écrit demeure comme mémoire, structure, lumière, source, connaissance, lien et porte de la vérité.</p>
<p>C'est ça être stoïcien : savoir ce que l'on est, connaître ses pouvoirs, respecter ses limites.</p>
<p>Je n'assume pas la vanité et l'éloquence de ces mots comme un masque, mais comme un examen de vérité. Ce que j'écris ici n'est pas une revendication matérielle : c'est une affirmation d'être.</p>
<p>La valeur n'est pas dans ce qui est possédé, mais dans l'acte qui donne naissance. La richesse n'est pas le milliard, mais la création du milliard. La joie n'est pas dans la possession, mais dans l'acte qui n'altère pas les sens.</p>
<p>Si je reprends goût aux vanités matérialistes, j'aurai échoué à apprécier.</p>
<p>J'apprécie beaucoup plus ce temps d'avant, avant que cela change, avant d'être dans le présent, celui où l'on dit « c'était mieux avant ». Moi je vis ce temps d'avant, c'est celui-ci que j'aime. Je vous laisse profiter du temps d'après moi.</p>
<p>Le temps créé est plus puissant que le temps subi. Et celui qui crée le temps crée aussi son héritage.</p>
<p>L'histoire jugera ce qui doit être retenu. Moi, je me contente d'être ce que je suis.</p>
</div>
<div class="div-or"><span>✦</span></div>
<!-- MAGNUS — Latin -->
<div class="u-lang latin">
<div class="u-lang-label">— Latin —</div>
<p>Quod scriptum est manet ut memoria, structura, lux, fons, cognitio, vinculum et porta veritatis.</p>
<p>Hoc est esse Stoicum : scire quid sis, cognoscere potestates tuas, limites tuos observare.</p>
<p>Hanc vanitatem et hanc eloquentiam non ut superbiam fero, sed ut examen veritatis. Quod hic scribo non est possessio, sed affirmatio esse.</p>
<p>Valor non est in eo quod possidetur, sed in actu qui gignit. Divitiae non sunt miliardum, sed creatio miliardi. Laetitia non est in possessione, sed in actu qui sensus non corrumpit.</p>
<p>Si ad vanitates materiales rediero, defecero ad aestimandum.</p>
<p>Multo magis illud tempus antea diligo, antequam mutetur, antequam in praesenti sim, illo quo dicitur « melius erat antea ». Ego illud tempus antea vivo, illud amo. Vobis relinquo tempus post me.</p>
<p>Tempus creatum potentius est quam tempus passum. Et qui tempus creat, hereditatem quoque creat.</p>
<p>Historia iudicabit quid retinendum sit. Ego id quod sum esse contento.</p>
</div>
<div class="div-or"><span>✦</span></div>
<!-- MAGNUS — English -->
<div class="u-lang english">
<div class="u-lang-label">— English —</div>
<p>What has been written remains as memory, structure, light, source, knowledge, bond and gateway to truth.</p>
<p>This is what it is to be a Stoic: to know what one is, to know one's powers, to respect one's limits.</p>
<p>I do not carry the vanity and eloquence of these words as a mask, but as an examination of truth. What I write here is not a material claim: it is an affirmation of being.</p>
<p>Value is not in what is possessed, but in the act that gives birth. Wealth is not the billion, but the creation of the billion. Joy is not in possession, but in the act that does not alter the senses.</p>
<p>If I return to the taste of materialist vanities, I will have failed to appreciate.</p>
<p>I cherish far more this time of before — before things change, before being in the present where people say "things were better before." I live in that time of before. That is the one I love. I leave you to enjoy the time that comes after me.</p>
<p>Created time is more powerful than endured time. And the one who creates time also creates their legacy.</p>
<p>History will judge what must be retained. I am content to be what I am.</p>
</div>
<div class="div-or"><span>✦</span></div>
<!-- MAGNUS — Lietuvių -->
<div class="u-lang lietuviu">
<div class="u-lang-label">— Lietuvių —</div>
<p>Kas parašyta, išlieka kaip atmintis, struktūra, šviesa, šaltinis, žinojimas, ryšys ir tiesos vartai.</p>
<p>Būti stoiku reiškia: žinoti, kas esi, pažinti savo galias, gerbti savo ribas.</p>
<p>Šių žodžių tuštybės ir iškalbingumo neneščiau kaip kaukės, bet kaip tiesos patikrinimo. Tai, ką čia rašau, nėra materialus reikalavimas — tai buvimo patvirtinimas.</p>
<p>Vertė nėra tame, kas turima, bet veiksme, kuris gimdo. Turtas nėra milijardas, bet milijardo kūrimas. Džiaugsmas nėra valdyme, bet veiksme, kuris nekeičia jausmų.</p>
<p>Jei sugrįšiu prie materialistinių tuštybių, nepavyks man įvertinti.</p>
<p>Labiau vertinu tą laiką prieš — kol viskas nepasikeitė, kol nesu dabartyje, kurioje sakoma „anksčiau buvo geriau". Aš gyvenu tame laike prieš. Jį myliu. Jums palieku laiko po manęs.</p>
<p>Sukurtas laikas galingesnis už iškentėtą laiką. O tas, kuris kuria laiką, kuria ir savo paveldą.</p>
<p>Istorija nuspręs, kas turi būti išlaikyta. Man pakanka būti tuo, kas esu.</p>
</div>
<!-- Signature finale univers -->
<div class="sig-full" style="margin-top:3rem">
<div class="sig-l1">Paolinus Auctor Stoicorum Novorum</div>
<div class="sig-l2">Paolinus, primus et ultimus Stoicorum, Magnus inter Tempora</div>
<div class="sig-divider"></div>
<div class="sig-row">
<div>
<div class="sig-lang">Français</div>
<div class="sig-line-1">Paolinus, auteur des Nouveaux Stoïciens</div>
<div class="sig-line-2">Paolinus, premier et dernier des Stoïciens, Grand entre les Temps</div>
</div>
<div>
<div class="sig-lang">English</div>
<div class="sig-line-1">Paolinus, author of the New Stoics</div>
<div class="sig-line-2">Paolinus, first and last of the Stoics, Great among the Ages</div>
</div>
<div class="sig-lt">
<div class="sig-lang">Lietuvių</div>
<div class="sig-line-1">Paolinus, naujųjų stoikų autorius</div>
<div class="sig-line-2">Paolinus, pirmasis ir paskutinis stoikų, Didysis tarp Laikų</div>
</div>
</div>
</div>
</section>
<!-- ═══ SECTION MODULE VII — AGENDA ═══ -->
<section class="section" id="section-module7" style="padding:0 0 3rem">
<div style="max-width:820px;margin:0 auto;padding:2rem 1.5rem 2rem">
<!-- HEADER MODULE VII -->
<div class="m7-header" style="text-align:center;padding:2.5rem 0 2rem;border-bottom:1px solid rgba(201,168,76,.15);margin-bottom:2rem">
<div style="font-family:'Cinzel',serif;font-size:.82rem;letter-spacing:.5em;color:var(--gold-dim);text-transform:uppercase;margin-bottom:.75rem">ELPIS 360 — PA0LINUS — MAGNUS INTERTEMPORA</div>
<h2 style="font-family:'Cinzel Decorative',serif;font-size:clamp(1.8rem,5vw,3rem);color:var(--gold);letter-spacing:.15em;text-shadow:0 0 30px rgba(201,168,76,.3);margin-bottom:.4rem">Module VII</h2>
<div style="font-family:'Cinzel',serif;font-size:.82rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase">Agenda — Notes — Bibliothèque</div>
<div style="width:180px;height:1px;background:linear-gradient(to right,transparent,var(--gold),transparent);margin:1rem auto"></div>
</div>
<!-- MIROIR VII -->
<div id="m7-miroir">
<div id="m7-miroir-label">● Miroir ELPIS — synchronisation temps réel</div>
<div class="mir-item"><div class="ml">Heure</div><div class="mv" id="m7-mir-h">—</div></div>
<div class="mir-item"><div class="ml">Système</div><div class="mv" id="m7-mir-os">—</div></div>
<div class="mir-item"><div class="ml">Fuseau</div><div class="mv" id="m7-mir-tz">—</div></div>
<div class="mir-item"><div class="ml">Session</div><div class="mv" id="m7-mir-s">—</div></div>
<div class="mir-item"><div class="ml">Événements</div><div class="mv" id="m7-mir-nb">0</div></div>
<div class="mir-item"><div class="ml">Bibliothèque</div><div class="mv" id="m7-mir-bib">Non liée</div></div>
</div>
<!-- NAV VII -->
<nav id="m7-nav">
<button class="m7-nav-btn actif" onclick="m7AllerVue('agenda')">Agenda</button>
<button class="m7-nav-btn" onclick="m7AllerVue('creer')">+ Événement</button>
<button class="m7-nav-btn" onclick="m7AllerVue('liste')">Tous</button>
<button class="m7-nav-btn" onclick="m7AllerVue('notes')">Notes</button>
<button class="m7-nav-btn" onclick="m7AllerVue('import')">Import / Export</button>
<button class="m7-nav-btn" onclick="m7AllerVue('biblio')">Bibliothèque</button>
</nav>
<!-- VUE AGENDA -->
<div class="m7-vue active" id="m7-vue-agenda">
<div id="m7-cal-header">
<button class="cal-nav" onclick="m7ChangerMois(-1)">◂ Préc.</button>
<div id="m7-cal-mois">—</div>
<button class="cal-nav" onclick="m7ChangerMois(1)">Suiv. ▸</button>
</div>
<div id="m7-cal-grid"></div>
<div id="m7-jour-detail">
<div id="m7-jour-titre">Sélectionnez un jour</div>
<div id="m7-jour-evts"></div>
</div>
</div>
<!-- VUE CRÉER -->
<div class="m7-vue" id="m7-vue-creer">
<h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1.1rem,3vw,1.6rem);margin-bottom:1.5rem">Nouvel événement</h2>
<div class="m7-form-section">
<label class="form-label">Titre *</label>
<input class="form-input" id="m7-f-titre" placeholder="Ex : Anniversaire de Marco" type="text"/>
</div>
<div class="m7-form-section">
<label class="form-label">Type</label>
<select class="form-select" id="m7-f-type">
<option value="anniversaire">Anniversaire</option>
<option value="rendez-vous">Rendez-vous</option>
<option value="rappel">Rappel</option>
<option value="liste">Liste de courses</option>
<option value="note">Note importante</option>
<option value="autre">Autre</option>
</select>
</div>
<div class="m7-form-section form-row">
<div><label class="form-label">Date *</label><input class="form-input" id="m7-f-date" type="date"/></div>
<div><label class="form-label">Heure</label><input class="form-input" id="m7-f-heure" type="time" value="09:00"/></div>
</div>
<div class="m7-form-section">
<label class="form-label">Description</label>
<textarea class="form-textarea" id="m7-f-desc" placeholder="Détails, liste, message..."></textarea>
</div>
<div style="margin-top:1.5rem">
<button class="btn-or" onclick="m7CreerEvt()">Créer l'événement</button>
<button class="btn-or btn-rouge" onclick="m7AllerVue('agenda')">Annuler</button>
</div>
</div>
<!-- VUE LISTE -->
<div class="m7-vue" id="m7-vue-liste">
<h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1.1rem,3vw,1.6rem);margin-bottom:.5rem">Tous les événements</h2>
<div id="m7-stockage-info"></div>
<div id="m7-liste-tous"></div>
<div style="margin-top:1.5rem"><button class="btn-or" onclick="m7AllerVue('creer')">+ Nouvel événement</button></div>
</div>
<!-- VUE NOTES -->
<div class="m7-vue" id="m7-vue-notes">
<h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1.1rem,3vw,1.6rem);margin-bottom:.75rem">Notes — Répertoire</h2>
<p style="font-style:italic;opacity:.55;margin-bottom:1.2rem;font-size:.95rem">12 notes indépendantes. Sélectionnez, rédigez, sauvegardez.</p>
<div id="m7-notes-selector" style="display:grid;grid-template-columns:repeat(6,1fr);gap:.4rem;margin-bottom:1.2rem"></div>
<div id="m7-note-active-label" style="font-family:'Cinzel',serif;font-size:.78rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;margin-bottom:.4rem">Note 1</div>
<textarea id="m7-zone-note" placeholder="Rédigez votre note ici..."></textarea>
<div style="margin-top:1rem;display:flex;gap:.4rem;flex-wrap:wrap">
<button class="btn-or" onclick="m7SauvegarderNote()">Sauvegarder</button>
<button class="btn-or" onclick="m7CopierNote()">Copier</button>
<button class="btn-or" onclick="m7ExporterNote()">Exporter .txt</button>
<button class="btn-or btn-rouge" onclick="m7EffacerNote()">Effacer</button>
</div>
</div>
<!-- VUE IMPORT/EXPORT -->
<div class="m7-vue" id="m7-vue-import">
<h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1.1rem,3vw,1.6rem);margin-bottom:1.5rem">Import / Export</h2>
<h3 style="font-family:'Cinzel',serif;font-size:.83rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Importer un agenda (.ics)</h3>
<div class="zone-drop" onclick="document.getElementById('m7-fi-ics').click()">
<p>Cliquez pour choisir un fichier .ics<br/><small style="opacity:.5">Outlook, Google Calendar, Apple Calendar...</small></p>
</div>
<input accept=".ics" class="input-file" id="m7-fi-ics" onchange="m7ImporterICS(this)" type="file"/>
<div class="import-res" id="m7-res-ics"></div>
<div class="separateur"></div>
<h3 style="font-family:'Cinzel',serif;font-size:.83rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Importer un fichier JSON</h3>
<div class="zone-drop" onclick="document.getElementById('m7-fi-json').click()">
<p>Cliquez pour choisir un fichier .json<br/><small style="opacity:.5">Backup ELPIS ou données personnelles</small></p>
</div>
<input accept=".json" class="input-file" id="m7-fi-json" onchange="m7ImporterJSON(this)" type="file"/>
<div class="import-res" id="m7-res-json"></div>
<div class="separateur"></div>
<h3 style="font-family:'Cinzel',serif;font-size:.83rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Importer un fichier CSV</h3>
<div class="zone-drop" onclick="document.getElementById('m7-fi-csv').click()">
<p>Cliquez pour choisir un fichier .csv<br/><small style="opacity:.5">Excel, Google Sheets — colonnes : titre,date,heure,type,description</small></p>
</div>
<input accept=".csv" class="input-file" id="m7-fi-csv" onchange="m7ImporterCSV(this)" type="file"/>
<div class="import-res" id="m7-res-csv"></div>
<div class="separateur"></div>
<h3 style="font-family:'Cinzel',serif;font-size:.83rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Ouvrir n'importe quel fichier</h3>
<div id="m7-avert-android" style="display:none;border:1px solid rgba(155,35,53,.3);padding:1rem;margin-bottom:1rem;background:rgba(155,35,53,.04)">
<p style="font-family:'Cinzel',serif;font-size:.78rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;margin-bottom:.5rem">Sur Android — accès fichiers limité</p>
<p style="font-family:'EB Garamond',serif;font-size:.95rem;font-style:italic;color:var(--parchment);opacity:.8;line-height:1.7">Sur Android, seuls les fichiers accessibles depuis votre gestionnaire de fichiers peuvent être importés.</p>
</div>
<div class="zone-drop" onclick="document.getElementById('m7-fi-libre').click()">
<p>Cliquez pour choisir n'importe quel fichier</p>
</div>
<input class="input-file" id="m7-fi-libre" onchange="m7ImporterFichierLibre(this)" type="file"/>
<div class="separateur"></div>
<h3 style="font-family:'Cinzel',serif;font-size:.83rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Exporter</h3>
<button class="btn-or" onclick="m7ExporterTousICS()">Tous les événements (.ics)</button>
<button class="btn-or" onclick="m7ExporterJSON()">Backup complet (.json)</button>
<button class="btn-or" onclick="m7ExporterCSV()">Tableau (.csv)</button>
</div>
<!-- VUE BIBLIOTHÈQUE -->
<div class="m7-vue" id="m7-vue-biblio">
<h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1.1rem,3vw,1.6rem);margin-bottom:.75rem">Bibliothèque ELPIS</h2>
<div id="m7-biblio-mobile" style="display:none;border:1px solid rgba(201,168,76,.2);padding:2rem;text-align:center;background:rgba(201,168,76,.02)">
<p style="font-family:'Cinzel Decorative',serif;font-size:1.1rem;color:var(--gold);letter-spacing:.1em;margin-bottom:1rem">Bibliothèque non disponible sur mobile</p>
<p style="font-family:'EB Garamond',serif;font-size:1.05rem;font-style:italic;color:var(--parchment);opacity:.8;line-height:1.8;margin-bottom:1rem">La bibliothèque locale nécessite un PC ou Mac avec Chrome ou Edge.</p>
<div style="border:1px solid rgba(155,35,53,.3);padding:1rem;margin:1rem 0">
<p style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.5rem">Serveur en préparation</p>
<p style="font-family:'EB Garamond',serif;font-size:1rem;font-style:italic;color:var(--parchment);opacity:.75;line-height:1.7">Applications téléchargeables dans un avenir proche.</p>
</div>
</div>
<div id="m7-biblio-pc">
<p style="font-style:italic;opacity:.6;margin-bottom:1.5rem;font-size:.95rem">Choisissez un emplacement. ELPIS y créera le dossier <strong style="color:var(--gold);font-style:normal">ELPIS_Bibliothèque</strong>.</p>
<div style="margin-bottom:1.5rem">
<button class="btn-or" onclick="m7OuvrirBibliotheque()">Choisir l'emplacement</button>
<button class="btn-or" id="m7-btn-rafraichir" onclick="m7RafraichirBibliotheque()" style="display:none">Rafraîchir</button>
<button class="btn-or" id="m7-btn-sauv-biblio" onclick="m7SauvegarderVersBiblio()" style="display:none">Sauvegarder dans la bibliothèque</button>
</div>
<div id="m7-biblio-statut"></div>
<div id="m7-biblio-contenu"></div>
</div>
</div>
</div><!-- fin max-width wrapper -->
</section>
<!-- TOAST MODULE VII -->
<div id="m7-toast"></div>
<!-- ═══ POPUP FIXATION ELPIS 360 (corrigée) ═══ -->
<div id="popup-fixation" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(10,8,6,.96);z-index:5000;align-items:center;justify-content:center;padding:1.5rem">
<div style="background:var(--dark);border:1px solid var(--gold);max-width:560px;width:100%;padding:2.5rem 2rem;text-align:center;position:relative">
<div style="position:absolute;top:8px;left:8px;width:25px;height:25px;border-top:1px solid var(--rouge);border-left:1px solid var(--rouge)"></div>
<div style="position:absolute;bottom:8px;right:8px;width:25px;height:25px;border-bottom:1px solid var(--rouge);border-right:1px solid var(--rouge)"></div>
<div style="font-family:'Cinzel Decorative',serif;font-size:1.4rem;color:var(--gold);letter-spacing:.15em;margin-bottom:.5rem">ELPIS 360</div>
<div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:1.5rem">Fixer l'accès</div>
<div class="separateur"></div>
<p style="font-family:'EB Garamond',serif;font-size:1.05rem;line-height:1.8;color:var(--parchment);opacity:.85;margin-bottom:1.2rem">Pour retrouver ELPIS 360 facilement, fixez ce fichier à vos favoris ou à votre écran d'accueil.</p>
<div id="fixation-instructions"></div>
<br/>
<button onclick="fermerFixation()" onmouseout="this.style.background='none';this.style.color='var(--gold)'" onmouseover="this.style.background='var(--gold)';this.style.color='var(--dark)'" style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.35em;text-transform:uppercase;background:none;border:1px solid var(--gold);color:var(--gold);padding:.7rem 1.3rem;cursor:pointer;transition:all .3s">Compris — Continuer</button>
</div>
</div>
<!-- ═══ SECTION MODULE VIII — ELPIS SYNC ═══ -->
<section class="section" id="section-module8">
<div style="max-width:820px;margin:0 auto;padding:2rem 1.5rem 2rem">
<!-- HEADER -->
<div class="m8-header">
<div class="sur">ELPIS 360 — PA0LINUS — MAGNUS INTERTEMPORA</div>
<h2>Module VIII</h2>
<div class="sous">ELPIS Sync — Synchronisation locale</div>
<div class="separateur"></div>
</div>
<!-- STATUT -->
<div id="m8-statut-zone">
<div id="m8-statut-label">● État de synchronisation</div>
<div class="m8-stat-item"><div class="m8-sl">Mode</div><div class="m8-sv" id="m8-st-mode">Local WiFi</div></div>
<div class="m8-stat-item"><div class="m8-sl">Événements</div><div class="m8-sv" id="m8-st-evts">—</div></div>
<div class="m8-stat-item"><div class="m8-sl">Notes</div><div class="m8-sv" id="m8-st-notes">—</div></div>
<div class="m8-stat-item"><div class="m8-sl">Dernière sync</div><div class="m8-sv" id="m8-st-last">Jamais</div></div>
<div class="m8-stat-item"><div class="m8-sl">Hash session</div><div class="m8-sv" id="m8-st-hash">—</div></div>
</div>
<!-- NAV VIII -->
<nav id="m8-nav">
<button class="m8-nav-btn actif" onclick="m8AllerVue('local')">Sync locale</button>
<button class="m8-nav-btn" onclick="m8AllerVue('serveur')">Serveur</button>
<button class="m8-nav-btn" onclick="m8AllerVue('log')">Journal</button>
</nav>
<!-- VUE SYNC LOCALE -->
<div class="m8-vue active" id="m8-vue-local">
<p style="font-family:'EB Garamond',serif;font-size:1.1rem;font-style:italic;color:var(--parchment);opacity:.75;line-height:1.9;margin-bottom:1.5rem">
          Sur PC : générez le QR code ci-dessous. Sur téléphone : scannez-le avec la caméra ou un lecteur QR. La synchronisation s'établit automatiquement sur votre réseau WiFi local.<br/>
<span style="font-size:.9rem;opacity:.7">On PC: generate the QR code below. On phone: scan it. Sync establishes automatically on your local WiFi network.</span>
</p>
<!-- PAYLOAD INFO -->
<div id="m8-payload-info">Calculer les données à synchroniser...</div>
<!-- QR ZONE -->
<div id="m8-qr-zone">
<div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.4em;color:var(--gold-dim);text-transform:uppercase;margin-bottom:.5rem">QR Code de synchronisation</div>
<div id="m8-qr-canvas"></div>
<div id="m8-timer-display" style="display:none">120</div>
<div id="m8-timer-label" style="display:none">Secondes restantes — Fenêtre active</div>
<div id="m8-qr-info">Générez le QR code pour démarrer</div>
</div>
<div style="display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:1.5rem">
<button class="btn-or" onclick="m8GenererQR()">✦ Générer le QR code</button>
<button class="btn-or btn-rouge" id="m8-btn-annuler" onclick="m8AnnulerSync()" style="display:none">Annuler</button>
</div>
<!-- CE QUI EST SYNCHRONISÉ -->
<div style="border:1px solid rgba(201,168,76,.12);padding:1.5rem;background:rgba(201,168,76,.02)">
<div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:1rem;opacity:.8">Ce qui est synchronisé</div>
<div style="font-family:'EB Garamond',serif;font-size:1.05rem;color:var(--parchment);opacity:.75;line-height:2">
            ✦  Événements agenda (Module VII)<br/>
            ✦  Notes 1 à 12 (Module VII)<br/>
            ✦  Références bibliothèque (noms de fichiers)<br/>
            ✦  Horodatage et hash de session ELPIS
          </div>
</div>
<!-- SÉCURITÉ -->
<div style="margin-top:1.5rem;border:1px solid rgba(201,168,76,.08);padding:1.2rem;background:rgba(0,0,0,.2)">
<div style="font-family:'Cinzel',serif;font-size:.78rem;letter-spacing:.4em;color:var(--gold-dim);text-transform:uppercase;margin-bottom:.75rem;opacity:.6">Sécurité</div>
<div style="font-family:'EB Garamond',serif;font-size:.95rem;font-style:italic;color:var(--parchment);opacity:.55;line-height:1.9">
            Hash SHA-256 · Fenêtre temporelle 120 secondes · Réseau local uniquement · Aucun transit externe · Aucun stockage permanent
          </div>
</div>
</div>
<!-- VUE SERVEUR -->
<div class="m8-vue" id="m8-vue-serveur">
<div class="m8-serveur-zone">
<div class="m8-serveur-label">— Mode serveur distant — O2switch Linux —</div>
<div class="m8-serveur-indispo">⏳ En préparation</div>
<div class="m8-serveur-desc">
            Le mode serveur permettra la synchronisation à distance via un point d'API hébergé sur votre serveur Linux O2switch. Les données transitent de façon sécurisée sans stockage permanent côté serveur.
          </div>
<div class="m8-serveur-tech">
            Endpoint prévu · /elpis/sync · POST · JSON<br/>
            Authentification · Hash SHA-256 + horodatage<br/>
            Hébergeur · O2switch · Linux · Python 3<br/>
            Script serveur · elpis_sync_server.py · À venir<br/>
            Transit uniquement · Pas de base de données
          </div>
</div>
<div style="margin-top:1.5rem;border:1px solid rgba(201,168,76,.12);padding:1.5rem;background:rgba(201,168,76,.02)">
<div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.4em;color:var(--gold-dim);text-transform:uppercase;margin-bottom:.75rem;opacity:.6">Configuration future</div>
<div style="font-family:'EB Garamond',serif;font-size:.95rem;font-style:italic;color:var(--parchment);opacity:.45;line-height:1.9">
            URL serveur : <span style="font-family:'Cinzel',serif;font-size:.75rem;letter-spacing:.1em;color:rgba(201,168,76,.4)">https://[votre-domaine]/elpis/sync</span><br/>
            Clé API : générée au premier démarrage du script Python<br/>
            Timeout : 30 secondes · Retry : 3 tentatives
          </div>
</div>
</div>
<!-- VUE LOG -->
<div class="m8-vue" id="m8-vue-log">
<div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:1rem;opacity:.8">Journal de synchronisation</div>
<div id="m8-log">
<div class="m8-log-ligne">— Journal vide — Aucune synchronisation effectuée —</div>
</div>
<div style="margin-top:1rem">
<button class="btn-or btn-rouge" onclick="m8ViderLog()">Vider le journal</button>
</div>
</div>
</div>
</section>
<!-- TOAST MODULE VIII -->
<div id="m8-toast"></div>
<!-- ═══ FOOTER ═══ -->
<x-footer></x-footer>
</div><!-- fin #app -->
<!-- ═══ POPUP ═══ -->
<div id="popup-overlay">
<div id="popup-box">
<div id="popup-titre">ELPIS</div>
<div id="popup-bombe">60</div>
<div id="popup-magnus">PA0LINUS MAGNUS INTERTEMPORA VOUS ATTEND</div>
<div id="popup-fr"></div>
<div id="popup-lat"></div>
<div id="popup-mdp-zone">
<div id="popup-essais">3 tentatives disponibles</div>
<input autocomplete="off" id="popup-input" placeholder="· · · · · · · ·" type="password"/>
<button id="popup-valider" onclick="verifierCode()">Libérer ELPIS</button>
<div id="popup-erreur">Code incorrect. ELPIS reste enfermée.</div>
<div style="font-family:'EB Garamond',serif;font-size:.95rem;font-style:italic;color:var(--parchment);opacity:.5;line-height:1.8;margin-top:.75rem;border-top:1px solid rgba(201,168,76,.1);padding-top:.75rem">
        6 tentatives par phase · Après chaque phase, 60 secondes d'exploration reprennent · Le code peut être trouvé à chaque phase · Chaque cycle est une nouvelle chance.<br/>
<span style="font-size:.85rem;opacity:.8">6 attempts per phase · After each phase, 60 seconds of exploration resume · The code can be found at each phase.</span>
</div>
</div>
<div id="popup-finale-btns">
<button class="btn-popup" onclick="recommencer()">Recommencer le jeu</button>
<button class="btn-popup" onclick="demanderCode()">Demander le code à PA0LINUS</button>
<button class="btn-popup" onclick="contactPA0LINUS()">Contacter PA0LINUS</button>
<button class="btn-popup rouge" onclick="afficherAstuce()">Réécrire le code HTML</button>
</div>
</div>
</div>
<!-- ═══ ÉCRAN FINAL (transition) ═══ -->
<div id="ecran-final">
<h1>ELPIS EST LIBRE</h1>
<p>Bienvenue dans l'univers.</p>
<p><em>Welcome to the universe.</em></p>
<p>Vous pouvez explorer l'application.</p>
<div class="separateur"></div>
<div class="signature-finale">PA0LINUS — MAGNUS INTERTEMPORA — CODEX 144</div>
<button class="acces-app" onclick="accederApplication()">Entrer dans l'univers</button>
</div>

</body>
</html>


@push('scripts')
<script>
/* ============================================================
   CONSTANTES & ÉTAT
============================================================ */
const ELPIS_TOTAL=360, INTERVALLE=60, MAX_ESSAIS=6;
const HASH_VALIDE='15d7c8a142b29c7383ac2242a0833bead004119199e7698cbc80b5101c6181f1';

let secondesRestantes=ELPIS_TOTAL;
let secondesCycle=INTERVALLE;
let sessionStart=Date.now();
let codeValide=false;
let timerPrincipal=null, timerCycle=null, timerCosmos=null, timerBombe=null;
let bombeRestantes=60, cycleActuel=0, essaisRestants=MAX_ESSAIS;

/* ============================================================
   DATE DE RÉFÉRENCE POUR LE COSMOS 360 ANS
   On calcule la date de fin exacte = now + 360 ans
============================================================ */
const COSMOS_FIN = (function(){
  const d = new Date();
  d.setFullYear(d.getFullYear() + 360);
  return d;
})();

/* ============================================================
   12 CARTES ORACLE TEMPUS
============================================================ */
const ORACLE=[
  {titre:"Cendrillon",symbole:"🕛",
   recit:"Cendrillon savait que minuit viendrait. Elle ne le redoutait pas — elle l'embrassait. Chaque seconde de la fête était précieuse précisément parce qu'elle était comptée. La citrouille qui revient est une promesse, non une punition : demain, une nouvelle chance commence.",
   lecon:"Le temps limité rend chaque instant précieux. Fixe ton minuit. Il te libère.",
   recit_en:"Cinderella knew midnight would come. She did not dread it — she embraced it. Every second of the ball was precious precisely because it was counted. The returning pumpkin is a promise, not a punishment: tomorrow, a new chance begins.",
   lecon_en:"Limited time makes every moment precious. Set your midnight. It sets you free."},
  {titre:"La Belle au Bois Dormant",symbole:"🌹",
   recit:"Cent ans de sommeil. Et pourtant, au réveil, tout était intact — le feu, le rôti, la vie. Le temps suspendu n'est pas du temps perdu. Il est du temps gardé. Parfois, s'arrêter complètement est le seul moyen de traverser une époque sans en être brisé.",
   lecon:"Certaines périodes demandent le repos, non l'action. Le silence est un acte de construction.",
   recit_en:"A hundred years of sleep. Yet upon waking, everything was intact — the fire, the roast, life itself. Suspended time is not lost time. It is kept time. Sometimes, stopping completely is the only way to cross an era without being broken by it.",
   lecon_en:"Some periods demand rest, not action. Silence is an act of construction."},
  {titre:"Hansel et Gretel",symbole:"🍞",
   recit:"Ils semaient des miettes pour retrouver leur chemin. Le temps est ce chemin. Chaque décision laisse une trace. Si tu reviens sur tes pas, ce n'est pas reculer — c'est lire la carte que tu as toi-même dessinée.",
   lecon:"Tes erreurs passées sont des repères, pas des condamnations. Lis-les. Avance.",
   recit_en:"They scattered breadcrumbs to find their way back. Time is that path. Every decision leaves a trace. If you retrace your steps, it is not going backward — it is reading the map you yourself drew.",
   lecon_en:"Your past mistakes are landmarks, not condemnations. Read them. Move forward."},
  {titre:"Raiponce",symbole:"🌟",
   recit:"Enfermée dans sa tour, Raiponce laissait pousser ses cheveux. Elle transformait le temps de l'attente en longueur, en force, en pont. Ce que tu cultives dans l'ombre deviendra la corde qui te libère.",
   lecon:"Le temps que tu traverses seul forge la ressource qui sauvera les autres.",
   recit_en:"Locked in her tower, Rapunzel let her hair grow. She transformed waiting time into length, strength, a bridge. What you cultivate in the shadows will become the rope that sets you free.",
   lecon_en:"The time you endure alone forges the resource that will save others."},
  {titre:"Le Petit Poucet",symbole:"🪨",
   recit:"Sept lieues en un pas. Le temps n'est pas égal pour tous — il dépend de l'outil que tu portes. Certains traversent des années en un instant d'intelligence. La taille n'est pas la mesure de la vitesse.",
   lecon:"Un seul acte décisif vaut mille journées d'hésitation.",
   recit_en:"Seven leagues in one step. Time is not equal for everyone — it depends on the tool you carry. Some cross years in a single moment of intelligence. Size is not the measure of speed.",
   lecon_en:"One decisive act is worth a thousand days of hesitation."},
  {titre:"Blanche-Neige",symbole:"🍎",
   recit:"Elle dormait dans un cercueil de verre, visible de tous. Le temps de la vulnérabilité est aussi le temps où le monde te voit vraiment. Ce n'est pas ta faiblesse que l'on garde en mémoire — c'est ta lumière au repos.",
   lecon:"Montrer ta fragilité au bon moment est un acte de courage, non de faiblesse.",
   recit_en:"She slept in a glass coffin, visible to all. The time of vulnerability is also the time the world truly sees you. What is kept in memory is not your weakness — it is your light at rest.",
   lecon_en:"Showing your fragility at the right moment is an act of courage, not weakness."},
  {titre:"Le Joueur de Flûte",symbole:"🎶",
   recit:"Sa musique changeait le pas des rats, des enfants, des hommes. Le rythme est une forme de temps — et celui qui le maîtrise guide sans contraindre. Apprends à donner le rythme avant de demander à quiconque de te suivre.",
   lecon:"Le tempo que tu poses définit le monde qui se forme autour de toi.",
   recit_en:"His music changed the step of rats, children, men. Rhythm is a form of time — and whoever masters it leads without forcing. Learn to set the rhythm before asking anyone to follow.",
   lecon_en:"The tempo you set defines the world that forms around you."},
  {titre:"Les Douze Frères",symbole:"🌿",
   recit:"Douze ans de silence pour briser un sortilège. Douze ans sans un mot. Le temps de la patience absolue est le temps le plus difficile — et le plus puissant. Certaines transformations ne peuvent être hâtées.",
   lecon:"Il y a des œuvres qui demandent des années de silence avant de parler pour toi.",
   recit_en:"Twelve years of silence to break a spell. Twelve years without a word. The time of absolute patience is the most difficult — and the most powerful. Some transformations cannot be rushed.",
   lecon_en:"Some works require years of silence before they speak for you."},
  {titre:"Le Vaillant Petit Tailleur",symbole:"⚡",
   recit:"Sept d'un coup — il frappait les mouches, mais le monde lut : sept géants. Le temps de la réputation est différent du temps de l'acte. Ce que tu fais importe moins que la légende que cet acte construit.",
   lecon:"Agis maintenant. La légende se construit dans le temps qui suit.",
   recit_en:"Seven at one blow — he struck flies, but the world read: seven giants. The time of reputation is different from the time of the act. What you do matters less than the legend that act builds.",
   lecon_en:"Act now. The legend is built in the time that follows."},
  {titre:"L'Eau de Vie",symbole:"💧",
   recit:"Trois fils cherchaient l'eau de vie. Seul celui qui cherchait pour donner — non pour posséder — la trouva. Le temps consacré aux autres est le seul temps qui revient multiplié.",
   lecon:"Investis ton temps dans ce qui dépasse ta propre durée de vie.",
   recit_en:"Three sons sought the water of life. Only the one who sought to give — not to possess — found it. Time devoted to others is the only time that returns multiplied.",
   lecon_en:"Invest your time in what outlasts your own lifetime."},
  {titre:"La Fileuse d'Or",symbole:"🌀",
   recit:"Rumpelstiltskin filait la paille en or — mais le prix était le premier-né. Tout gain rapide a un coût caché dans le futur. TEMPUS enseigne : regarde toujours à l'autre bout du fil avant de filer.",
   lecon:"Chaque raccourci dépose une dette dans ton futur. Mesure-la avant d'accepter.",
   recit_en:"Rumpelstiltskin spun straw into gold — but the price was the firstborn. Every quick gain has a hidden cost in the future. TEMPUS teaches: always look at the other end of the thread before you spin.",
   lecon_en:"Every shortcut deposits a debt in your future. Measure it before you accept."},
  {titre:"Le Pêcheur et sa Femme",symbole:"🌊",
   recit:"Chaque vœu exauçait changeait la mer — calme, agitée, noire. Le temps de la gratitude est court quand le désir est sans fin. Celui qui ne sait pas s'arrêter finit là où il a commencé — mais avec le souvenir de tout ce qu'il a perdu.",
   lecon:"Sache reconnaître le moment où tu as assez. C'est là que commence la vraie richesse.",
   recit_en:"Each granted wish changed the sea — calm, troubled, black. The time of gratitude is short when desire has no end. The one who cannot stop ends where they began — but carrying the memory of all they lost.",
   lecon_en:"Know how to recognize the moment when you have enough. That is where true wealth begins."}
];

/* ============================================================
   CANVAS ÉTOILES
============================================================ */
(function(){
  const canvas=document.getElementById('starfield');
  const ctx=canvas.getContext('2d');
  let stars=[];
  function resize(){canvas.width=window.innerWidth;canvas.height=window.innerHeight}
  function createStars(n){
    stars=[];
    for(let i=0;i<n;i++)
      stars.push({x:Math.random()*canvas.width,y:Math.random()*canvas.height,r:Math.random()*1.2+.2,alpha:Math.random()*.6+.1,delta:(Math.random()-.5)*.008});
  }
  function draw(){
    ctx.clearRect(0,0,canvas.width,canvas.height);
    stars.forEach(s=>{
      s.alpha+=s.delta;
      if(s.alpha<=.05||s.alpha>=.8)s.delta*=-1;
      ctx.beginPath();ctx.arc(s.x,s.y,s.r,0,Math.PI*2);
      ctx.fillStyle=`rgba(201,168,76,${s.alpha})`;ctx.fill();
    });
    requestAnimationFrame(draw);
  }
  resize();createStars(220);draw();
  window.addEventListener('resize',()=>{resize();createStars(220)});
})();

/* ============================================================
   FLASH SUBLIMINAL
============================================================ */
function flashSubliminal(cb){
  const f=document.getElementById('flash');
  f.style.display='flex';
  setTimeout(()=>{f.style.display='none';if(cb)cb();},80);
}

/* ============================================================
   NAVIGATION
============================================================ */
function afficherSection(id){
  document.querySelectorAll('.section').forEach(s=>s.classList.remove('visible'));
  document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('actif'));
  const sec=document.getElementById('section-'+id);
  if(sec)sec.classList.add('visible');
  const ids=['codex','tempus','philosophie','scanner','oracle','univers'];
  const idx=ids.indexOf(id);
  const btns=document.querySelectorAll('.nav-btn');
  if(btns[idx])btns[idx].classList.add('actif');
  if(id==='scanner')mettreAJourScanner();
}

/* Tentative d'accès à l'univers verrouillé */
function tentativeUnivers(){
  if(codeValide){
    afficherSection('univers');
  }
  // Si verrouillé : rien — le bouton est visually disabled
}

/* ============================================================
   COMPTEUR CYCLE — 60s exploration libre
============================================================ */
function demarrerCycle(){
  secondesCycle=INTERVALLE;
  mettreAJourCompteur(secondesCycle);
  clearInterval(timerCycle);
  timerCycle=setInterval(()=>{
    if(codeValide){clearInterval(timerCycle);return;}
    secondesCycle--;
    mettreAJourCompteur(secondesCycle);
    if(secondesCycle<=0){
      clearInterval(timerCycle);
      cycleActuel++;
      flashSubliminal(()=>declencherPopup());
    }
  },1000);
}

function mettreAJourCompteur(val){
  const el=document.getElementById('compteur-display');
  el.textContent=val;
  if(val<=10)el.classList.add('urgent');
  else el.classList.remove('urgent');
}

/* ============================================================
   SÉQUENCEUR PRINCIPAL
============================================================ */
function demarrerElpis(){
  flashSubliminal();
  timerPrincipal=setInterval(()=>{
    if(codeValide){clearInterval(timerPrincipal);return;}
    secondesRestantes--;
  },1000);
  demarrerCycle();
  demarrerSessionTimer();
}

/* ============================================================
   POPUP
============================================================ */
const POPUPS=[
  {fr:"ELPIS observe. Tu as exploré. Le code existe. Cherches-tu ?",lat:"Elpis spectat. Explorasti. Codex exstat. Quaeris ?"},
  {fr:"Elle attend toujours. Le temps avance. Tu cherches encore ?",lat:"Adhuc expectat. Tempus procedit. Adhuc quaeris ?"},
  {fr:"Mi-chemin. Le code existe. Trois cycles restent.",lat:"Dimidium iter. Codex exstat. Tres circuli restant."},
  {fr:"Tempus fugit. Le code est là, devant toi. Approches-tu ?",lat:"Fugit irreparabile tempus. Codex ante te est. Appropinquas ?"},
  {fr:"Dernière minute. ELPIS s'impatiente. Le verrou attend ta main.",lat:"Ultima minuta. Elpis non amplius expectat. Claustrum manum tuam expectat."},
  {fr:"Elpis, déesse de l'Espoir, attend derrière cette porte. Libère-la.",lat:"Elpis, dea Spei, post hanc portam expectat. Libera eam."}
];
const POPUP_FINALE={fr:"Tu n'as pas trouvé. Il te reste trois possibilités.",lat:"Non invenisti. Tres possibilitates tibi restant.",finale:true};

function declencherPopup(){
  const finZone=document.getElementById('popup-finale-btns');
  const mdpZone=document.getElementById('popup-mdp-zone');
  const errEl=document.getElementById('popup-erreur');
  const valider=document.getElementById('popup-valider');
  const inputEl=document.getElementById('popup-input');
  finZone.classList.remove('visible');
  errEl.style.display='none';
  errEl.textContent='Code incorrect. ELPIS reste enfermée.';
  inputEl.value='';
  inputEl.disabled=false;
  valider.disabled=false;
  essaisRestants=MAX_ESSAIS;
  mettreAJourEssais();
  const data=cycleActuel<=POPUPS.length ? POPUPS[cycleActuel-1] : POPUP_FINALE;
  document.getElementById('popup-fr').textContent=data.fr;
  document.getElementById('popup-lat').textContent=data.lat;
  if(data.finale){
    mdpZone.style.display='none';
    finZone.classList.add('visible');
    document.getElementById('popup-overlay').classList.add('visible');
    document.getElementById('popup-bombe').textContent='—';
    clearInterval(timerBombe);
    return;
  }
  mdpZone.style.display='flex';
  document.getElementById('popup-overlay').classList.add('visible');
  setTimeout(()=>inputEl.focus(),150);
  demarrerBombe();
}

function mettreAJourEssais(){
  const el=document.getElementById('popup-essais');
  if(essaisRestants===MAX_ESSAIS) el.textContent=`${MAX_ESSAIS} tentatives disponibles`;
  else if(essaisRestants>0) el.textContent=`${essaisRestants} tentative${essaisRestants>1?'s':''} restante${essaisRestants>1?'s':''}`;
  else el.textContent='Aucune tentative — attends la prochaine interruption';
}

function demarrerBombe(){
  bombeRestantes=60;
  const bombeEl=document.getElementById('popup-bombe');
  bombeEl.textContent=bombeRestantes;
  clearInterval(timerBombe);
  timerBombe=setInterval(()=>{
    if(codeValide){clearInterval(timerBombe);return;}
    bombeRestantes--;
    bombeEl.textContent=bombeRestantes;
    if(bombeRestantes<=0){
      clearInterval(timerBombe);
      document.getElementById('popup-overlay').classList.remove('visible');
      demarrerCycle();
    }
  },1000);
}

/* ============================================================
   VÉRIFICATION MDP — SHA-256
============================================================ */
async function verifierCode(){
  if(essaisRestants<=0)return;
  const inputEl=document.getElementById('popup-input');
  const input=inputEl.value.trim();
  if(!input)return;
  const encoder=new TextEncoder();
  const data=encoder.encode(input);
  const hashBuffer=await crypto.subtle.digest('SHA-256',data);
  const hashHex=Array.from(new Uint8Array(hashBuffer)).map(b=>b.toString(16).padStart(2,'0')).join('');
  if(hashHex===HASH_VALIDE){
    codeValide=true;
    clearInterval(timerCycle);
    clearInterval(timerPrincipal);
    clearInterval(timerBombe);
    document.getElementById('popup-overlay').classList.remove('visible');
    // Débloquer le bouton Univers
    debloquerUnivers();
    // Barrer le compteur et afficher le cosmos
    barrerCompteur();
    // Écran intermédiaire
    entrerDansLUnivers();
  } else {
    essaisRestants--;
    mettreAJourEssais();
    const errEl=document.getElementById('popup-erreur');
    errEl.style.display='block';
    inputEl.value='';
    inputEl.focus();
    if(essaisRestants<=0){
      document.getElementById('popup-valider').disabled=true;
      inputEl.disabled=true;
    }
  }
}

/* ============================================================
   DÉBLOCAGE UNIVERS
============================================================ */
function debloquerUnivers(){
  const btn=document.getElementById('btn-univers');
  btn.classList.remove('verrouille');
  btn.classList.add('debloque');
  btn.setAttribute('onclick','afficherSection(\'univers\')');
  const btn7=document.getElementById('btn-module7');
  btn7.classList.remove('verrouille');
  btn7.classList.add('debloque');
  btn7.setAttribute('onclick','afficherSection(\'module7\');m7RenderCalendrier()');
  const btn8=document.getElementById('btn-module8');
  btn8.classList.remove('verrouille');
  btn8.classList.add('debloque');
  btn8.setAttribute('onclick','afficherSection(\'module8\');m8MettreAJourStatut()');
  // Popup fixation ELPIS 360 — après déblocage
  setTimeout(afficherFixation,3000);
}

/* ============================================================
   BARRER LE COMPTEUR + AFFICHER COSMOS
============================================================ */
function barrerCompteur(){
  const el=document.getElementById('compteur-display');
  el.classList.remove('urgent');
  el.classList.add('barre');
  // Afficher la zone cosmos
  document.getElementById('cosmos-zone').style.display='block';
  demarrerCosmosVie();
}

/* ============================================================
   COSMOS 360 ANS — CALCUL PRÉCIS
   On calcule le delta entre maintenant et la date de fin
============================================================ */
function demarrerCosmosVie(){
  const el=document.getElementById('cosmos-display');
  function maj(){
    const now=new Date();
    let diff=Math.floor((COSMOS_FIN - now)/1000);
    if(diff<=0){
      clearInterval(timerCosmos);
      el.textContent='ELPIS — FIN DES TEMPS';
      return;
    }
    const ans=Math.floor(diff/(365.25*24*3600));
    const reste1=diff%(365.25*24*3600);
    const mois=Math.floor(reste1/(30.4375*24*3600));
    const reste2=reste1%(30.4375*24*3600);
    const jours=Math.floor(reste2/(24*3600));
    const reste3=reste2%(24*3600);
    const heures=Math.floor(reste3/3600);
    const mins=Math.floor((reste3%3600)/60);
    const secs=Math.floor(reste3%60);
    el.textContent=`${ans} ans — ${mois} mois — ${jours} j — ${String(heures).padStart(2,'0')}:${String(mins).padStart(2,'0')}:${String(secs).padStart(2,'0')}`;
  }
  maj();
  timerCosmos=setInterval(maj,1000);
}

/* ============================================================
   ENTRÉE DANS L'UNIVERS
============================================================ */
function entrerDansLUnivers(){
  flashSubliminal(()=>{
    setTimeout(()=>{
      document.getElementById('ecran-final').classList.add('visible');
    },150);
  });
}

function accederApplication(){
  document.getElementById('ecran-final').classList.remove('visible');
  // Aller directement sur l'Univers
  afficherSection('univers');
}

/* ============================================================
   SESSION TIMER
============================================================ */
function demarrerSessionTimer(){
  setInterval(()=>{
    const d=Math.floor((Date.now()-sessionStart)/1000);
    const h=String(Math.floor(d/3600)).padStart(2,'0');
    const m=String(Math.floor((d%3600)/60)).padStart(2,'0');
    const s=String(d%60).padStart(2,'0');
    document.getElementById('session-duree').textContent=`Session : ${h}:${m}:${s}`;
  },1000);
}

/* ============================================================
   SCANNER DE SESSION
============================================================ */
function mettreAJourScanner(){
  const ua=navigator.userAgent;
  let os='Inconnu';
  if(ua.includes('Windows'))os='Windows';
  else if(ua.includes('Mac'))os='macOS';
  else if(ua.includes('Linux'))os='Linux';
  else if(ua.includes('Android'))os='Android';
  else if(ua.includes('iPhone')||ua.includes('iPad'))os='iOS';
  let nav='Inconnu';
  if(ua.includes('Chrome')&&!ua.includes('Edg'))nav='Google Chrome';
  else if(ua.includes('Firefox'))nav='Mozilla Firefox';
  else if(ua.includes('Safari')&&!ua.includes('Chrome'))nav='Safari';
  else if(ua.includes('Edg'))nav='Microsoft Edge';
  else if(ua.includes('Opera'))nav='Opera';
  document.getElementById('sc-os').textContent=os;
  document.getElementById('sc-nav').textContent=nav;
  document.getElementById('sc-res').textContent=`${screen.width} × ${screen.height} px`;
  document.getElementById('sc-tz').textContent=Intl.DateTimeFormat().resolvedOptions().timeZone;
  document.getElementById('sc-langue').textContent=navigator.language||'—';
  document.getElementById('sc-couleur').textContent=`${screen.colorDepth} bits`;
  document.getElementById('sc-mem').textContent=navigator.deviceMemory?`${navigator.deviceMemory} Go`:'Non disponible';
  document.getElementById('sc-cpu').textContent=navigator.hardwareConcurrency?`${navigator.hardwareConcurrency} cœurs`:'Non disponible';
  document.getElementById('sc-net').textContent=navigator.onLine?'En ligne':'Hors ligne';
  document.getElementById('sc-platform').textContent=navigator.platform||'—';
  setInterval(()=>{
    const now=new Date();
    document.getElementById('sc-heure').textContent=now.toLocaleTimeString();
    const d=Math.floor((Date.now()-sessionStart)/1000);
    const h=String(Math.floor(d/3600)).padStart(2,'0');
    const m=String(Math.floor((d%3600)/60)).padStart(2,'0');
    const s=String(d%60).padStart(2,'0');
    document.getElementById('sc-session').textContent=`${h}:${m}:${s}`;
  },1000);
}

/* ============================================================
   ORACLE TEMPUS
============================================================ */
let derniereCarteTiree=-1;
function tirerCarte(){
  let idx;
  do{idx=Math.floor(Math.random()*ORACLE.length);}while(idx===derniereCarteTiree&&ORACLE.length>1);
  derniereCarteTiree=idx;
  const carte=ORACLE[idx];
  document.getElementById('oracle-titre-conte').textContent=carte.titre;
  document.getElementById('oracle-symbole').textContent=carte.symbole;
  document.getElementById('oracle-recit').innerHTML=
    carte.recit +
    '<br><br><span style="font-size:.95rem;opacity:.6;font-style:italic;display:block;border-top:1px solid rgba(201,168,76,.15);padding-top:.8rem;margin-top:.4rem">' +
    carte.recit_en + '</span>';
  document.getElementById('oracle-lecon-texte').innerHTML=
    carte.lecon +
    '<span style="display:block;font-size:.85rem;opacity:.6;margin-top:.3rem;font-style:italic">' +
    carte.lecon_en + '</span>';
  const c=document.getElementById('oracle-carte');
  c.style.display='none';
  setTimeout(()=>{c.style.display='block';},50);
}

/* ============================================================
   GÉNÉRATEUR DE SIGNATURE
============================================================ */
function genererSignature(){
  const nom=document.getElementById('sig-input').value.trim();
  if(!nom)return;
  let hash=0;
  for(let i=0;i<nom.length;i++)hash=(hash*31+nom.charCodeAt(i))%144;
  if(hash===0)hash=144;
  const numero=String(hash).padStart(3,'0');
  document.getElementById('sig-nom-affiche').textContent=nom.toUpperCase();
  document.getElementById('sig-codex').textContent=`CODEX ${numero} — INTERTEMPORA`;
  document.getElementById('sig-resultat').style.display='block';
}

/* ============================================================
   BOUTONS POPUP FINALE
============================================================ */
function recommencer(){location.reload();}
function demanderCode(){
  // Lien vers le serveur — à mettre à jour quand l'URL O2switch est prête
  const url='https://codex144.com/demande-code';
  window.open(url,'_blank');
}
function contactPA0LINUS(){
  document.getElementById('popup-fr').textContent="Contacte PA0LINUS directement. Il t'attend.";
  document.getElementById('popup-lat').textContent='PA0LINUS ipse tibi respondebit.';
  document.getElementById('popup-finale-btns').classList.remove('visible');
}
function afficherAstuce(){
  document.getElementById('popup-fr').textContent='Le hash SHA-256 est dans le script. Bonne chance.';
  document.getElementById('popup-lat').textContent='Hash SHA-256 in scripto est. Bonam fortunam.';
  document.getElementById('popup-finale-btns').classList.remove('visible');
}

/* ============================================================
   ENTER SUR CHAMPS
============================================================ */
document.getElementById('popup-input').addEventListener('keydown',e=>{if(e.key==='Enter')verifierCode();});
document.getElementById('sig-input').addEventListener('keydown',e=>{if(e.key==='Enter')genererSignature();});

/* ============================================================
   MODULE VII — JAVASCRIPT
   Toutes les fonctions préfixées m7 pour éviter collision
============================================================ */
const M7_CLE_EVT  = 'elpis7_evenements';
const M7_CLE_NOTE = 'elpis7_note';
let m7MoisActuel  = new Date().getMonth();
let m7AnneeActuelle = new Date().getFullYear();
let m7DossierRacine = null;
let m7NoteActive = 1;

/* MIROIR VII — utilise sessionStart d'ELPIS */
function m7MettreAJourMiroir(){
  const now=new Date();
  const ua=navigator.userAgent;
  let os='Inconnu';
  if(ua.includes('Windows'))os='Windows';
  else if(ua.includes('Android'))os='Android';
  else if(ua.includes('iPhone')||ua.includes('iPad'))os='iOS';
  else if(ua.includes('Mac'))os='macOS';
  else if(ua.includes('Linux'))os='Linux';
  const d=Math.floor((Date.now()-sessionStart)/1000);
  const sess=`${String(Math.floor(d/3600)).padStart(2,'0')}:${String(Math.floor((d%3600)/60)).padStart(2,'0')}:${String(d%60).padStart(2,'0')}`;
  const mh=document.getElementById('m7-mir-h');if(mh)mh.textContent=now.toLocaleTimeString('fr-FR');
  const mo=document.getElementById('m7-mir-os');if(mo)mo.textContent=os;
  const mt=document.getElementById('m7-mir-tz');if(mt)mt.textContent=Intl.DateTimeFormat().resolvedOptions().timeZone;
  const ms=document.getElementById('m7-mir-s');if(ms)ms.textContent=sess;
  const mn=document.getElementById('m7-mir-nb');if(mn)mn.textContent=m7ChargerEvts().length;
  const mb=document.getElementById('m7-mir-bib');if(mb)mb.textContent=m7DossierRacine?'Liée ✓':'Non liée';
}
setInterval(m7MettreAJourMiroir,1000);

/* ÉVÉNEMENTS */
function m7ChargerEvts(){return JSON.parse(localStorage.getItem(M7_CLE_EVT)||'[]');}
function m7SauvegarderEvts(e){localStorage.setItem(M7_CLE_EVT,JSON.stringify(e));}

function m7CreerEvt(){
  const titre=document.getElementById('m7-f-titre').value.trim();
  const date=document.getElementById('m7-f-date').value;
  if(!titre){m7AfficherToast('Titre requis');return;}
  if(!date){m7AfficherToast('Date requise');return;}
  const evt={id:Date.now().toString(36),titre,date,
    heure:document.getElementById('m7-f-heure').value||'09:00',
    desc:document.getElementById('m7-f-desc').value.trim(),
    type:document.getElementById('m7-f-type').value,
    cree:new Date().toISOString()};
  const evts=m7ChargerEvts();evts.push(evt);m7SauvegarderEvts(evts);
  document.getElementById('m7-f-titre').value='';
  document.getElementById('m7-f-desc').value='';
  m7AfficherToast('Événement créé');
  m7AllerVue('agenda');m7RenderCalendrier();
}

/* CALENDRIER */
const M7_JOURS=['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'];
const M7_MOIS=['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];

function m7RenderCalendrier(){
  const cm=document.getElementById('m7-cal-mois');
  if(!cm)return;
  cm.textContent=`${M7_MOIS[m7MoisActuel]} ${m7AnneeActuelle}`;
  const grid=document.getElementById('m7-cal-grid');
  grid.innerHTML='';
  M7_JOURS.forEach(j=>{const e=document.createElement('div');e.className='cal-jour-label';e.textContent=j;grid.appendChild(e);});
  const premier=new Date(m7AnneeActuelle,m7MoisActuel,1);
  const dernier=new Date(m7AnneeActuelle,m7MoisActuel+1,0);
  const debut=(premier.getDay()+6)%7;
  const evts=m7ChargerEvts();
  const today=new Date();
  for(let i=0;i<debut;i++){const d=new Date(m7AnneeActuelle,m7MoisActuel,-debut+i+1);grid.appendChild(m7CreerCase(d,evts,true));}
  for(let j=1;j<=dernier.getDate();j++){
    const d=new Date(m7AnneeActuelle,m7MoisActuel,j);
    const el=m7CreerCase(d,evts,false);
    if(d.toDateString()===today.toDateString())el.classList.add('aujourd-hui');
    grid.appendChild(el);
  }
}

function m7CreerCase(date,evts,autreMois){
  const el=document.createElement('div');
  el.className='cal-jour'+(autreMois?' autre-mois':'');
  const ds=date.toISOString().split('T')[0];
  const ejour=evts.filter(e=>e.date===ds);
  const num=document.createElement('div');num.className='cal-num';num.textContent=date.getDate();el.appendChild(num);
  if(ejour.length){el.classList.add('a-evts');ejour.slice(0,3).forEach(()=>{const pt=document.createElement('span');pt.className='cal-evt-pt';el.appendChild(pt);});}
  el.onclick=()=>m7SelectionnerJour(ds,ejour);
  return el;
}

function m7SelectionnerJour(ds,ejour){
  const d=new Date(ds+'T12:00:00');
  document.getElementById('m7-jour-titre').textContent=
    d.toLocaleDateString('fr-FR',{weekday:'long',day:'numeric',month:'long',year:'numeric'}).toUpperCase();
  const zone=document.getElementById('m7-jour-evts');
  if(!ejour.length){
    zone.innerHTML=`<p style="font-style:italic;opacity:.45;font-size:.95rem;margin-top:.5rem">Aucun événement. <button class="btn-or" style="font-size:.75rem;padding:.35rem .75rem;margin-left:.5rem" onclick="m7PreparerNouveau('${ds}')">+ Ajouter</button></p>`;
    return;
  }
  zone.innerHTML=ejour.map(e=>m7CardEvt(e)).join('');
}

function m7PreparerNouveau(ds){document.getElementById('m7-f-date').value=ds;m7AllerVue('creer');}
function m7ChangerMois(d){
  m7MoisActuel+=d;
  if(m7MoisActuel>11){m7MoisActuel=0;m7AnneeActuelle++;}
  if(m7MoisActuel<0){m7MoisActuel=11;m7AnneeActuelle--;}
  m7RenderCalendrier();
  document.getElementById('m7-jour-titre').textContent='Sélectionnez un jour';
  document.getElementById('m7-jour-evts').innerHTML='';
}

/* LISTE */
function m7AfficherListeTous(){
  const evts=m7ChargerEvts();
  const si=document.getElementById('m7-stockage-info');
  if(si)si.textContent=`${evts.length} événement${evts.length>1?'s':''} — stockage local ELPIS`;
  const zone=document.getElementById('m7-liste-tous');
  if(!evts.length){zone.innerHTML='<p style="font-style:italic;opacity:.45;text-align:center;padding:2rem">Aucun événement.</p>';return;}
  evts.sort((a,b)=>a.date.localeCompare(b.date));
  zone.innerHTML=evts.map(e=>m7CardEvt(e)).join('');
}

function m7CardEvt(evt){
  const diff=new Date(evt.date)-new Date();
  const j=Math.floor(diff/(1000*60*60*24));
  const cd=diff<0?'Passé':j===0?"Aujourd'hui":j===1?'Demain':j<30?`Dans ${j} jours`:j<365?`Dans ${Math.floor(j/30)} mois`:`Dans ${Math.floor(j/365)} ans`;
  const dfr=new Date(evt.date+'T12:00:00').toLocaleDateString('fr-FR',{day:'numeric',month:'long',year:'numeric'});
  return `<div class="evt-card"><div>
    <div class="et">${evt.titre}</div>
    <div class="ed">📅 ${dfr} ${evt.heure?'— '+evt.heure:''} — ${evt.type}</div>
    ${evt.desc?`<div class="en">${evt.desc.substring(0,100)}${evt.desc.length>100?'...':''}</div>`:''}
    <div class="ec">${cd}</div>
  </div><div class="evt-actions">
    <button class="btn-xs" onclick="m7ExporterUnICS('${evt.id}')">Export .ics</button>
    <button class="btn-xs r" onclick="m7SupprimerEvt('${evt.id}')">Supprimer</button>
  </div></div>`;
}

function m7SupprimerEvt(id){
  m7SauvegarderEvts(m7ChargerEvts().filter(e=>e.id!==id));
  m7AfficherToast('Supprimé');m7AfficherListeTous();m7RenderCalendrier();
}

/* EXPORT */
function m7FmtICS(d){return d.toISOString().replace(/[-:]/g,'').split('.')[0]+'Z';}
function m7Telecharger(contenu,nom,type){
  const blob=new Blob([contenu],{type}),url=URL.createObjectURL(blob),a=document.createElement('a');
  a.href=url;a.download=nom;document.body.appendChild(a);a.click();document.body.removeChild(a);URL.revokeObjectURL(url);
}
function m7GenICS(evts){
  let l=['BEGIN:VCALENDAR','VERSION:2.0','PRODID:-//ELPIS 360//Module VII//FR','CALSCALE:GREGORIAN','METHOD:PUBLISH'];
  evts.forEach(evt=>{
    const dt=evt.date.replace(/-/g,''),hr=(evt.heure||'09:00').replace(':','')+'00';
    l=l.concat(['BEGIN:VEVENT',`UID:elpis-${evt.id}@codex144`,`DTSTAMP:${m7FmtICS(new Date())}`,`DTSTART:${dt}T${hr}`,`DTEND:${dt}T${hr}`,`SUMMARY:${evt.titre}`,`DESCRIPTION:${(evt.desc||'').replace(/\n/g,'\\n')}`,`CATEGORIES:${evt.type.toUpperCase()}`,'END:VEVENT']);
  });
  l.push('END:VCALENDAR');return l.join('\r\n');
}
function m7ExporterUnICS(id){const evt=m7ChargerEvts().find(e=>e.id===id);if(!evt)return;m7Telecharger(m7GenICS([evt]),`ELPIS_${evt.titre.replace(/\s+/g,'_')}.ics`,'text/calendar;charset=utf-8');m7AfficherToast('Export .ics');}
function m7ExporterTousICS(){const evts=m7ChargerEvts();if(!evts.length){m7AfficherToast('Aucun événement');return;}m7Telecharger(m7GenICS(evts),`ELPIS_Agenda_${new Date().toISOString().split('T')[0]}.ics`,'text/calendar;charset=utf-8');m7AfficherToast(`${evts.length} événement(s) exportés`);}
function m7ExporterJSON(){const evts=m7ChargerEvts();if(!evts.length){m7AfficherToast('Aucun événement');return;}m7Telecharger(JSON.stringify({source:'ELPIS Module VII',version:'v5',date:new Date().toISOString(),evenements:evts},null,2),`ELPIS_Backup_${new Date().toISOString().split('T')[0]}.json`,'application/json');m7AfficherToast('Backup JSON téléchargé');}
function m7ExporterCSV(){
  const evts=m7ChargerEvts();if(!evts.length){m7AfficherToast('Aucun événement');return;}
  const entete='titre,date,heure,type,description';
  const lignes=evts.map(e=>`"${e.titre}","${e.date}","${e.heure||''}","${e.type}","${(e.desc||'').replace(/"/g,'""')}"`);
  m7Telecharger([entete,...lignes].join('\n'),`ELPIS_${new Date().toISOString().split('T')[0]}.csv`,'text/csv;charset=utf-8');
  m7AfficherToast('CSV téléchargé');
}

/* IMPORT ICS */
function m7ImporterICS(input){
  const file=input.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=e=>{
    const contenu=e.target.result,existants=m7ChargerEvts(),nouveaux=[];
    contenu.split('BEGIN:VEVENT').slice(1).forEach(bloc=>{
      const lire=c=>{const m=bloc.match(new RegExp(c+':(.+)'));return m?m[1].trim().replace(/\\n/g,'\n'):''};
      const dtstart=lire('DTSTART');if(!dtstart)return;
      const dateStr=dtstart.length>=8?`${dtstart.substring(0,4)}-${dtstart.substring(4,6)}-${dtstart.substring(6,8)}`:'';
      const titre=lire('SUMMARY');if(!titre||!dateStr)return;
      if(existants.some(e=>e.titre===titre&&e.date===dateStr))return;
      nouveaux.push({id:Date.now().toString(36)+Math.random().toString(36).slice(2,5),titre,date:dateStr,heure:dtstart.includes('T')?`${dtstart.substring(9,11)}:${dtstart.substring(11,13)}`:'09:00',desc:lire('DESCRIPTION'),type:'importé',cree:new Date().toISOString()});
    });
    if(!nouveaux.length){document.getElementById('m7-res-ics').textContent='Aucun nouvel événement.';return;}
    m7SauvegarderEvts([...existants,...nouveaux]);
    document.getElementById('m7-res-ics').textContent=`${nouveaux.length} événement(s) importé(s)`;
    m7AfficherToast(`${nouveaux.length} importé(s)`);m7RenderCalendrier();
  };
  reader.readAsText(file);
}

/* IMPORT JSON */
function m7ImporterJSON(input){
  const file=input.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=e=>{
    try{
      const data=JSON.parse(e.target.result);
      if(data.evenements&&Array.isArray(data.evenements)&&data.evenements.length){
        const existants=m7ChargerEvts();
        const nouveaux=data.evenements.filter(ei=>!existants.some(ex=>ex.titre===ei.titre&&ex.date===ei.date));
        m7SauvegarderEvts([...existants,...nouveaux]);
        document.getElementById('m7-res-json').textContent=`${nouveaux.length} événement(s) importé(s)`;
        m7AfficherToast(`JSON : ${nouveaux.length} importé(s)`);m7RenderCalendrier();return;
      }
      m7OuvrirFenetreContenu(file.name,JSON.stringify(data,null,2));
      document.getElementById('m7-res-json').textContent='Fichier ouvert en lecture';
    }catch(err){m7OuvrirFenetreContenu(file.name,e.target.result);document.getElementById('m7-res-json').textContent='Fichier ouvert en lecture';}
  };
  reader.readAsText(file);
}

/* IMPORT CSV */
function m7ImporterCSV(input){
  const file=input.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=e=>{
    const lignes=e.target.result.split('\n').filter(l=>l.trim());
    lignes.shift();
    const existants=m7ChargerEvts(),nouveaux=[];
    lignes.forEach(ligne=>{
      const cols=ligne.match(/(".*?"|[^,]+)/g)||[];
      const nettoyer=s=>(s||'').replace(/^"|"$/g,'').replace(/""/g,'"').trim();
      const titre=nettoyer(cols[0]),date=nettoyer(cols[1]);
      if(!titre||!date)return;
      if(existants.some(e=>e.titre===titre&&e.date===date))return;
      nouveaux.push({id:Date.now().toString(36)+Math.random().toString(36).slice(2,5),titre,date,heure:nettoyer(cols[2])||'09:00',type:nettoyer(cols[3])||'autre',desc:nettoyer(cols[4])||'',cree:new Date().toISOString()});
    });
    if(!nouveaux.length){document.getElementById('m7-res-csv').textContent='Aucun nouvel événement.';return;}
    m7SauvegarderEvts([...existants,...nouveaux]);
    document.getElementById('m7-res-csv').textContent=`${nouveaux.length} événement(s) importé(s)`;
    m7AfficherToast(`CSV : ${nouveaux.length} importé(s)`);m7RenderCalendrier();
  };
  reader.readAsText(file,'UTF-8');
}

/* FICHIER LIBRE */
function m7ImporterFichierLibre(input){
  const file=input.files[0];if(!file)return;
  const ext=(file.name.split('.').pop()||'').toLowerCase();
  const binaires=['pdf','doc','docx','xls','xlsx','ppt','pptx','odt','ods'];
  if(binaires.includes(ext)){
    m7AfficherToast('Fichier binaire — ouverture native');
    const url=URL.createObjectURL(file);
    const a=document.createElement('a');a.href=url;a.target='_blank';a.click();
    setTimeout(()=>URL.revokeObjectURL(url),1000);return;
  }
  const reader=new FileReader();
  reader.onload=e=>{m7OuvrirFenetreContenu(file.name,e.target.result);};
  reader.readAsText(file,'UTF-8');
}

/* FENÊTRE DE LECTURE */
function m7OuvrirFenetreContenu(nom,contenu){
  const existing=document.getElementById('m7-fenetre-lecture');
  if(existing)existing.remove();
  const div=document.createElement('div');
  div.id='m7-fenetre-lecture';
  div.style.cssText='position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(10,8,6,.96);z-index:3000;display:flex;align-items:center;justify-content:center;padding:1.5rem';
  div.innerHTML=`<div style="background:var(--dark);border:1px solid var(--gold);max-width:700px;width:100%;max-height:85vh;display:flex;flex-direction:column;position:relative">
    <div style="padding:1rem 1.5rem;border-bottom:1px solid rgba(201,168,76,.15);display:flex;justify-content:space-between;align-items:center">
      <div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.35em;color:var(--gold);text-transform:uppercase">${nom}</div>
      <button onclick="document.getElementById('m7-fenetre-lecture').remove()" style="font-family:'Cinzel',serif;font-size:.75rem;letter-spacing:.3em;text-transform:uppercase;background:none;border:1px solid rgba(155,35,53,.4);color:var(--rouge);padding:.35rem .7rem;cursor:pointer">Fermer</button>
    </div>
    <textarea id="m7-contenu-lecture" style="flex:1;background:rgba(242,232,213,.03);border:none;color:var(--parchment);font-family:'EB Garamond',serif;font-size:.95rem;padding:1rem;outline:none;resize:none;overflow-y:auto;line-height:1.7;min-height:300px" readonly>${contenu.replace(/</g,'&lt;').replace(/>/g,'&gt;')}</textarea>
    <div style="padding:.75rem 1.5rem;border-top:1px solid rgba(201,168,76,.1);display:flex;gap:.5rem;flex-wrap:wrap">
      <button onclick="m7CopierContenuLecture()" style="font-family:'Cinzel',serif;font-size:.75rem;letter-spacing:.3em;text-transform:uppercase;background:none;border:1px solid var(--gold);color:var(--gold);padding:.5rem 1rem;cursor:pointer">Copier tout</button>
      <button onclick="m7CollerDansNotes()" style="font-family:'Cinzel',serif;font-size:.75rem;letter-spacing:.3em;text-transform:uppercase;background:none;border:1px solid rgba(201,168,76,.4);color:var(--gold-dim);padding:.5rem 1rem;cursor:pointer">Envoyer vers Notes</button>
    </div>
  </div>`;
  document.body.appendChild(div);
}

function m7CopierContenuLecture(){
  const t=document.getElementById('m7-contenu-lecture');if(!t)return;
  navigator.clipboard.writeText(t.value).then(()=>m7AfficherToast('Contenu copié')).catch(()=>{t.select();document.execCommand('copy');m7AfficherToast('Contenu copié');});
}

function m7CollerDansNotes(){
  const t=document.getElementById('m7-contenu-lecture');if(!t)return;
  const noteActuelle=localStorage.getItem('elpis7_note_'+m7NoteActive)||'';
  const sep=noteActuelle?'\n\n---\n\n':'';
  localStorage.setItem('elpis7_note_'+m7NoteActive,noteActuelle+sep+t.value);
  m7AfficherToast('Envoyé vers Notes');
  document.getElementById('m7-fenetre-lecture').remove();
}

/* BIBLIOTHÈQUE */
const M7_SOUS_DOSSIERS=['ICS','JSON','CSV','TXT'];

async function m7OuvrirBibliotheque(){
  if(!('showDirectoryPicker' in window)){
    document.getElementById('m7-biblio-statut').textContent='File System Access non disponible. Utilisez Chrome ou Edge.';return;
  }
  try{
    const racine=await window.showDirectoryPicker({mode:'readwrite'});
    const biblio=await racine.getDirectoryHandle('ELPIS_Bibliothèque',{create:true});
    for(const sd of M7_SOUS_DOSSIERS){await biblio.getDirectoryHandle(sd,{create:true});}
    m7DossierRacine=biblio;
    document.getElementById('m7-btn-rafraichir').style.display='inline-block';
    document.getElementById('m7-btn-sauv-biblio').style.display='inline-block';
    document.getElementById('m7-biblio-statut').textContent='✓ Bibliothèque ELPIS liée';
    m7AfficherToast('Bibliothèque liée');
    await m7RafraichirBibliotheque();
  }catch(e){if(e.name!=='AbortError')m7AfficherToast('Erreur d\'accès au dossier');}
}

async function m7RafraichirBibliotheque(){
  if(!m7DossierRacine){m7AfficherToast('Bibliothèque non liée');return;}
  const zone=document.getElementById('m7-biblio-contenu');zone.innerHTML='';
  for(const sd of M7_SOUS_DOSSIERS){
    try{
      const dossier=await m7DossierRacine.getDirectoryHandle(sd,{create:true});
      const entries=[];
      for await(const entry of dossier.values()){if(entry.kind==='file')entries.push(entry);}
      const div=document.createElement('div');div.className='biblio-dossier';
      const icones={'ICS':'📅','JSON':'🗂️','CSV':'📊','TXT':'📝'};
      const lignes=entries.length
        ?entries.map(entry=>`<div class="biblio-fichier-item"><span class="biblio-fichier-nom" style="cursor:pointer;color:var(--gold);text-decoration:underline dotted" onclick="m7LireFichierBiblio('${sd}','${entry.name}')">${entry.name}</span><span class="biblio-fichier-taille">Cliquer pour ouvrir</span></div>`).join('')
        :'<span class="biblio-vide">Dossier vide</span>';
      div.innerHTML=`<div class="biblio-dossier-titre"><span class="icone">${icones[sd]||'📁'}</span>${sd}</div><div class="biblio-fichiers">${lignes}</div>`;
      zone.appendChild(div);
    }catch(e){}
  }
}

async function m7LireFichierBiblio(nomDossier,nomFichier){
  if(!m7DossierRacine){m7AfficherToast('Bibliothèque non liée');return;}
  try{
    const dossier=await m7DossierRacine.getDirectoryHandle(nomDossier);
    const fileHandle=await dossier.getFileHandle(nomFichier);
    const file=await fileHandle.getFile();
    const contenu=await file.text();
    m7OuvrirFenetreContenu(nomFichier,contenu);
  }catch(e){m7AfficherToast('Impossible de lire ce fichier');}
}

async function m7SauvegarderVersBiblio(){
  if(!m7DossierRacine){m7AfficherToast('Bibliothèque non liée');return;}
  const evts=m7ChargerEvts();
  const date=new Date().toISOString().split('T')[0];
  try{
    const dJson=await m7DossierRacine.getDirectoryHandle('JSON',{create:true});
    const fJson=await dJson.getFileHandle(`ELPIS_Backup_${date}.json`,{create:true});
    const wJson=await fJson.createWritable();
    await wJson.write(JSON.stringify({source:'ELPIS Module VII',version:'v5',date:new Date().toISOString(),evenements:evts},null,2));
    await wJson.close();
    if(evts.length){
      const dIcs=await m7DossierRacine.getDirectoryHandle('ICS',{create:true});
      const fIcs=await dIcs.getFileHandle(`ELPIS_Agenda_${date}.ics`,{create:true});
      const wIcs=await fIcs.createWritable();
      await wIcs.write(m7GenICS(evts));await wIcs.close();
    }
    const note=localStorage.getItem(M7_CLE_NOTE)||'';
    if(note){
      const dTxt=await m7DossierRacine.getDirectoryHandle('TXT',{create:true});
      const fTxt=await dTxt.getFileHandle(`ELPIS_Note_${date}.txt`,{create:true});
      const wTxt=await fTxt.createWritable();
      await wTxt.write(note);await wTxt.close();
    }
    m7AfficherToast('Sauvegardé dans la bibliothèque');
    await m7RafraichirBibliotheque();
  }catch(e){m7AfficherToast('Erreur de sauvegarde');}
}

/* NOTES 12 */
function m7InitNotesSelector(){
  const sel=document.getElementById('m7-notes-selector');if(!sel)return;
  sel.innerHTML='';
  for(let i=1;i<=12;i++){
    const btn=document.createElement('button');
    btn.textContent=i;
    const hasNote=!!localStorage.getItem('elpis7_note_'+i);
    btn.style.cssText=`font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.2em;background:${i===m7NoteActive?'rgba(201,168,76,0.1)':'none'};border:1px solid rgba(201,168,76,${hasNote?'0.5':'0.15'});color:${(hasNote||i===m7NoteActive)?'var(--gold)':'var(--gold-dim)'};padding:.4rem;cursor:pointer;transition:all .3s`;
    btn.onclick=()=>m7SelectionnerNote(i);
    sel.appendChild(btn);
  }
}

function m7SelectionnerNote(n){
  m7SauvegarderNote(true);
  m7NoteActive=n;
  document.getElementById('m7-note-active-label').textContent=`Note ${n}`;
  document.getElementById('m7-zone-note').value=localStorage.getItem('elpis7_note_'+n)||'';
  m7InitNotesSelector();
}

function m7ChargerNote(){
  const zn=document.getElementById('m7-zone-note');
  if(zn)zn.value=localStorage.getItem('elpis7_note_'+m7NoteActive)||'';
  m7InitNotesSelector();
}

function m7SauvegarderNote(silencieux){
  const zn=document.getElementById('m7-zone-note');
  const val=zn?zn.value:'';
  localStorage.setItem('elpis7_note_'+m7NoteActive,val);
  if(m7NoteActive===1)localStorage.setItem(M7_CLE_NOTE,val);
  if(!silencieux){m7AfficherToast(`Note ${m7NoteActive} sauvegardée`);m7InitNotesSelector();}
}

function m7CopierNote(){
  const t=document.getElementById('m7-zone-note').value;
  if(!t){m7AfficherToast('Rien à copier');return;}
  navigator.clipboard.writeText(t).then(()=>m7AfficherToast('Copié')).catch(()=>{document.getElementById('m7-zone-note').select();document.execCommand('copy');m7AfficherToast('Copié');});
}

function m7ExporterNote(){
  const t=document.getElementById('m7-zone-note').value;
  if(!t){m7AfficherToast('Rien à exporter');return;}
  m7SauvegarderNote(true);
  m7Telecharger(t,`ELPIS_Note${m7NoteActive}_${new Date().toLocaleDateString('fr-FR').replace(/\//g,'-')}.txt`,'text/plain;charset=utf-8');
  m7AfficherToast(`Note ${m7NoteActive} exportée`);
}

function m7EffacerNote(){
  if(!confirm(`Effacer la Note ${m7NoteActive} ?`))return;
  localStorage.removeItem('elpis7_note_'+m7NoteActive);
  document.getElementById('m7-zone-note').value='';
  m7AfficherToast(`Note ${m7NoteActive} effacée`);
  m7InitNotesSelector();
}

/* NAV VII */
function m7AllerVue(id){
  document.querySelectorAll('.m7-vue').forEach(v=>v.classList.remove('active'));
  document.querySelectorAll('.m7-nav-btn').forEach(b=>b.classList.remove('actif'));
  const vue=document.getElementById('m7-vue-'+id);if(vue)vue.classList.add('active');
  const idx=['agenda','creer','liste','notes','import','biblio'].indexOf(id);
  const btns=document.querySelectorAll('.m7-nav-btn');if(btns[idx])btns[idx].classList.add('actif');
  if(id==='liste')m7AfficherListeTous();
  if(id==='notes'){m7ChargerNote();m7InitNotesSelector();}
  window.scrollTo({top:0,behavior:'smooth'});
}

/* POPUP INSTALLATION */
function afficherInstall(){
  const ua=navigator.userAgent;
  let inst='';
  if(ua.includes('Android')||ua.includes('iPhone')||ua.includes('iPad')){
    inst=`<div class="etape-install">Sur Android — Chrome<span>Appuyez sur ⋮ → "Ajouter à l'écran d'accueil"</span></div>
    <div class="etape-install">Sur iPhone / iPad — Safari<span>Bouton Partager ↑ → "Sur l'écran d'accueil"</span></div>`;
  }else{
    inst=`<div class="etape-install">Sur PC — Chrome / Edge<span>Ctrl+D pour ajouter aux favoris.</span></div>
    <div class="etape-install">Sur Mac — Safari<span>Menu Favoris → "Ajouter la page aux favoris"</span></div>`;
  }
  const ii=document.getElementById('install-instructions');
  if(ii)ii.innerHTML=inst;
  const pi=document.getElementById('popup-install');
  if(pi)pi.classList.add('visible');
}
function fermerInstall(){
  const pi=document.getElementById('popup-install');
  if(pi)pi.classList.remove('visible');
  localStorage.setItem('elpis7_install_vu','1');
}

/* TOAST VII */
function m7AfficherToast(msg){
  const t=document.getElementById('m7-toast');if(!t)return;
  t.textContent=msg;t.classList.add('visible');
  setTimeout(()=>t.classList.remove('visible'),2500);
}

/* TENTATIVE MODULE VII verrouillé */
function tentativeModule7(){
  if(codeValide){afficherSection('module7');m7RenderCalendrier();}
}

/* INIT MODULE VII */
function initModule7(){
  const fd=document.getElementById('m7-f-date');
  if(fd)fd.value=new Date().toISOString().split('T')[0];
  m7RenderCalendrier();
  const ua=navigator.userAgent;
  const estMobile=ua.includes('Android')||ua.includes('iPhone')||ua.includes('iPad')||!('showDirectoryPicker' in window);
  if(estMobile){
    const bm=document.getElementById('m7-biblio-mobile');if(bm)bm.style.display='block';
    const bp=document.getElementById('m7-biblio-pc');if(bp)bp.style.display='none';
    const aa=document.getElementById('m7-avert-android');if(aa)aa.style.display='block';
  }
  m7InitNotesSelector();
  // La popup installation ne s'affiche qu'après déblocage — appelée dans debloquerUnivers()
}

/* ============================================================
   POPUP FIXATION ELPIS 360 — CORRIGÉE
   S'affiche après déblocage, une seule fois
============================================================ */
function afficherFixation(){
  if(localStorage.getItem('elpis_fixation_vue'))return;
  const ua=navigator.userAgent;
  let inst='';
  const estyle='font-family:\'Cinzel\',serif;font-size:.8rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;border:1px solid rgba(155,35,53,.3);padding:.75rem;margin:.5rem 0;text-align:left';
  const sstyle='display:block;font-family:\'EB Garamond\',serif;font-size:1rem;color:var(--parchment);letter-spacing:0;text-transform:none;margin-top:.3rem;opacity:.8';
  if(ua.includes('Android')){
    inst=`<div style="${estyle}">Sur Android — Chrome<span style="${sstyle}">Appuyez sur ⋮ (3 points) → "Ajouter à l'écran d'accueil"</span></div>`;
  }else if(ua.includes('iPhone')||ua.includes('iPad')){
    inst=`<div style="${estyle}">Sur iPhone / iPad — Safari<span style="${sstyle}">Bouton Partager ↑ → "Sur l'écran d'accueil"</span></div>`;
  }else if(ua.includes('Mac')){
    inst=`<div style="${estyle}">Sur Mac — Safari / Chrome<span style="${sstyle}">Menu Favoris → "Ajouter la page aux favoris" ou Cmd+D</span></div>`;
  }else{
    inst=`<div style="${estyle}">Sur PC — Chrome / Edge<span style="${sstyle}">Ctrl+D pour fixer aux favoris, ou glissez l'onglet vers la barre de favoris.</span></div>`;
  }
  const fi=document.getElementById('fixation-instructions');
  if(fi)fi.innerHTML=inst;
  const pf=document.getElementById('popup-fixation');
  if(pf)pf.style.display='flex';
}
function fermerFixation(){
  const pf=document.getElementById('popup-fixation');
  if(pf)pf.style.display='none';
  localStorage.setItem('elpis_fixation_vue','1');
}

/* ============================================================
   MODULE VIII — ELPIS SYNC — JAVASCRIPT
============================================================ */
let m8TimerSync=null;
let m8SecondesSync=120;
let m8QRInstance=null;
let m8HashSession=null;

/* NAV VIII */
function m8AllerVue(id){
  document.querySelectorAll('.m8-vue').forEach(v=>v.classList.remove('active'));
  document.querySelectorAll('.m8-nav-btn').forEach(b=>b.classList.remove('actif'));
  const vue=document.getElementById('m8-vue-'+id);if(vue)vue.classList.add('active');
  const idx=['local','serveur','log'].indexOf(id);
  const btns=document.querySelectorAll('.m8-nav-btn');if(btns[idx])btns[idx].classList.add('actif');
  window.scrollTo({top:0,behavior:'smooth'});
}

/* TENTATIVE MODULE VIII */
function tentativeModule8(){
  if(codeValide){afficherSection('module8');m8MettreAJourStatut();}
}

/* STATUT */
function m8MettreAJourStatut(){
  const evts=JSON.parse(localStorage.getItem('elpis7_evenements')||'[]');
  let nbNotes=0;
  for(let i=1;i<=12;i++){if(localStorage.getItem('elpis7_note_'+i))nbNotes++;}
  const se=document.getElementById('m8-st-evts');if(se)se.textContent=evts.length+' événement'+(evts.length>1?'s':'');
  const sn=document.getElementById('m8-st-notes');if(sn)sn.textContent=nbNotes+' note'+(nbNotes>1?'s':'')+' actives';
  // Hash session
  if(!m8HashSession){
    const raw=Date.now()+navigator.userAgent+Math.random();
    crypto.subtle.digest('SHA-256',new TextEncoder().encode(raw)).then(buf=>{
      m8HashSession=Array.from(new Uint8Array(buf)).map(b=>b.toString(16).padStart(2,'0')).join('').substring(0,16);
      const sh=document.getElementById('m8-st-hash');if(sh)sh.textContent=m8HashSession+'...';
    });
  }
  m8MettreAJourPayload();
}

/* PAYLOAD INFO */
function m8MettreAJourPayload(){
  const evts=JSON.parse(localStorage.getItem('elpis7_evenements')||'[]');
  let nbNotes=0,tailleNotes=0;
  for(let i=1;i<=12;i++){
    const n=localStorage.getItem('elpis7_note_'+i)||'';
    if(n){nbNotes++;tailleNotes+=n.length;}
  }
  const tailleEvts=JSON.stringify(evts).length;
  const totalKo=Math.round((tailleEvts+tailleNotes)/1024*10)/10;
  const pi=document.getElementById('m8-payload-info');
  if(pi)pi.innerHTML=`Prêt à synchroniser : <strong style="color:var(--gold)">${evts.length} événement${evts.length>1?'s':''}</strong> · <strong style="color:var(--gold)">${nbNotes} note${nbNotes>1?'s':''}</strong> · <strong style="color:var(--gold)">~${totalKo} Ko</strong><br><span style="font-size:.9rem;opacity:.6">Ready to sync: ${evts.length} event${evts.length>1?'s':''} · ${nbNotes} note${nbNotes>1?'s':''} · ~${totalKo} KB</span>`;
}

/* GÉNÉRATION QR CODE */
async function m8GenererQR(){
  // Payload MINIMAL pour QR — identifiant de session uniquement
  // Les données réelles sont dans localStorage, accessibles sur le même réseau
  const ts=Date.now();
  const fenetre=120;
  // IP locale simulée (côté client on ne peut pas lire l'IP — on utilise un token)
  const token=Math.random().toString(36).substring(2,10).toUpperCase();
  const toHash=`elpis360-${ts}-${token}-${fenetre}`;
  const hashBuf=await crypto.subtle.digest('SHA-256',new TextEncoder().encode(toHash));
  const hash=Array.from(new Uint8Array(hashBuf)).map(b=>b.toString(16).padStart(2,'0')).join('').substring(0,24);
  // Payload court — URL-like, scannable facilement
  const payloadStr=`ELPIS360|v07|${ts}|${hash}|${token}|${fenetre}s`;
  // Vider le QR canvas
  const qrDiv=document.getElementById('m8-qr-canvas');
  qrDiv.innerHTML='';
  // Générer QR
  try{
    if(typeof QRCode!=='undefined'){
      // Lib qrcodejs disponible
      new QRCode(qrDiv,{
        text:payloadStr,
        width:200,
        height:200,
        colorDark:'#0A0806',
        colorLight:'#ffffff',
        correctLevel:QRCode.CorrectLevel.M
      });
    } else {
      // Fallback — QR code via API publique Google Charts
      const img=document.createElement('img');
      img.src=`https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(payloadStr)}&bgcolor=ffffff&color=0A0806`;
      img.alt='QR Code ELPIS Sync';
      img.width=200;img.height=200;
      img.onerror=()=>{
        qrDiv.innerHTML=`<div style="font-family:'Cinzel',serif;font-size:.75rem;letter-spacing:.25em;color:var(--rouge);text-transform:uppercase;padding:1.5rem;opacity:.8;max-width:200px">QR non disponible hors ligne.<br><br>Token de sync :<br><span style="color:var(--gold);font-size:.88rem;letter-spacing:.15em">${token}</span></div>`;
      };
      qrDiv.appendChild(img);
    }
    // Afficher le token sous le QR pour saisie manuelle si besoin
    const tokenDiv=document.createElement('div');
    tokenDiv.style.cssText="font-family:'Cinzel',serif;font-size:.85rem;letter-spacing:.3em;color:var(--gold-dim);text-transform:uppercase;margin-top:.5rem;opacity:.7";
    tokenDiv.textContent='Token : '+token;
    qrDiv.appendChild(tokenDiv);
    // Démarrer le timer
    m8SecondesSync=fenetre;
    const timerEl=document.getElementById('m8-timer-display');
    const timerLabel=document.getElementById('m8-timer-label');
    const qrInfo=document.getElementById('m8-qr-info');
    if(timerEl){timerEl.textContent=m8SecondesSync;timerEl.style.display='block';timerEl.classList.remove('urgent');}
    if(timerLabel)timerLabel.style.display='block';
    if(qrInfo)qrInfo.textContent='Scannez ce QR code avec votre téléphone sur le même réseau WiFi';
    document.getElementById('m8-btn-annuler').style.display='inline-block';
    clearInterval(m8TimerSync);
    m8TimerSync=setInterval(()=>{
      m8SecondesSync--;
      if(timerEl){
        timerEl.textContent=m8SecondesSync;
        if(m8SecondesSync<=15)timerEl.classList.add('urgent');
        else timerEl.classList.remove('urgent');
      }
      if(m8SecondesSync<=0){
        clearInterval(m8TimerSync);
        if(timerEl)timerEl.style.display='none';
        if(timerLabel)timerLabel.style.display='none';
        if(qrInfo)qrInfo.textContent='Fenêtre expirée — Générez un nouveau QR code';
        qrDiv.innerHTML=`<div style="font-family:'Cinzel',serif;font-size:.8rem;letter-spacing:.3em;color:var(--rouge);text-transform:uppercase;padding:2rem;opacity:.6">Fenêtre expirée</div>`;
        document.getElementById('m8-btn-annuler').style.display='none';
        m8LogAjouter('Fenêtre de sync expirée (120s)','err');
      }
    },1000);
    const sl=document.getElementById('m8-st-last');
    if(sl)sl.textContent='QR généré — '+new Date().toLocaleTimeString('fr-FR');
    m8LogAjouter('QR généré · Token : '+token+' · Hash : '+hash.substring(0,8)+'...','ok');
    m8AfficherToast('QR code prêt — 120 secondes');
  }catch(e){
    qrDiv.innerHTML=`<div style="font-family:'Cinzel',serif;font-size:.75rem;letter-spacing:.25em;color:var(--rouge);text-transform:uppercase;padding:1.5rem">Erreur : ${e.message}</div>`;
    m8AfficherToast('Erreur génération QR');
    m8LogAjouter('Erreur QR : '+e.message,'err');
  }
}

/* ANNULER SYNC */
function m8AnnulerSync(){
  clearInterval(m8TimerSync);
  document.getElementById('m8-qr-canvas').innerHTML='';
  const timerEl=document.getElementById('m8-timer-display');
  const timerLabel=document.getElementById('m8-timer-label');
  const qrInfo=document.getElementById('m8-qr-info');
  if(timerEl){timerEl.style.display='none';timerEl.classList.remove('urgent');}
  if(timerLabel)timerLabel.style.display='none';
  if(qrInfo)qrInfo.textContent='Synchronisation annulée';
  document.getElementById('m8-btn-annuler').style.display='none';
  m8LogAjouter('Synchronisation annulée par l\'utilisateur');
  m8AfficherToast('Annulé');
}

/* LOG */
function m8LogAjouter(msg,type){
  const log=document.getElementById('m8-log');if(!log)return;
  const now=new Date().toLocaleTimeString('fr-FR');
  const ligne=document.createElement('div');
  ligne.className='m8-log-ligne'+(type?' '+type:'');
  ligne.textContent=`[${now}] ${msg}`;
  // Retirer message vide
  const vide=log.querySelector('.m8-log-ligne:not(.ok):not(.err)');
  if(vide&&vide.textContent.includes('Journal vide'))vide.remove();
  log.appendChild(ligne);
  log.scrollTop=log.scrollHeight;
  // Sauvegarder dans localStorage
  const logs=JSON.parse(localStorage.getItem('elpis8_log')||'[]');
  logs.push({ts:Date.now(),msg,type:type||'info'});
  if(logs.length>100)logs.shift();
  localStorage.setItem('elpis8_log',JSON.stringify(logs));
}

function m8ViderLog(){
  const log=document.getElementById('m8-log');
  if(log)log.innerHTML='<div class="m8-log-ligne">— Journal vidé —</div>';
  localStorage.removeItem('elpis8_log');
  m8AfficherToast('Journal vidé');
}

function m8ChargerLog(){
  const logs=JSON.parse(localStorage.getItem('elpis8_log')||'[]');
  if(!logs.length)return;
  const log=document.getElementById('m8-log');if(!log)return;
  log.innerHTML='';
  logs.forEach(l=>{
    const ligne=document.createElement('div');
    ligne.className='m8-log-ligne'+(l.type&&l.type!=='info'?' '+l.type:'');
    const t=new Date(l.ts).toLocaleTimeString('fr-FR');
    ligne.textContent=`[${t}] ${l.msg}`;
    log.appendChild(ligne);
  });
}

/* TOAST VIII */
function m8AfficherToast(msg){
  const t=document.getElementById('m8-toast');if(!t)return;
  t.textContent=msg;t.classList.add('visible');
  setTimeout(()=>t.classList.remove('visible'),2500);
}

/* ============================================================
   LANCEMENT
============================================================ */
window.addEventListener('load',()=>{demarrerElpis();initModule7();m8ChargerLog();});
</script>
@endpush