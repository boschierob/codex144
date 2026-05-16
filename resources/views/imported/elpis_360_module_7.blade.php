<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0A0806">
<title>ELPIS — Module VII — Agenda</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400;600;700&family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
<style>
:root{--dark:#0A0806;--gold:#C9A84C;--gold-dim:#8a6d2f;--rouge:#9B2335;--parchment:#F2E8D5}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html,body{width:100%;min-height:100%;background:var(--dark);color:var(--parchment);font-family:'EB Garamond',serif;overflow-x:hidden}
body::before{content:'';position:fixed;top:0;left:0;width:100%;height:100%;z-index:0;pointer-events:none;opacity:.04;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");background-size:128px}
#app{position:relative;z-index:1;max-width:820px;margin:0 auto;padding:2rem 1.5rem 5rem}

.header{text-align:center;padding:2.5rem 0 2rem;border-bottom:1px solid rgba(201,168,76,.15);margin-bottom:2rem}
.header .sur{font-family:'Cinzel',serif;font-size:.62rem;letter-spacing:.5em;color:var(--gold-dim);text-transform:uppercase;margin-bottom:.75rem}
.header h1{font-family:'Cinzel Decorative',serif;font-size:clamp(1.8rem,5vw,3rem);color:var(--gold);letter-spacing:.15em;text-shadow:0 0 30px rgba(201,168,76,.3);margin-bottom:.4rem}
.header .sous{font-family:'Cinzel',serif;font-size:.62rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase}
.sep{width:180px;height:1px;background:linear-gradient(to right,transparent,var(--gold),transparent);margin:1rem auto}

/* POPUP INSTALLATION */
#popup-install{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(10,8,6,.95);z-index:2000;align-items:center;justify-content:center;padding:1.5rem}
#popup-install.visible{display:flex}
#install-box{background:var(--dark);border:1px solid var(--gold);max-width:540px;width:100%;padding:2.5rem 2rem;text-align:center;position:relative}
#install-box::before,#install-box::after{content:'';position:absolute;width:25px;height:25px;border-color:var(--rouge);border-style:solid}
#install-box::before{top:8px;left:8px;border-width:1px 0 0 1px}
#install-box::after{bottom:8px;right:8px;border-width:0 1px 1px 0}
#install-box h2{font-family:'Cinzel Decorative',serif;font-size:1.4rem;color:var(--gold);letter-spacing:.15em;margin-bottom:1.2rem}
#install-box p{font-family:'EB Garamond',serif;font-size:1.05rem;line-height:1.8;color:var(--parchment);opacity:.85;margin-bottom:.75rem}
.etape-install{font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;border:1px solid rgba(155,35,53,.3);padding:.75rem;margin:.5rem 0;text-align:left}
.etape-install span{display:block;font-family:'EB Garamond',serif;font-size:1rem;color:var(--parchment);letter-spacing:0;text-transform:none;margin-top:.3rem;opacity:.8}

/* MIROIR */
#miroir{display:grid;grid-template-columns:repeat(auto-fit,minmax(155px,1fr));gap:.5rem;margin-bottom:2rem;border:1px solid rgba(201,168,76,.08);padding:.75rem 1rem;background:rgba(201,168,76,.02)}
#miroir-label{font-family:'Cinzel',serif;font-size:.52rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;opacity:.45;grid-column:1/-1;margin-bottom:.25rem}
.mir-item .ml{font-family:'Cinzel',serif;font-size:.5rem;letter-spacing:.3em;color:var(--rouge);text-transform:uppercase;opacity:.6}
.mir-item .mv{font-family:'EB Garamond',serif;font-size:.9rem;color:var(--gold);opacity:.8}

/* NAV */
#nav{display:flex;justify-content:center;gap:.75rem;flex-wrap:wrap;margin-bottom:2rem}
.nav-btn{font-family:'Cinzel',serif;font-size:.58rem;letter-spacing:.28em;color:var(--gold-dim);text-transform:uppercase;background:none;border:1px solid rgba(201,168,76,.2);padding:.5rem 1rem;cursor:pointer;transition:all .3s}
.nav-btn:hover,.nav-btn.actif{color:var(--gold);border-color:var(--gold);background:rgba(201,168,76,.05)}

/* VUES */
.vue{display:none}
.vue.active{display:block;animation:fadeUp .5s ease forwards}

/* CALENDRIER */
#cal-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem}
#cal-mois{font-family:'Cinzel Decorative',serif;font-size:clamp(1rem,3vw,1.6rem);color:var(--gold);letter-spacing:.15em}
.cal-nav{font-family:'Cinzel',serif;font-size:.58rem;letter-spacing:.3em;background:none;border:1px solid rgba(201,168,76,.3);color:var(--gold-dim);padding:.45rem .9rem;cursor:pointer;transition:all .3s;text-transform:uppercase}
.cal-nav:hover{border-color:var(--gold);color:var(--gold)}
#cal-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:2px}
.cal-jour-label{font-family:'Cinzel',serif;font-size:.5rem;letter-spacing:.2em;color:var(--gold-dim);text-transform:uppercase;text-align:center;padding:.4rem 0;opacity:.6}
.cal-jour{min-height:55px;border:1px solid rgba(201,168,76,.08);padding:.3rem;cursor:pointer;transition:background .2s;position:relative}
.cal-jour:hover{background:rgba(201,168,76,.05)}
.cal-jour.aujourd-hui{border-color:rgba(155,35,53,.5)}
.cal-jour.autre-mois{opacity:.2}
.cal-jour.a-evts{background:rgba(201,168,76,.04)}
.cal-num{font-family:'Cinzel',serif;font-size:.62rem;color:var(--parchment);opacity:.6}
.cal-jour.aujourd-hui .cal-num{color:var(--rouge);opacity:1}
.cal-evt-pt{width:5px;height:5px;border-radius:50%;background:var(--gold);display:inline-block;margin:.1rem}
#jour-detail{margin-top:1.5rem;border-top:1px solid rgba(201,168,76,.1);padding-top:1.5rem}
#jour-titre{font-family:'Cinzel',serif;font-size:.63rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:1rem}

/* FORMULAIRE */
.form-section{margin-bottom:1.2rem}
.form-label{font-family:'Cinzel',serif;font-size:.57rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;display:block;margin-bottom:.4rem}
.form-input,.form-textarea,.form-select{width:100%;background:rgba(242,232,213,.04);border:1px solid rgba(201,168,76,.2);color:var(--parchment);font-family:'EB Garamond',serif;font-size:1rem;padding:.7rem .9rem;outline:none;transition:border-color .3s;-webkit-appearance:none;appearance:none}
.form-input:focus,.form-textarea:focus,.form-select:focus{border-color:var(--gold)}
.form-textarea{min-height:90px;resize:vertical;line-height:1.6}
.form-select option{background:var(--dark)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
@media(max-width:480px){.form-row{grid-template-columns:1fr}}

/* CARTES ÉVÉNEMENTS */
.evt-card{border:1px solid rgba(201,168,76,.12);padding:1rem;margin-bottom:.75rem;display:grid;grid-template-columns:1fr auto;gap:.75rem;align-items:start;background:rgba(201,168,76,.02)}
.evt-card .et{font-family:'Cinzel',serif;font-size:.68rem;letter-spacing:.2em;color:var(--gold);text-transform:uppercase;margin-bottom:.25rem}
.evt-card .ed{font-family:'EB Garamond',serif;font-size:.88rem;color:var(--rouge);font-style:italic}
.evt-card .en{font-family:'EB Garamond',serif;font-size:.93rem;color:var(--parchment);opacity:.7;margin-top:.25rem;line-height:1.5}
.evt-card .ec{font-family:'Cinzel',serif;font-size:.53rem;letter-spacing:.25em;color:var(--gold-dim);margin-top:.4rem;text-transform:uppercase}
.evt-actions{display:flex;flex-direction:column;gap:.3rem}
.btn-xs{font-family:'Cinzel',serif;font-size:.47rem;letter-spacing:.25em;text-transform:uppercase;background:none;border:1px solid rgba(201,168,76,.25);color:var(--gold-dim);padding:.35rem .6rem;cursor:pointer;transition:all .3s;white-space:nowrap}
.btn-xs:hover{border-color:var(--gold);color:var(--gold)}
.btn-xs.r{border-color:rgba(155,35,53,.25);color:rgba(155,35,53,.5)}
.btn-xs.r:hover{border-color:var(--rouge);color:var(--rouge)}

/* NOTES */
#zone-note{width:100%;min-height:240px;background:rgba(242,232,213,.04);border:1px solid rgba(201,168,76,.15);color:var(--parchment);font-family:'EB Garamond',serif;font-size:1.05rem;padding:1rem;outline:none;resize:vertical;line-height:1.85}
#zone-note:focus{border-color:var(--gold)}

/* IMPORT */
.zone-drop{border:2px dashed rgba(201,168,76,.2);padding:1.5rem;text-align:center;cursor:pointer;transition:border-color .3s;margin-bottom:1rem}
.zone-drop:hover{border-color:rgba(201,168,76,.5)}
.zone-drop p{font-family:'EB Garamond',serif;font-size:1rem;font-style:italic;color:var(--parchment);opacity:.6}
.input-file{display:none}

/* BIBLIOTHÈQUE */
#biblio-statut{font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.35em;color:var(--gold-dim);text-transform:uppercase;opacity:.6;margin-bottom:1rem;min-height:1.2rem}
.biblio-dossier{border:1px solid rgba(201,168,76,.15);padding:1rem;margin-bottom:.75rem;background:rgba(201,168,76,.02)}
.biblio-dossier-titre{font-family:'Cinzel',serif;font-size:.65rem;letter-spacing:.3em;color:var(--gold);text-transform:uppercase;margin-bottom:.5rem;display:flex;align-items:center;gap:.5rem}
.biblio-dossier-titre .icone{font-size:1rem}
.biblio-fichiers{font-family:'EB Garamond',serif;font-size:.92rem;color:var(--parchment);opacity:.7;line-height:1.8}
.biblio-vide{font-style:italic;opacity:.4;font-size:.9rem}
.biblio-fichier-item{display:flex;justify-content:space-between;align-items:center;padding:.2rem 0;border-bottom:1px solid rgba(201,168,76,.06)}
.biblio-fichier-nom{font-size:.92rem}
.biblio-fichier-taille{font-family:'Cinzel',serif;font-size:.48rem;letter-spacing:.2em;color:var(--gold-dim);opacity:.5;text-transform:uppercase}

/* BOUTONS */
.btn-or{font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.35em;text-transform:uppercase;background:none;border:1px solid var(--gold);color:var(--gold);padding:.7rem 1.3rem;cursor:pointer;transition:all .3s;display:inline-block;margin:.3rem}
.btn-or:hover{background:var(--gold);color:var(--dark)}
.btn-rouge{border-color:var(--rouge);color:var(--rouge)}
.btn-rouge:hover{background:var(--rouge);color:var(--parchment)}

/* RÉSULTAT IMPORT */
.import-res{font-family:'Cinzel',serif;font-size:.58rem;letter-spacing:.3em;color:var(--gold);text-transform:uppercase;margin-top:.75rem;min-height:1.2rem}

/* TOAST */
#toast{position:fixed;bottom:2rem;left:50%;transform:translateX(-50%);background:var(--dark);border:1px solid var(--gold);color:var(--gold);font-family:'Cinzel',serif;font-size:.56rem;letter-spacing:.3em;text-transform:uppercase;padding:.7rem 1.8rem;z-index:9999;opacity:0;transition:opacity .4s;pointer-events:none;white-space:nowrap}
#toast.visible{opacity:1}

#stockage-info{font-family:'Cinzel',serif;font-size:.52rem;letter-spacing:.28em;color:var(--gold-dim);text-transform:uppercase;opacity:.4;text-align:right;margin-bottom:.3rem}

@keyframes fadeUp{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
</style>
</head>
<body>

<!-- POPUP INSTALLATION -->
<div id="popup-install">
  <div id="install-box">
    <h2>Conserver ELPIS</h2>
    <div class="sep"></div>
    <p>Pour retrouver ELPIS Agenda facilement, ajoutez ce fichier à vos favoris ou à votre écran d'accueil.</p>
    <div id="install-instructions"></div>
    <br>
    <button class="btn-or" onclick="fermerInstall()">Compris — Continuer</button>
  </div>
</div>

<div id="app">
  <div class="header">
    <div class="sur">ELPIS 360 — PA0LINUS — MAGNUS INTERTEMPORA</div>
    <h1>Module VII</h1>
    <div class="sous">Agenda — Notes — Bibliothèque</div>
    <div class="sep"></div>
  </div>

  <!-- MIROIR -->
  <div id="miroir">
    <div id="miroir-label">● Miroir ELPIS — synchronisation temps réel</div>
    <div class="mir-item"><div class="ml">Heure</div><div class="mv" id="mir-h">—</div></div>
    <div class="mir-item"><div class="ml">Système</div><div class="mv" id="mir-os">—</div></div>
    <div class="mir-item"><div class="ml">Fuseau</div><div class="mv" id="mir-tz">—</div></div>
    <div class="mir-item"><div class="ml">Session</div><div class="mv" id="mir-s">—</div></div>
    <div class="mir-item"><div class="ml">Événements</div><div class="mv" id="mir-nb">0</div></div>
    <div class="mir-item"><div class="ml">Bibliothèque</div><div class="mv" id="mir-bib">Non liée</div></div>
  </div>

  <!-- NAV -->
  <nav id="nav">
    <button class="nav-btn actif" onclick="allerVue('agenda')">Agenda</button>
    <button class="nav-btn" onclick="allerVue('creer')">+ Événement</button>
    <button class="nav-btn" onclick="allerVue('liste')">Tous</button>
    <button class="nav-btn" onclick="allerVue('notes')">Notes</button>
    <button class="nav-btn" onclick="allerVue('import')">Import / Export</button>
    <button class="nav-btn" onclick="allerVue('biblio')">Bibliothèque</button>
  </nav>

  <!-- VUE AGENDA -->
  <div id="vue-agenda" class="vue active">
    <div id="cal-header">
      <button class="cal-nav" onclick="changerMois(-1)">◂ Préc.</button>
      <div id="cal-mois">—</div>
      <button class="cal-nav" onclick="changerMois(1)">Suiv. ▸</button>
    </div>
    <div id="cal-grid"></div>
    <div id="jour-detail">
      <div id="jour-titre">Sélectionnez un jour</div>
      <div id="jour-evts"></div>
    </div>
  </div>

  <!-- VUE CRÉER -->
  <div id="vue-creer" class="vue">
    <h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1rem,3vw,1.6rem);margin-bottom:1.5rem">Nouvel événement</h2>
    <div class="form-section">
      <label class="form-label">Titre *</label>
      <input type="text" class="form-input" id="f-titre" placeholder="Ex : Anniversaire de Marco">
    </div>
    <div class="form-section">
      <label class="form-label">Type</label>
      <select class="form-select" id="f-type">
        <option value="anniversaire">Anniversaire</option>
        <option value="rendez-vous">Rendez-vous</option>
        <option value="rappel">Rappel</option>
        <option value="liste">Liste de courses</option>
        <option value="note">Note importante</option>
        <option value="autre">Autre</option>
      </select>
    </div>
    <div class="form-section form-row">
      <div><label class="form-label">Date *</label><input type="date" class="form-input" id="f-date"></div>
      <div><label class="form-label">Heure</label><input type="time" class="form-input" id="f-heure" value="09:00"></div>
    </div>
    <div class="form-section">
      <label class="form-label">Description</label>
      <textarea class="form-textarea" id="f-desc" placeholder="Détails, liste, message..."></textarea>
    </div>
    <div style="margin-top:1.5rem">
      <button class="btn-or" onclick="creerEvt()">Créer l'événement</button>
      <button class="btn-or btn-rouge" onclick="allerVue('agenda')">Annuler</button>
    </div>
  </div>

  <!-- VUE LISTE -->
  <div id="vue-liste" class="vue">
    <h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1rem,3vw,1.6rem);margin-bottom:.5rem">Tous les événements</h2>
    <div id="stockage-info"></div>
    <div id="liste-tous"></div>
    <div style="margin-top:1.5rem"><button class="btn-or" onclick="allerVue('creer')">+ Nouvel événement</button></div>
  </div>

  <!-- VUE NOTES -->
  <div id="vue-notes" class="vue">
    <h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1rem,3vw,1.6rem);margin-bottom:.75rem">Notes — Répertoire</h2>
    <p style="font-style:italic;opacity:.55;margin-bottom:1.2rem;font-size:.95rem">12 notes indépendantes. Sélectionnez, rédigez, sauvegardez.</p>

    <!-- SÉLECTEUR 12 NOTES -->
    <div style="display:grid;grid-template-columns:repeat(6,1fr);gap:.4rem;margin-bottom:1.2rem" id="notes-selector"></div>

    <div style="font-family:'Cinzel',serif;font-size:.58rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;margin-bottom:.4rem" id="note-active-label">Note 1</div>
    <textarea id="zone-note" placeholder="Rédigez votre note ici..." style="width:100%;min-height:220px;background:rgba(242,232,213,.04);border:1px solid rgba(201,168,76,.2);color:var(--parchment);font-family:'EB Garamond',serif;font-size:1.05rem;padding:1rem;outline:none;resize:vertical;line-height:1.85"></textarea>
    <div style="margin-top:1rem;display:flex;gap:.4rem;flex-wrap:wrap">
      <button class="btn-or" onclick="sauvegarderNote()">Sauvegarder</button>
      <button class="btn-or" onclick="copierNote()">Copier</button>
      <button class="btn-or" onclick="exporterNote()">Exporter .txt</button>
      <button class="btn-or btn-rouge" onclick="effacerNote()">Effacer</button>
    </div>
  </div>

  <!-- VUE IMPORT/EXPORT -->
  <div id="vue-import" class="vue">
    <h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1rem,3vw,1.6rem);margin-bottom:1.5rem">Import / Export</h2>

    <h3 style="font-family:'Cinzel',serif;font-size:.63rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Importer un agenda (.ics)</h3>
    <div class="zone-drop" onclick="document.getElementById('fi-ics').click()">
      <p>Cliquez pour choisir un fichier .ics<br><small style="opacity:.5">Outlook, Google Calendar, Apple Calendar...</small></p>
    </div>
    <input type="file" id="fi-ics" class="input-file" accept=".ics" onchange="importerICS(this)">
    <div class="import-res" id="res-ics"></div>

    <div class="sep"></div>

    <h3 style="font-family:'Cinzel',serif;font-size:.63rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Importer un fichier JSON</h3>
    <div class="zone-drop" onclick="document.getElementById('fi-json').click()">
      <p>Cliquez pour choisir un fichier .json<br><small style="opacity:.5">Backup ELPIS ou données personnelles</small></p>
    </div>
    <input type="file" id="fi-json" class="input-file" accept=".json" onchange="importerJSON(this)">
    <div class="import-res" id="res-json"></div>

    <div class="sep"></div>

    <h3 style="font-family:'Cinzel',serif;font-size:.63rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Importer un fichier CSV</h3>
    <div class="zone-drop" onclick="document.getElementById('fi-csv').click()">
      <p>Cliquez pour choisir un fichier .csv<br><small style="opacity:.5">Excel, Google Sheets, LibreOffice — colonnes : titre,date,heure,type,description</small></p>
    </div>
    <input type="file" id="fi-csv" class="input-file" accept=".csv" onchange="importerCSV(this)">
    <div class="import-res" id="res-csv"></div>

    <div class="sep"></div>

    <h3 style="font-family:'Cinzel',serif;font-size:.63rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Ouvrir n'importe quel fichier</h3>
    <div id="avert-android-import" style="display:none;border:1px solid rgba(155,35,53,.3);padding:1rem;margin-bottom:1rem;background:rgba(155,35,53,.04)">
      <p style="font-family:'Cinzel',serif;font-size:.58rem;letter-spacing:.35em;color:var(--rouge);text-transform:uppercase;margin-bottom:.5rem">Sur Android — accès fichiers limité</p>
      <p style="font-family:'EB Garamond',serif;font-size:.95rem;font-style:italic;color:var(--parchment);opacity:.8;line-height:1.7;margin-bottom:.5rem">Sur Android, seuls les fichiers accessibles depuis votre gestionnaire de fichiers peuvent être importés. Les photos s'affichent en priorité — naviguez vers vos fichiers texte manuellement.</p>
      <p style="font-family:'Cinzel',serif;font-size:.55rem;letter-spacing:.3em;color:var(--gold);text-transform:uppercase">Une application est bientôt disponible — accès complet à tous vos fichiers.</p>
    </div>
    <p style="font-style:italic;opacity:.6;margin-bottom:1rem;font-size:.95rem">Texte, JSON, CSV, TXT, ICS — ouverts en fenêtre de lecture avec copier-coller. Fichiers Word, PDF, Excel — ouverts dans l'application native.</p>
    <div class="zone-drop" onclick="document.getElementById('fi-libre').click()">
      <p>Cliquez pour choisir n'importe quel fichier</p>
    </div>
    <input type="file" id="fi-libre" class="input-file" onchange="importerFichierLibre(this)">

    <div class="sep"></div>

    <h3 style="font-family:'Cinzel',serif;font-size:.63rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.75rem">Exporter</h3>
    <button class="btn-or" onclick="exporterTousICS()">Tous les événements (.ics)</button>
    <button class="btn-or" onclick="exporterJSON()">Backup complet (.json)</button>
    <button class="btn-or" onclick="exporterCSV()">Tableau (.csv)</button>
  </div>

  <!-- VUE BIBLIOTHÈQUE -->
  <div id="vue-biblio" class="vue">
    <h2 style="font-family:'Cinzel Decorative',serif;color:var(--gold);letter-spacing:.15em;font-size:clamp(1rem,3vw,1.6rem);margin-bottom:.75rem">Bibliothèque ELPIS</h2>

    <!-- MESSAGE MOBILE -->
    <div id="biblio-mobile" style="display:none;border:1px solid rgba(201,168,76,.2);padding:2rem;text-align:center;background:rgba(201,168,76,.02)">
      <p style="font-family:'Cinzel Decorative',serif;font-size:1.1rem;color:var(--gold);letter-spacing:.1em;margin-bottom:1rem">Bibliothèque non disponible sur mobile</p>
      <p style="font-family:'EB Garamond',serif;font-size:1.05rem;font-style:italic;color:var(--parchment);opacity:.8;line-height:1.8;margin-bottom:1rem">La bibliothèque locale nécessite un PC ou Mac avec Chrome ou Edge.</p>
      <div style="border:1px solid rgba(155,35,53,.3);padding:1rem;margin:1rem 0">
        <p style="font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.4em;color:var(--rouge);text-transform:uppercase;margin-bottom:.5rem">Serveur en préparation</p>
        <p style="font-family:'EB Garamond',serif;font-size:1rem;font-style:italic;color:var(--parchment);opacity:.75;line-height:1.7">Applications téléchargeables dans un avenir proche.<br>En attendant, utilisez les exports ICS, JSON et CSV pour transférer vos données vers votre PC.</p>
      </div>
    </div>

    <!-- CONTENU PC -->
    <div id="biblio-pc">
      <p style="font-style:italic;opacity:.6;margin-bottom:1.5rem;font-size:.95rem">Choisissez un emplacement sur votre appareil. ELPIS y créera le dossier <strong style="color:var(--gold);font-style:normal">ELPIS_Bibliothèque</strong> avec ses sous-dossiers.</p>
      <div style="margin-bottom:1.5rem">
        <button class="btn-or" onclick="ouvrirBibliotheque()">Choisir l'emplacement</button>
        <button class="btn-or" id="btn-rafraichir" onclick="rafraichirBibliotheque()" style="display:none">Rafraîchir</button>
        <button class="btn-or" id="btn-sauv-biblio" onclick="sauvegarderVersBiblio()" style="display:none">Sauvegarder dans la bibliothèque</button>
      </div>
      <div id="biblio-statut"></div>
      <div id="biblio-contenu"></div>
    </div>
  </div>

