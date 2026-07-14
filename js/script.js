document.addEventListener('DOMContentLoaded', () => {
    
    // 1. PAGE NAVIGATION ANIMATION
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.page-section');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const targetPage = link.getAttribute('data-page');

            // Remove active class from all links
            links.forEach(l => l.classList.remove('active'));
            // Add to clicked link
            link.classList.add('active');

            // Change section with hardware fade animation
            sections.forEach(section => {
                if (section.getAttribute('id') === targetPage) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        });
    });

    // 2. CUSTOM CURSOR FOLLOWING MOUSE
    const cursor = document.querySelector('.custom-cursor');
    
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // Hover enlarge effect on interactive elements
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
