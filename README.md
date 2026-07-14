# Kinetic Flow // Cyberpunk Portfolio Theme

Benvenut* nel repository di **Kinetic Flow**, il tema WordPress personalizzato in stile **Cyberpunk** per il portfolio professionale di **Manuela Musmeci** (Consulente Tecnica B2B e Laureanda in Ingegneria Informatica).

Questo repository è strutturato in modo da tracciare esclusivamente il codice del tema custom e le configurazioni di sviluppo locale, escludendo i file core di WordPress per mantenere la codebase pulita e leggera.

---

## 🚀 Caratteristiche del Tema
- **Aesthetic Cyberpunk**: UI dal forte impatto visivo con palette di colori neon (Cyan `#00f3ff` e Magenta `#ff00ea`), griglia digitale di sfondo ed effetti di luce dinamici.
- **Cursore Personalizzato**: Cursore interattivo che si adatta dinamicamente quando si passa sopra elementi cliccabili (link, card, bottoni).
- **Single Page App (SPA) UX**: Navigazione fluida tramite animazioni Javascript per il cambio di sezione con dissolvenza hardware accelerata.
- **Cache Busting Integrato**: Caricamento degli asset (`style.css` e `script.js`) con versioning basato sul tempo di ultima modifica (`filemtime`) per evitare problemi di cache nel browser durante lo sviluppo.
- **Lightweight**: Zero framework CSS/JS di terze parti per garantire la massima velocità di caricamento e pulizia del codice.

---

## 📂 Struttura del Progetto
La configurazione di Git esclude l'intero nucleo di WordPress (`wp-admin`, `wp-includes`, file php core e temi/plugin predefiniti) tracciando solo i componenti essenziali del progetto:

```text
├── docker-compose.yml              # Configurazione ambiente Docker locale
├── wp-config-docker.php            # Configurazione database per Docker
├── .htaccess                       # Direttive Apache per WordPress
├── .gitignore                      # Esclusioni mirate del core di WordPress
├── README.md                       # Questa documentazione
└── wp-content/
    └── themes/
        └── kinetic-flow/           # Cartella principale del Tema Custom
            ├── functions.php       # Enqueueing dinamico di CSS/JS con cache busting
            ├── index.php           # Template principale e struttura delle sezioni (Home, Progetti, Contatti)
            ├── style.css           # Variabili CSS, griglia cyberpunk e stili grafici
            └── script.js           # Gestione navigazione SPA e cursore dinamico
```

---

## 🛠️ Installazione e Sviluppo Locale
Il progetto è configurato per essere eseguito localmente tramite **Docker** e **Docker Compose**.

### Prerequisiti
- Docker Desktop installato ed avviato.

### Avvio dell'ambiente
1. Clona questo repository sul tuo computer:
   ```bash
   git clone https://github.com/Manum-dev/vercelapp.git kinetic-flow
   cd kinetic-flow
   ```
2. Avvia i container Docker in modalità detached:
   ```bash
   docker-compose up -d
   ```
3. WordPress sarà disponibile nel browser all'indirizzo:
   [http://localhost:8080](http://localhost:8080)

*Nota: La directory principale del progetto è montata direttamente all'interno del container Docker (`/var/www/html`), consentendo lo sviluppo del tema in tempo reale.*

---

## 💻 Stack Tecnologico del Tema
- **Backend**: PHP (Standard WordPress Theme API)
- **Frontend**: HTML5, Vanilla CSS3 (Custom Variables, Flexbox, CSS Grid), Vanilla JavaScript (ES6)
- **Database**: MySQL 5.7 (tramite Docker)
- **Container**: Docker & Docker Compose

---

## 👩‍💻 Informazioni sull'Autore
**Manuela Musmeci**
- 🎓 *Laureanda in Ingegneria Informatica* (Laurea prevista: Ottobre 2026) presso Universitas Mercatorum.
- ☁️ *AWS Certified Cloud Practitioner* (ID Credenziale: `63acde32-6c34-4883-b4b6-203d5f0250fa`).
- 🛠️ Specializzazioni: **AWS, Terraform, Python (Django), PHP, WordPress Custom Development**.
- ✉️ Contatto: [manuela99183@gmail.com](mailto:manuela99183@gmail.com)
- 🔗 LinkedIn: [linkedin.com/in/manuela-musmeci](https://linkedin.com/in/manuela-musmeci)
- 🐙 GitHub: [github.com/Manum-dev](https://github.com/Manum-dev)