</div>
<div id="toast"></div>

<script>
/* ============================================================
   ÉTAT
============================================================ */
const CLE_EVT  = 'elpis7_evenements';
const CLE_NOTE = 'elpis7_note';
const CLE_MIR  = 'elpis7_miroir';
const sessionStart = Date.now();
let moisActuel = new Date().getMonth();
let anneeActuelle = new Date().getFullYear();
let dossierRacine = null; // File System Access handle

/* ============================================================
   MIROIR
============================================================ */
function mettreAJourMiroir() {
  const now = new Date();
  const ua  = navigator.userAgent;
  let os = 'Inconnu';
  if (ua.includes('Windows'))                          os = 'Windows';
  else if (ua.includes('Android'))                     os = 'Android';
  else if (ua.includes('iPhone')||ua.includes('iPad')) os = 'iOS';
  else if (ua.includes('Mac'))                         os = 'macOS';
  else if (ua.includes('Linux'))                       os = 'Linux';
  const d = Math.floor((Date.now()-sessionStart)/1000);
  const sess = `${String(Math.floor(d/3600)).padStart(2,'0')}:${String(Math.floor((d%3600)/60)).padStart(2,'0')}:${String(d%60).padStart(2,'0')}`;
  document.getElementById('mir-h').textContent  = now.toLocaleTimeString('fr-FR');
  document.getElementById('mir-os').textContent = os;
  document.getElementById('mir-tz').textContent = Intl.DateTimeFormat().resolvedOptions().timeZone;
  document.getElementById('mir-s').textContent  = sess;
  document.getElementById('mir-nb').textContent = chargerEvts().length;
  document.getElementById('mir-bib').textContent = dossierRacine ? 'Liée ✓' : 'Non liée';
  localStorage.setItem(CLE_MIR, JSON.stringify({ts:now.toISOString(),os,sess,nb:chargerEvts().length,biblio:!!dossierRacine}));
}
setInterval(mettreAJourMiroir, 1000);
mettreAJourMiroir();

