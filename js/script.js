document.addEventListener('DOMContentLoaded', () => {
    
    // 1. CURSORE CUSTOM CHE SEGUE IL MOUSE (Solo su Desktop con Hover)
    const cursor = document.querySelector('.custom-cursor');
    const enableCursor = cursor && !window.matchMedia('(hover: none)').matches && window.innerWidth > 1024;
    
    if (enableCursor) {
        document.documentElement.classList.add('custom-cursor-active');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Effetto ingrandimento sui link e pulsanti interattivi
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
    } else if (cursor) {
        cursor.style.display = 'none';
    }

    // 2. GESTIONE MENU HAMBURGER (Mobile)
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });

        // Chiudi il menu quando si clicca su un link di navigazione
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                nav.classList.remove('active');
            });
        });
    }
});
