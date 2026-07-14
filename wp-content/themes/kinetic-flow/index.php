<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinetic Flow - Future Studio</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="cyber-grid"></div>

    <div class="custom-cursor"></div>

    <header class="header">
        <div class="logo">KINETIC_FLOW//</div>
        <nav class="nav">
            <a href="#home" class="nav-link active" data-page="home">01. HOME</a>
            <a href="#projects" class="nav-link" data-page="projects">02. PROJECTS</a>
            <a href="#contact" class="nav-link" data-page="contact">03. CONTACT</a>
        </nav>
    </header>

    <main class="container">
        <section id="home" class="page-section active">
            <h1 class="glitch-text">FUTURE IS NOW</h1>
            <p class="reveal-text">Sviluppo di interfacce digitali ad altissima velocità e impatto cinetico.</p>
            
            <div class="bio-cyber-box">
                <span class="bio-header">// SYSTEM_STATUS: ONLINE // MANUELA MUSMECI</span>
                <p class="bio-text">
                    Consulente Tecnica B2B e futura Ingegnera Informatica (Laurea prevista: Ottobre 2026). 
                    Sviluppo infrastrutture Cloud e backend robusti con <strong>AWS, Terraform e Python/Django</strong>, 
                    progettando al contempo soluzioni frontend responsive e sistemi di tracciamento lato server ad alte prestazioni. 
                    Combino rigore computazionale, automazione logica e fluidità cinetica per ottimizzare 
                    qualsiasi flusso digitale.
                </p>
                <div class="bio-stats">
                    <div class="stat-item"><span>ENGINEERING:</span> <span>IN PROGRESS [OCT 2026]</span></div>
                    <div class="stat-item"><span>CORE_STACK:</span> <span>AWS / TERRAFORM / PYTHON / PHP</span></div>
                    <div class="stat-item"><span>LOCATION:</span> <span>ACIREALE (CT) // WORLDWIDE</span></div>
                </div>
            </div>

            <!-- ESPERIENZE PROFESSIONALI -->
            <h2 class="section-title" style="margin-top: 60px;">PROFESSIONAL EXPERIENCE LOG</h2>
            <div class="experience-list">
                
                <div class="experience-card">
                    <span class="card-id">2020 - OGGI//</span>
                    <h3>Technical Consultant</h3>
                    <p class="company-name">Bi Factory (2020 - oggi) · Graftholders (2024-2025) · Artecha (2024-2025)</p>
                    <p class="experience-sub">Consulenza tecnica B2B su sviluppo frontend, infrastrutture web, analytics e automazione processi.</p>
                    <ul class="experience-bullets">
                        <li>Sviluppo e personalizzazione webpage con HTML5, CSS3 e JavaScript (layout responsive, cross-browser)</li>
                        <li>Customizzazione temi WordPress tramite PHP, CSS custom ed Elementor per adattare il design al brand</li>
                        <li>Integrazione componenti frontend: form, slider, gallery, moduli di contatto ottimizzati per la conversione</li>
                        <li>Gestione e ottimizzazione infrastrutturale WordPress (deployment, sicurezza, performance su hosting)</li>
                        <li>Analisi KPI e integrazione tool di analytics e tracciamento lato server</li>
                        <li>Traduzione di requisiti di business in architetture tecniche, coordinando team cross-funzionali</li>
                    </ul>
                    <div class="tech-tags">
                        <span>#PHP</span> <span>#WordPress</span> <span>#JavaScript</span> <span>#CSS_Custom</span> <span>#Server_Analytics</span> <span>#B2B_Cloud</span>
                    </div>
                </div>

                <div class="experience-card">
                    <span class="card-id">2019 - 2021//</span>
                    <h3>Project Manager</h3>
                    <p class="company-name">Adhoc</p>
                    <ul class="experience-bullets">
                        <li>Coordinamento attività di sviluppo web e marketing, gestione progetti con più stakeholder</li>
                    </ul>
                    <div class="tech-tags">
                        <span>#Project_Management</span> <span>#Marketing_Strategy</span> <span>#Web_Dev_Coordination</span>
                    </div>
                </div>

            </div>

            <!-- FORMAZIONE -->
            <h2 class="section-title" style="margin-top: 60px;">ACADEMIC & TRAINING LOG</h2>
            <div class="education-grid">
                
                <div class="education-card">
                    <span class="card-id">CERTIFICATION//</span>
                    <h3>AWS Certified Cloud Practitioner</h3>
                    <p class="company-name">Amazon Web Services</p>
                    <p class="experience-desc">Credential ID: 63acde32-6c34-4883-b4b6-203d5f0250fa | Scadenza: luglio 2029.</p>
                    <div class="tech-tags">
                        <span>#AWS_Cloud</span> <span>#Cloud_Practitioner</span>
                    </div>
                </div>

                <div class="education-card">
                    <span class="card-id">ACADEMY_MODULE//</span>
                    <h3>Dev, Cloud & Product Academy</h3>
                    <p class="company-name">Edgemony × AWS re/Start</p>
                    <p class="experience-desc">
                        Completato a marzo 2026. Percorso intensivo focalizzato su Python Backend (190h), AWS + Terraform 120h, Product Dev 70h.
                        Preparazione alla certificazione AWS Cloud Practitioner.
                    </p>
                    <div class="tech-tags">
                        <span>#Python_Backend</span> <span>#AWS_Cloud</span> <span>#Terraform_IaC</span> <span>#Product_Dev</span>
                    </div>
                </div>

                <div class="education-card">
                    <span class="card-id">ACADEMIC_STATUS//</span>
                    <h3>Laureanda in Ingegneria Informatica</h3>
                    <p class="company-name">Universitas Mercatorum</p>
                    <p class="experience-desc">Focus su fondamenti di computazione, architetture dei calcolatori e strutture dati. Laurea prevista: Ottobre 2026.</p>
                    <div class="tech-tags">
                        <span>#Computer_Engineering</span> <span>#Algorithms</span> <span>#Data_Structures</span>
                    </div>
                </div>

            </div>
        </section>

        <section id="projects" class="page-section">
            <h2 class="section-title">SYSTEM CORE LOG PROJECTS</h2>
            
            <div class="project-grid">
                
                <div class="project-card">
                    <span class="card-id">CLOUD_OPTIMIZATION//</span>
                    <h3>AWS Python Image Optimization Pipeline 🚀</h3>
                    <p class="company-name">Progetto Open Source / AWS Cloud</p>
                    <p class="experience-desc">
                        Pipeline Python automatizzata per ottimizzare immagini (ridimensionamento e compressione EXIF in memoria RAM) 
                        prima del caricamento su AWS S3, riducendo i costi di trasferimento e storage oltre il 70%.
                    </p>
                    
                    <div style="margin-top: 15px; margin-bottom: 15px;">
                        <span style="color: var(--neon-magenta); font-family: 'Share Tech Mono', monospace; font-size: 0.85rem; display: block; margin-bottom: 5px;">💡 ENGINEERING & ARCHITECTURAL CHOICES:</span>
                        <ul class="experience-bullets" style="margin-top: 5px;">
                            <li><strong>In-Memory Optimization (RAM Efficiency):</strong> Elaborazione in RAM (io.BytesIO) senza file temporanei su disco, ideale per architetture Serverless come AWS Lambda.</li>
                            <li><strong>AWS Mocking with Moto (Zero-Cost):</strong> Simulazione locale dell'infrastruttura S3 tramite il decorator @mock_aws per evitare costi di test e leak di chiavi.</li>
                            <li><strong>Direct ROI Impact (Cloud Cost Reduction):</strong> Riduzione del peso dei file superiore al 70% tramite pulizia dei metadati EXIF e compressione geometrica.</li>
                        </ul>
                    </div>

                    <div style="margin-top: 15px; margin-bottom: 20px;">
                        <span style="color: var(--neon-magenta); font-family: 'Share Tech Mono', monospace; font-size: 0.85rem; display: block; margin-bottom: 5px;">📈 PIPELINE EXECUTION LOG:</span>
                        <pre style="background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(0, 243, 255, 0.1); padding: 12px; font-family: 'Share Tech Mono', monospace; font-size: 0.8rem; color: #00f3ff; overflow-x: auto; border-radius: 4px; line-height: 1.4; margin: 0;">