/* ============================================================
   ÉVÉNEMENTS
============================================================ */
function chargerEvts() { return JSON.parse(localStorage.getItem(CLE_EVT)||'[]'); }
function sauvegarderEvts(e) { localStorage.setItem(CLE_EVT, JSON.stringify(e)); }

function creerEvt() {
  const titre = document.getElementById('f-titre').value.trim();
  const date  = document.getElementById('f-date').value;
  if (!titre) { afficherToast('Titre requis'); return; }
  if (!date)  { afficherToast('Date requise'); return; }
  const evt = {
    id: Date.now().toString(36), titre, date,
    heure: document.getElementById('f-heure').value||'09:00',
    desc:  document.getElementById('f-desc').value.trim(),
    type:  document.getElementById('f-type').value,
    cree:  new Date().toISOString()
  };
  const evts = chargerEvts(); evts.push(evt); sauvegarderEvts(evts);
  document.getElementById('f-titre').value = '';
  document.getElementById('f-desc').value  = '';
  afficherToast('Événement créé');
  allerVue('agenda'); renderCalendrier();
}

/* ============================================================
   CALENDRIER
============================================================ */
const JOURS = ['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'];
const MOIS  = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];

function renderCalendrier() {
  document.getElementById('cal-mois').textContent = `${MOIS[moisActuel]} ${anneeActuelle}`;
  const grid = document.getElementById('cal-grid');
  grid.innerHTML = '';
  JOURS.forEach(j => { const e=document.createElement('div'); e.className='cal-jour-label'; e.textContent=j; grid.appendChild(e); });
  const premier = new Date(anneeActuelle, moisActuel, 1);
  const dernier = new Date(anneeActuelle, moisActuel+1, 0);
  const debut   = (premier.getDay()+6)%7;
  const evts    = chargerEvts();
  const today   = new Date();
  for (let i=0; i<debut; i++) { const d=new Date(anneeActuelle,moisActuel,-debut+i+1); grid.appendChild(creerCase(d,evts,true)); }
  for (let j=1; j<=dernier.getDate(); j++) {
    const d = new Date(anneeActuelle, moisActuel, j);
    const el = creerCase(d, evts, false);
    if (d.toDateString()===today.toDateString()) el.classList.add('aujourd-hui');
    grid.appendChild(el);
  }
}

