document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
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

    //document.addEventListener("DOMContentLoaded", () => {
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


function toggleWhatsAppCard() {
    const card = document.getElementById('whatsappCard');
    const icon = document.getElementById('btnIcon');
    const text = document.getElementById('btnText');

    if (card.style.display === 'block') {
        card.style.display = 'none';
        icon.className = 'fa-brands fa-whatsapp';
        text.style.display = 'inline-block';
    } else {
        card.style.display = 'block';
        icon.className = 'fa-solid fa-xmark'; // Changes to 'X' close icon
        text.style.display = 'none'; // Hides text prompt when card is open
    }
}
