document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle & Icon Switcher
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    if (hamburger && navLinks) {
        const hamburgerIcon = hamburger.querySelector('i');

        // Toggle mobile menu open/close
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');

            // Switch icon between bars and close 'X'
            if (hamburgerIcon) {
                if (navLinks.classList.contains('active')) {
                    hamburgerIcon.classList.remove('fa-bars');
                    hamburgerIcon.classList.add('fa-xmark');
                } else {
                    hamburgerIcon.classList.remove('fa-xmark');
                    hamburgerIcon.classList.add('fa-bars');
                }
            }
        });

        // Auto-close menu when a navigation link is clicked
        const navItemsList = navLinks.querySelectorAll('.nav-link');
        navItemsList.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('active');
                if (hamburgerIcon) {
                    hamburgerIcon.classList.remove('fa-xmark');
                    hamburgerIcon.classList.add('fa-bars');
                }
            });
        });
    }

    // 2. Active Navigation Section Detection on Scroll
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (window.pageYOffset >= (sectionTop - 160)) {
                current = section.getAttribute('id');
            }
        });

        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href') === `#${current}`) {
                item.classList.add('active');
            }
        });
    });

    // 3. Skill Bars Animation on Viewport Intersection
    const skillSection = document.getElementById('skills');
    const progressBars = document.querySelectorAll('.progress');
    let animatedSkills = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animatedSkills) {
                progressBars.forEach(bar => {
                    const targetWidth = bar.getAttribute('data-progress');
                    bar.style.width = targetWidth;
                });
                animatedSkills = true;
            }
        });
    }, { threshold: 0.2 });

    if (skillSection) {
        observer.observe(skillSection);
    }

    // 4. Animated Counter Stats
    const statNums = document.querySelectorAll(".stat-num");

    statNums.forEach((stat) => {
        const target = parseInt(stat.getAttribute("data-count"), 10);
        const suffix = stat.getAttribute("data-suffix") || "";

        if (isNaN(target)) return;

        let count = 0;
        const duration = 1500; // Animation speed in ms
        const stepTime = 30;
        const steps = duration / stepTime;
        const increment = target / steps;

        const timer = setInterval(() => {
            count += increment;
            if (count >= target) {
                stat.innerText = target + suffix;
                clearInterval(timer);
            } else {
                stat.innerText = Math.floor(count) + suffix;
            }
        }, stepTime);
    });
});

// 5. WhatsApp Widget Popup Toggle
function toggleWhatsAppCard() {
    const card = document.getElementById('whatsappCard');
    const icon = document.getElementById('btnIcon');
    const text = document.getElementById('btnText');

    if (!card) return;

    if (card.style.display === 'block') {
        card.style.display = 'none';
        if (icon) icon.className = 'fa-brands fa-whatsapp';
        if (text) text.style.display = 'inline-block';
    } else {
        card.style.display = 'block';
        if (icon) icon.className = 'fa-solid fa-xmark';
        if (text) text.style.display = 'none';
    }
}