function creerCase(date, evts, autreMois) {
  const el = document.createElement('div');
  el.className = 'cal-jour'+(autreMois?' autre-mois':'');
  const ds = date.toISOString().split('T')[0];
  const ejour = evts.filter(e=>e.date===ds);
  const num = document.createElement('div'); num.className='cal-num'; num.textContent=date.getDate(); el.appendChild(num);
  if (ejour.length) { el.classList.add('a-evts'); ejour.slice(0,3).forEach(()=>{ const pt=document.createElement('span'); pt.className='cal-evt-pt'; el.appendChild(pt); }); }
  el.onclick = () => selectionnerJour(ds, ejour);
  return el;
}

function selectionnerJour(ds, ejour) {
  const d = new Date(ds+'T12:00:00');
  document.getElementById('jour-titre').textContent =
    d.toLocaleDateString('fr-FR',{weekday:'long',day:'numeric',month:'long',year:'numeric'}).toUpperCase();
  const zone = document.getElementById('jour-evts');
  if (!ejour.length) {
    zone.innerHTML = `<p style="font-style:italic;opacity:.45;font-size:.95rem;margin-top:.5rem">Aucun événement. <button class="btn-or" style="font-size:.55rem;padding:.35rem .75rem;margin-left:.5rem" onclick="preparerNouveau('${ds}')">+ Ajouter</button></p>`;
    return;
  }
  zone.innerHTML = ejour.map(e=>cardEvt(e)).join('');
}

