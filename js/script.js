document.addEventListener('DOMContentLoaded', () => {
    
    // 1. CURSORE CUSTOM CHE SEGUE IL MOUSE
    const cursor = document.querySelector('.custom-cursor');
    
    if (cursor) {
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
    }
});