--- IMAGE OPTIMIZATION: PIPELINE INITIALIZED ---
[1/3] Generating raw 800x600 test image in memory...
[2/3] Executing optimization (resizing & stripping EXIF)...
[⚠️ METRIC] Compression success: 235.4 KB -> 68.2 KB (-71.0%)
[3/3] Uploading optimized payload to mock S3: 's3://company-media/'...
[OK] Object 'optimized_image.jpg' successfully stored!
Pipeline Status: OPTIMIZED & UPLOADED ✅</pre>
                    </div>

                    <div class="tech-tags" style="margin-bottom: 25px;">
                        <span>#Python_3</span> <span>#Pillow_PIL</span> <span>#Boto3_AWS</span> <span>#Moto_Mock</span> <span>#Cloud_Optimization</span> <span>#S3_Storage</span>
                    </div>
                    <div class="project-footer">
                        <a href="https://github.com/Manum-dev/aws-image-optimizer" target="_blank" class="cyber-button" style="font-size: 0.85rem; padding: 10px 20px;">FETCH_GITHUB_REPO</a>
                    </div>
                </div>

                <div class="project-card">
                    <span class="card-id">DEVSECOPS_AUTOMATION//</span>
                    <h3>AWS Cloud Security & Secrets Guardian Pipeline 🛡️</h3>
                    <p class="company-name">Progetto Open Source / DevSecOps</p>
                    <p class="experience-desc">
                        Pipeline di conformità DevSecOps automatizzata per la scansione, migrazione in cloud vault (AWS Secrets Manager) 
                        e sanificazione locale di credenziali hardcoded esposte nel codice sorgente.
                    </p>
                    
                    <div style="margin-top: 15px; margin-bottom: 15px;">
                        <span style="color: var(--neon-magenta); font-family: 'Share Tech Mono', monospace; font-size: 0.85rem; display: block; margin-bottom: 5px;">💡 ARCHITECTURAL & COMPLIANCE FEATURES:</span>
                        <ul class="experience-bullets" style="margin-top: 5px;">
                            <li><strong>Decoupled Architecture:</strong> Logica di scansione (guardian.py) disaccoppiata dall'ambiente di test (setup_test_env.py) per mantenere la pipeline pulita.</li>
                            <li><strong>Proactive DLP (Data Leak Prevention):</strong> Intercettazione e blocco immediato di leaks di credenziali a monte nel ciclo di sviluppo (Shift-Left Security).</li>
                            <li><strong>AWS Secrets Manager Integration:</strong> Migrazione automatica delle chiavi su vault sicuro e aggiornamento dinamico del codice locale con variabili d'ambiente.</li>
                            <li><strong>Zero-Cost Security Auditing:</strong> Test in-memory locali e mock di API AWS tramite libreria Moto, escludendo rischi di leakage in fase di test.</li>
                        </ul>
                    </div>

                    <div style="margin-top: 15px; margin-bottom: 20px;">
                        <span style="color: var(--neon-magenta); font-family: 'Share Tech Mono', monospace; font-size: 0.85rem; display: block; margin-bottom: 5px;">📈 TERMINAL OUTPUT LOG:</span>
                        <pre style="background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(0, 243, 255, 0.1); padding: 12px; font-family: 'Share Tech Mono', monospace; font-size: 0.8rem; color: #00f3ff; overflow-x: auto; border-radius: 4px; line-height: 1.4; margin: 0;">