function preparerNouveau(ds) { document.getElementById('f-date').value=ds; allerVue('creer'); }
function changerMois(d) {
  moisActuel+=d;
  if (moisActuel>11){moisActuel=0;anneeActuelle++;}
  if (moisActuel<0) {moisActuel=11;anneeActuelle--;}
  renderCalendrier();
  document.getElementById('jour-titre').textContent='Sélectionnez un jour';
  document.getElementById('jour-evts').innerHTML='';
}

/* ============================================================
   LISTE
============================================================ */
function afficherListeTous() {
  const evts = chargerEvts();
  document.getElementById('stockage-info').textContent = `${evts.length} événement${evts.length>1?'s':''} — stockage local ELPIS`;
  const zone = document.getElementById('liste-tous');
  if (!evts.length) { zone.innerHTML='<p style="font-style:italic;opacity:.45;text-align:center;padding:2rem">Aucun événement.</p>'; return; }
  evts.sort((a,b)=>a.date.localeCompare(b.date));
  zone.innerHTML = evts.map(e=>cardEvt(e)).join('');
}

function cardEvt(evt) {
  const diff = new Date(evt.date)-new Date();
  const j = Math.floor(diff/(1000*60*60*24));
  const cd = diff<0?'Passé':j===0?"Aujourd'hui":j===1?'Demain':j<30?`Dans ${j} jours`:j<365?`Dans ${Math.floor(j/30)} mois`:`Dans ${Math.floor(j/365)} ans`;
  const dfr = new Date(evt.date+'T12:00:00').toLocaleDateString('fr-FR',{day:'numeric',month:'long',year:'numeric'});
  return `<div class="evt-card"><div>
    <div class="et">${evt.titre}</div>
    <div class="ed">📅 ${dfr} ${evt.heure?'— '+evt.heure:''} — ${evt.type}</div>
    ${evt.desc?`<div class="en">${evt.desc.substring(0,100)}${evt.desc.length>100?'...':''}</div>`:''}
    <div class="ec">${cd}</div>
  </div><div class="evt-actions">
    <button class="btn-xs" onclick="exporterUnICS('${evt.id}')">Export .ics</button>
    <button class="btn-xs r" onclick="supprimerEvt('${evt.id}')">Supprimer</button>
  </div></div>`;
}

function supprimerEvt(id) {
  sauvegarderEvts(chargerEvts().filter(e=>e.id!==id));
  afficherToast('Supprimé'); afficherListeTous(); renderCalendrier();
}

/* ============================================================
   EXPORT
============================================================ */
function fmtICS(d){return d.toISOString().replace(/[-:]/g,'').split('.')[0]+'Z';}
function telecharger(contenu,nom,type){
  const blob=new Blob([contenu],{type}),url=URL.createObjectURL(blob),a=document.createElement('a');
  a.href=url;a.download=nom;document.body.appendChild(a);a.click();document.body.removeChild(a);URL.revokeObjectURL(url);
}
function genICS(evts){
  let l=['BEGIN:VCALENDAR','VERSION:2.0','PRODID:-//ELPIS 360//Module VII//FR','CALSCALE:GREGORIAN','METHOD:PUBLISH'];
  evts.forEach(evt=>{
    const dt=evt.date.replace(/-/g,''),hr=(evt.heure||'09:00').replace(':','')+'00';
    l=l.concat(['BEGIN:VEVENT',`UID:elpis-${evt.id}@codex144`,`DTSTAMP:${fmtICS(new Date())}`,`DTSTART:${dt}T${hr}`,`DTEND:${dt}T${hr}`,`SUMMARY:${evt.titre}`,`DESCRIPTION:${(evt.desc||'').replace(/\n/g,'\\n')}`,`CATEGORIES:${evt.type.toUpperCase()}`,`URL:${window.location.href.split('?')[0]}?evt=${evt.id}`,'END:VEVENT']);
  });
  l.push('END:VCALENDAR'); return l.join('\r\n');
}
function exporterUnICS(id){const evt=chargerEvts().find(e=>e.id===id);if(!evt)return;telecharger(genICS([evt]),`ELPIS_${evt.titre.replace(/\s+/g,'_')}.ics`,'text/calendar;charset=utf-8');afficherToast('Export .ics');}
function exporterTousICS(){const evts=chargerEvts();if(!evts.length){afficherToast('Aucun événement');return;}telecharger(genICS(evts),`ELPIS_Agenda_${new Date().toISOString().split('T')[0]}.ics`,'text/calendar;charset=utf-8');afficherToast(`${evts.length} événement(s) exportés`);}
function exporterJSON(){const evts=chargerEvts();if(!evts.length){afficherToast('Aucun événement');return;}telecharger(JSON.stringify({source:'ELPIS Module VII',version:'v4',date:new Date().toISOString(),evenements:evts},null,2),`ELPIS_Backup_${new Date().toISOString().split('T')[0]}.json`,'application/json');afficherToast('Backup JSON téléchargé');}
function exporterCSV(){
  const evts=chargerEvts();if(!evts.length){afficherToast('Aucun événement');return;}
  const entete='titre,date,heure,type,description';
  const lignes=evts.map(e=>`"${e.titre}","${e.date}","${e.heure||''}","${e.type}","${(e.desc||'').replace(/"/g,'""')}"`);
  telecharger([entete,...lignes].join('\n'),`ELPIS_${new Date().toISOString().split('T')[0]}.csv`,'text/csv;charset=utf-8');
  afficherToast('CSV téléchargé');
}

