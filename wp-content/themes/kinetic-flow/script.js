document.addEventListener('DOMContentLoaded', () => {
    
    // 1. ANIMAZIONE NAVIGAZIONE TRA LE PAGINE
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.page-section');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const targetPage = link.getAttribute('data-page');

            // Rimuovi classe attiva da tutti i link
            links.forEach(l => l.classList.remove('active'));
            // Aggiungi al link cliccato
            link.classList.add('active');

            // Cambia sezione con dissolvenza hardware
            sections.forEach(section => {
                if (section.getAttribute('id') === targetPage) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        });
    });

    // 2. CURSORE CUSTOM CHE SEGUE IL MOUSE
    const cursor = document.querySelector('.custom-cursor');
    
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // Effetto ingrandimento sui link
    const interactiveElements = document.querySelectorAll('.nav-link, .project-card, .cyber-button');
    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.style.width = '24px';
            cursor.style.height = '24px';
            cursor.style.background = 'transparent';
            cursor.style.border = '2px solid var(--neon-magenta)';
        });
        el.addEventListener('mouseleave', () => {
            cursor.style.width = '8px';
            cursor.style.height = '8px';
            cursor.style.background = '#00f3ff';
            cursor.style.border = 'none';
        });
    });
});