--- THE SECRET GUARDIAN: PIPELINE INITIALIZED ---
[1/3] Scanning source file: developer_code.py...
[⚠️ ALERT] Found 1 exposed secret(s) hardcoded in source!
[2/3] Securely migrating exposed secret to AWS Secrets Manager...
[3/3] Sanitizing local source file (stripping sensitive strings)...
[OK] Source file successfully sanitized and secured!
Pipeline Compliance Status: COMPLIANT ✅</pre>
                    </div>

                    <div class="tech-tags" style="margin-bottom: 25px;">
                        <span>#Python_3</span> <span>#Boto3_AWS</span> <span>#Moto_Mock</span> <span>#DevSecOps</span> <span>#Secrets_Manager</span> <span>#DLP</span>
                    </div>
                    <div class="project-footer">
                        <a href="https://github.com/Manum-dev/aws-secrets-guardian" target="_blank" class="cyber-button" style="font-size: 0.85rem; padding: 10px 20px;">FETCH_GITHUB_REPO</a>
                    </div>
                </div>

                <div class="project-card">
                    <span class="card-id">ACTIVE_PROJECT//</span>
                    <h3>Sistema di Gestione Presenze</h3>
                    <p class="company-name">Sviluppo Backend Privato</p>
                    <p class="experience-desc">
                        Applicazione core per l'autenticazione utenti, CRUD gestione entrate/uscite, logica calcolo e riepilogo presenze. 
                        Modellazione database relazionale con gestione permessi di accesso.
                    </p>
                    
                    <div style="margin-top: 15px; margin-bottom: 15px;">
                        <span style="color: var(--neon-magenta); font-family: 'Share Tech Mono', monospace; font-size: 0.85rem; display: block; margin-bottom: 5px;">💡 SYSTEM CORE FEATURES:</span>
                        <ul class="experience-bullets" style="margin-top: 5px;">
                            <li><strong>User Authentication:</strong> Sistema sicuro di login/logout per dipendenti con gestione dei ruoli e permessi di accesso granulari.</li>
                            <li><strong>CRUD Workflows:</strong> Gestione completa delle registrazioni orarie (entrate ed uscite) con validazione dei dati inseriti.</li>
                            <li><strong>Relational DB Design:</strong> Modellazione ottimizzata delle entità su SQLite per tracciare presenze e storici orari in modo coerente.</li>
                            <li><strong>REST API Design:</strong> Endpoint puliti per consentire l'integrazione di client esterni o dashboard di monitoraggio amministrativo.</li>
                        </ul>
                    </div>

                    <div style="margin-top: 15px; margin-bottom: 20px;">
                        <span style="color: var(--neon-magenta); font-family: 'Share Tech Mono', monospace; font-size: 0.85rem; display: block; margin-bottom: 5px;">📈 SYSTEM OPERATIONAL LOG:</span>
                        <pre style="background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(0, 243, 255, 0.1); padding: 12px; font-family: 'Share Tech Mono', monospace; font-size: 0.8rem; color: #00f3ff; overflow-x: auto; border-radius: 4px; line-height: 1.4; margin: 0;">