/* ============================================================
   IMPORT ICS
============================================================ */
function importerICS(input){
  const file=input.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=e=>{
    const contenu=e.target.result,existants=chargerEvts(),nouveaux=[];
    contenu.split('BEGIN:VEVENT').slice(1).forEach(bloc=>{
      const lire=c=>{const m=bloc.match(new RegExp(c+':(.+)'));return m?m[1].trim().replace(/\\n/g,'\n'):''};
      const dtstart=lire('DTSTART');if(!dtstart)return;
      const dateStr=dtstart.length>=8?`${dtstart.substring(0,4)}-${dtstart.substring(4,6)}-${dtstart.substring(6,8)}`:'';
      const titre=lire('SUMMARY');if(!titre||!dateStr)return;
      if(existants.some(e=>e.titre===titre&&e.date===dateStr))return;
      nouveaux.push({id:Date.now().toString(36)+Math.random().toString(36).slice(2,5),titre,date:dateStr,heure:dtstart.includes('T')?`${dtstart.substring(9,11)}:${dtstart.substring(11,13)}`:'09:00',desc:lire('DESCRIPTION'),type:'importé',cree:new Date().toISOString()});
    });
    if(!nouveaux.length){document.getElementById('res-ics').textContent='Aucun nouvel événement.';return;}
    sauvegarderEvts([...existants,...nouveaux]);
    document.getElementById('res-ics').textContent=`${nouveaux.length} événement(s) importé(s)`;
    afficherToast(`${nouveaux.length} importé(s)`);renderCalendrier();
  };
  reader.readAsText(file);
}

/* ============================================================
   IMPORT JSON — accepte tout format JSON
============================================================ */
function importerJSON(input){
  const file=input.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=e=>{
    try{
      const data=JSON.parse(e.target.result);
      // Cas 1 — backup ELPIS avec tableau evenements
      if(data.evenements && Array.isArray(data.evenements) && data.evenements.length){
        const existants=chargerEvts();
        const nouveaux=data.evenements.filter(ei=>!existants.some(ex=>ex.titre===ei.titre&&ex.date===ei.date));
        sauvegarderEvts([...existants,...nouveaux]);
        document.getElementById('res-json').textContent=`${nouveaux.length} événement(s) importé(s) depuis backup ELPIS`;
        afficherToast(`JSON : ${nouveaux.length} importé(s)`);renderCalendrier();
        return;
      }
      // Cas 2 — tout autre JSON : afficher dans fenêtre de lecture
      const contenu = JSON.stringify(data, null, 2);
      ouvrirFenetreContenu(file.name, contenu);
      document.getElementById('res-json').textContent=`Fichier ouvert en lecture — copiez le contenu souhaité`;
    }catch(err){
      // Cas 3 — pas du JSON valide : lire comme texte brut
      ouvrirFenetreContenu(file.name, e.target.result);
      document.getElementById('res-json').textContent=`Fichier ouvert en lecture`;
    }
  };
  reader.readAsText(file);
}

/* ============================================================
   IMPORT CSV
============================================================ */
function importerCSV(input){
  const file=input.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=e=>{
    const lignes=e.target.result.split('\n').filter(l=>l.trim());
    lignes.shift(); // supprimer entête
    const existants=chargerEvts(),nouveaux=[];
    lignes.forEach(ligne=>{
      const cols=ligne.match(/(".*?"|[^,]+)/g)||[];
      const nettoyer=s=>(s||'').replace(/^"|"$/g,'').replace(/""/g,'"').trim();
      const titre=nettoyer(cols[0]),date=nettoyer(cols[1]);
      if(!titre||!date)return;
      if(existants.some(e=>e.titre===titre&&e.date===date))return;
      nouveaux.push({id:Date.now().toString(36)+Math.random().toString(36).slice(2,5),titre,date,heure:nettoyer(cols[2])||'09:00',type:nettoyer(cols[3])||'autre',desc:nettoyer(cols[4])||'',cree:new Date().toISOString()});
    });
    if(!nouveaux.length){document.getElementById('res-csv').textContent='Aucun nouvel événement.';return;}
    sauvegarderEvts([...existants,...nouveaux]);
    document.getElementById('res-csv').textContent=`${nouveaux.length} événement(s) importé(s)`;
    afficherToast(`CSV : ${nouveaux.length} importé(s)`);renderCalendrier();
  };
  reader.readAsText(file,'UTF-8');
}

/* ============================================================
   FENÊTRE DE LECTURE UNIVERSELLE
============================================================ */
function ouvrirFenetreContenu(nom, contenu) {
  const existing = document.getElementById('fenetre-lecture');
  if (existing) existing.remove();

  const div = document.createElement('div');
  div.id = 'fenetre-lecture';
  div.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(10,8,6,.96);z-index:3000;display:flex;align-items:center;justify-content:center;padding:1.5rem';
  div.innerHTML = `
    <div style="background:var(--dark);border:1px solid var(--gold);max-width:700px;width:100%;max-height:85vh;display:flex;flex-direction:column;position:relative">
      <div style="padding:1rem 1.5rem;border-bottom:1px solid rgba(201,168,76,.15);display:flex;justify-content:space-between;align-items:center">
        <div style="font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.35em;color:var(--gold);text-transform:uppercase">${nom}</div>
        <button onclick="document.getElementById('fenetre-lecture').remove()" style="font-family:'Cinzel',serif;font-size:.55rem;letter-spacing:.3em;text-transform:uppercase;background:none;border:1px solid rgba(155,35,53,.4);color:var(--rouge);padding:.35rem .7rem;cursor:pointer">Fermer</button>
      </div>
      <textarea id="contenu-lecture" style="flex:1;background:rgba(242,232,213,.03);border:none;color:var(--parchment);font-family:'EB Garamond',serif;font-size:.95rem;padding:1rem;outline:none;resize:none;overflow-y:auto;line-height:1.7;min-height:300px" readonly>${contenu.replace(/</g,'&lt;').replace(/>/g,'&gt;')}</textarea>
      <div style="padding:.75rem 1.5rem;border-top:1px solid rgba(201,168,76,.1);display:flex;gap:.5rem;flex-wrap:wrap">
        <button onclick="copierContenuLecture()" style="font-family:'Cinzel',serif;font-size:.55rem;letter-spacing:.3em;text-transform:uppercase;background:none;border:1px solid var(--gold);color:var(--gold);padding:.5rem 1rem;cursor:pointer">Copier tout</button>
        <button onclick="collerDansNotes()" style="font-family:'Cinzel',serif;font-size:.55rem;letter-spacing:.3em;text-transform:uppercase;background:none;border:1px solid rgba(201,168,76,.4);color:var(--gold-dim);padding:.5rem 1rem;cursor:pointer">Envoyer vers Notes</button>
      </div>
    </div>`;
  document.body.appendChild(div);
}

function copierContenuLecture(){
  const t=document.getElementById('contenu-lecture');
  if(!t)return;
  navigator.clipboard.writeText(t.value).then(()=>afficherToast('Contenu copié')).catch(()=>{t.select();document.execCommand('copy');afficherToast('Contenu copié');});
}

function collerDansNotes(){
  const t=document.getElementById('contenu-lecture');
  if(!t)return;
  const noteActuelle=localStorage.getItem('elpis7_note')||'';
  const separateur=noteActuelle?'\n\n---\n\n':'';
  localStorage.setItem('elpis7_note', noteActuelle+separateur+t.value);
  afficherToast('Envoyé vers Notes');
  document.getElementById('fenetre-lecture').remove();
}

/* ============================================================
   IMPORT FICHIER LIBRE — tout format texte
============================================================ */
function importerFichierLibre(input){
  const file=input.files[0];if(!file)return;
  const ext=(file.name.split('.').pop()||'').toLowerCase();
  // Fichiers binaires — proposer ouverture native
  const binaires=['pdf','doc','docx','xls','xlsx','ppt','pptx','odt','ods'];
  if(binaires.includes(ext)){
    afficherToast('Fichier binaire — ouverture dans l\'application native');
    const url=URL.createObjectURL(file);
    const a=document.createElement('a');a.href=url;a.target='_blank';a.click();
    setTimeout(()=>URL.revokeObjectURL(url),1000);
    return;
  }
  // Fichiers texte — lire et afficher
  const reader=new FileReader();
  reader.onload=e=>{ ouvrirFenetreContenu(file.name, e.target.result); };
  reader.readAsText(file,'UTF-8');
}

/* ============================================================
   BIBLIOTHÈQUE — File System Access API
============================================================ */
const SOUS_DOSSIERS = ['ICS','JSON','CSV','TXT'];

async function ouvrirBibliotheque(){
  if(!('showDirectoryPicker' in window)){
    document.getElementById('biblio-statut').textContent='File System Access non disponible sur ce navigateur. Utilisez Chrome ou Edge.';
    return;
  }
  try{
    const racine = await window.showDirectoryPicker({mode:'readwrite'});
    // Créer ELPIS_Bibliothèque
    const biblio = await racine.getDirectoryHandle('ELPIS_Bibliothèque',{create:true});
    // Créer les sous-dossiers
    for(const sd of SOUS_DOSSIERS){
      await biblio.getDirectoryHandle(sd,{create:true});
    }
    dossierRacine = biblio;
    document.getElementById('btn-rafraichir').style.display='inline-block';
    document.getElementById('btn-sauv-biblio').style.display='inline-block';
    document.getElementById('biblio-statut').textContent='✓ Bibliothèque ELPIS liée — dossiers créés';
    afficherToast('Bibliothèque liée');
    await rafraichirBibliotheque();
  }catch(e){
    if(e.name!=='AbortError') afficherToast('Erreur d\'accès au dossier');
  }
}

async function rafraichirBibliotheque(){
  if(!dossierRacine){afficherToast('Bibliothèque non liée');return;}
  const zone=document.getElementById('biblio-contenu');
  zone.innerHTML='';
  for(const sd of SOUS_DOSSIERS){
    try{
      const dossier=await dossierRacine.getDirectoryHandle(sd,{create:true});
      const entries=[];
      for await(const entry of dossier.values()){
        if(entry.kind==='file') entries.push(entry);
      }
      const div=document.createElement('div');div.className='biblio-dossier';
      const icones={'ICS':'📅','JSON':'🗂️','CSV':'📊','TXT':'📝'};
      const lignes=entries.length
        ? entries.map(entry=>`
            <div class="biblio-fichier-item">
              <span class="biblio-fichier-nom" style="cursor:pointer;color:var(--gold);text-decoration:underline dotted" onclick="lireFichierBiblio('${sd}','${entry.name}')">${entry.name}</span>
              <span class="biblio-fichier-taille">Cliquer pour ouvrir</span>
            </div>`).join('')
        : '<span class="biblio-vide">Dossier vide</span>';
      div.innerHTML=`<div class="biblio-dossier-titre"><span class="icone">${icones[sd]||'📁'}</span>${sd}</div><div class="biblio-fichiers">${lignes}</div>`;
      zone.appendChild(div);
    }catch(e){}
  }
}

async function lireFichierBiblio(nomDossier, nomFichier){
  if(!dossierRacine){afficherToast('Bibliothèque non liée');return;}
  try{
    const dossier=await dossierRacine.getDirectoryHandle(nomDossier);
    const fileHandle=await dossier.getFileHandle(nomFichier);
    const file=await fileHandle.getFile();
    const contenu=await file.text();
    ouvrirFenetreContenu(nomFichier, contenu);
  }catch(e){afficherToast('Impossible de lire ce fichier');}
}

async function sauvegarderVersBiblio(){
  if(!dossierRacine){afficherToast('Bibliothèque non liée');return;}
  const evts=chargerEvts();
  const date=new Date().toISOString().split('T')[0];
  try{
    // JSON
    const dJson=await dossierRacine.getDirectoryHandle('JSON',{create:true});
    const fJson=await dJson.getFileHandle(`ELPIS_Backup_${date}.json`,{create:true});
    const wJson=await fJson.createWritable();
    await wJson.write(JSON.stringify({source:'ELPIS Module VII',version:'v4',date:new Date().toISOString(),evenements:evts},null,2));
    await wJson.close();
    // ICS
    if(evts.length){
      const dIcs=await dossierRacine.getDirectoryHandle('ICS',{create:true});
      const fIcs=await dIcs.getFileHandle(`ELPIS_Agenda_${date}.ics`,{create:true});
      const wIcs=await fIcs.createWritable();
      await wIcs.write(genICS(evts));
      await wIcs.close();
    }
    // Note
    const note=localStorage.getItem(CLE_NOTE)||'';
    if(note){
      const dTxt=await dossierRacine.getDirectoryHandle('TXT',{create:true});
      const fTxt=await dTxt.getFileHandle(`ELPIS_Note_${date}.txt`,{create:true});
      const wTxt=await fTxt.createWritable();
      await wTxt.write(note);
      await wTxt.close();
    }
    afficherToast('Sauvegardé dans la bibliothèque');
    await rafraichirBibliotheque();
  }catch(e){afficherToast('Erreur de sauvegarde');}
}