--- ATTENDANCE SYSTEM: CORE INITIALIZED ---
[DB] SQLite database connected. Relational models active.
[AUTH] User authentication system loaded (Granular permissions).
[CRUD] Logged employee check-in/check-out events.
[CALC] Attendance summary calculated successfully.
System Status: OPERATIONAL ✅</pre>
                    </div>

                    <div class="tech-tags" style="margin-bottom: 25px;">
                        <span>#Django</span> <span>#Python</span> <span>#SQLite</span> <span>#Auth</span> <span>#CRUD</span> <span>#REST_API</span>
                    </div>
                    <div class="project-footer">
                        <a href="https://github.com/Manum-dev" target="_blank" class="cyber-button" style="font-size: 0.85rem; padding: 10px 20px;">FETCH_GITHUB_REPO</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="contact" class="page-section">
            <h2 class="section-title">ESTABLISH CONNECTION//</h2>
            <p class="reveal-text">Canale sicuro pronto per la ricezione di nuove richieste di sviluppo, stage o collaborazione full-time. Available worldwide from Acireale (CT).</p>
            
            <div class="contact-channels">
                <a href="mailto:manuela99183@gmail.com" class="cyber-button"> OPEN_EMAIL_GATE</a>
                <a href="https://linkedin.com/in/manuela-musmeci" target="_blank" class="cyber-button"> CONNECT_LINKEDIN</a>
                <a href="https://github.com/Manum-dev" target="_blank" class="cyber-button"> FETCH_GITHUB_REPOS</a>
            </div>
        </section>
    </main>

    <?php wp_footer(); ?>
</body>
</html>