/* ============================================================
   NOTES — 12 notes indépendantes
============================================================ */
let noteActive = 1;

function initNotesSelector() {
  const sel = document.getElementById('notes-selector');
  if (!sel) return;
  sel.innerHTML = '';
  for (let i = 1; i <= 12; i++) {
    const btn = document.createElement('button');
    btn.textContent = i;
    btn.style.cssText = `font-family:'Cinzel',serif;font-size:.6rem;letter-spacing:.2em;background:none;border:1px solid rgba(201,168,76,${localStorage.getItem('elpis7_note_'+i)?'0.5':'0.15'});color:${localStorage.getItem('elpis7_note_'+i)?'var(--gold)':'var(--gold-dim)'};padding:.4rem;cursor:pointer;transition:all .3s`;
    btn.onclick = () => selectionnerNote(i);
    if (i === noteActive) {
      btn.style.background = 'rgba(201,168,76,0.1)';
      btn.style.borderColor = 'var(--gold)';
      btn.style.color = 'var(--gold)';
    }
    sel.appendChild(btn);
  }
}

function selectionnerNote(n) {
  sauvegarderNote(true); // sauvegarde silencieuse avant de changer
  noteActive = n;
  document.getElementById('note-active-label').textContent = `Note ${n}`;
  document.getElementById('zone-note').value = localStorage.getItem('elpis7_note_'+n) || '';
  initNotesSelector();
}

function chargerNote() {
  document.getElementById('zone-note').value = localStorage.getItem('elpis7_note_'+noteActive) || '';
  initNotesSelector();
}

function sauvegarderNote(silencieux) {
  const val = document.getElementById('zone-note') ? document.getElementById('zone-note').value : '';
  localStorage.setItem('elpis7_note_'+noteActive, val);
  // Compatibilité miroir — note 1 reste dans CLE_NOTE
  if (noteActive === 1) localStorage.setItem(CLE_NOTE, val);
  if (!silencieux) { afficherToast(`Note ${noteActive} sauvegardée`); initNotesSelector(); }
}

function copierNote() {
  const t = document.getElementById('zone-note').value;
  if (!t) { afficherToast('Rien à copier'); return; }
  navigator.clipboard.writeText(t).then(() => afficherToast('Copié')).catch(() => {
    document.getElementById('zone-note').select(); document.execCommand('copy'); afficherToast('Copié');
  });
}

function exporterNote() {
  const t = document.getElementById('zone-note').value;
  if (!t) { afficherToast('Rien à exporter'); return; }
  sauvegarderNote(true);
  telecharger(t, `ELPIS_Note${noteActive}_${new Date().toLocaleDateString('fr-FR').replace(/\//g,'-')}.txt`, 'text/plain;charset=utf-8');
  afficherToast(`Note ${noteActive} exportée`);
}

function effacerNote() {
  if (!confirm(`Effacer la Note ${noteActive} ?`)) return;
  localStorage.removeItem('elpis7_note_'+noteActive);
  document.getElementById('zone-note').value = '';
  afficherToast(`Note ${noteActive} effacée`);
  initNotesSelector();
}

/* ============================================================
   NAVIGATION
============================================================ */
function allerVue(id){
  document.querySelectorAll('.vue').forEach(v=>v.classList.remove('active'));
  document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('actif'));
  document.getElementById('vue-'+id).classList.add('active');
  const idx=['agenda','creer','liste','notes','import','biblio'].indexOf(id);
  const btns=document.querySelectorAll('.nav-btn');if(btns[idx])btns[idx].classList.add('actif');
  if(id==='liste')afficherListeTous();
  if(id==='notes'){chargerNote();initNotesSelector();}
  window.scrollTo({top:0,behavior:'smooth'});
}

/* ============================================================
   POPUP INSTALLATION
============================================================ */
function afficherInstall(){
  const ua=navigator.userAgent;
  let inst='';
  if(ua.includes('Android')||ua.includes('iPhone')||ua.includes('iPad')){
    inst=`<div class="etape-install">Sur Android — Chrome<span>Appuyez sur ⋮ (3 points) → "Ajouter à l'écran d'accueil"</span></div>
    <div class="etape-install">Sur iPhone / iPad — Safari<span>Bouton Partager ↑ → "Sur l'écran d'accueil"</span></div>`;
  }else{
    inst=`<div class="etape-install">Sur PC — Chrome / Edge<span>Ctrl+D pour ajouter aux favoris, ou glissez l'onglet vers la barre de favoris.</span></div>
    <div class="etape-install">Sur Mac — Safari<span>Menu Favoris → "Ajouter la page aux favoris"</span></div>`;
  }
  document.getElementById('install-instructions').innerHTML=inst;
  document.getElementById('popup-install').classList.add('visible');
}
function fermerInstall(){document.getElementById('popup-install').classList.remove('visible');localStorage.setItem('elpis7_install_vu','1');}

/* ============================================================
   TOAST
============================================================ */
function afficherToast(msg){
  const t=document.getElementById('toast');t.textContent=msg;t.classList.add('visible');
  setTimeout(()=>t.classList.remove('visible'),2500);
}

/* ============================================================
   INIT
============================================================ */
(function(){
  document.getElementById('f-date').value=new Date().toISOString().split('T')[0];
  renderCalendrier();
  if(!localStorage.getItem('elpis7_install_vu'))setTimeout(afficherInstall,1200);
  const evtId=new URLSearchParams(window.location.search).get('evt');
  if(evtId){const evt=chargerEvts().find(e=>e.id===evtId);if(evt){allerVue('liste');setTimeout(()=>afficherToast(`Retour : ${evt.titre}`),600);}}

  // Détection mobile
  const ua=navigator.userAgent;
  const estMobile=ua.includes('Android')||ua.includes('iPhone')||ua.includes('iPad')||!('showDirectoryPicker' in window);
  if(estMobile){
    document.getElementById('biblio-mobile').style.display='block';
    document.getElementById('biblio-pc').style.display='none';
    // Avertissement Android dans import
    const avert=document.getElementById('avert-android-import');
    if(avert)avert.style.display='block';
  }

  // Init sélecteur 12 notes
  initNotesSelector();
})();
</script>
</body>
</html>
