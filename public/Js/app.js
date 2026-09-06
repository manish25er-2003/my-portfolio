document.addEventListener("DOMContentLoaded", function() {
    const typewriterElement = document.getElementById("typewriter-text");
    const words = ["Full Stack Engineer", "Laravel Developer", "Backend Specialist", "Web Solution Architect"];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typeSpeed = 100;
    const eraseSpeed = 50;
    const delayBetweenWords = 1800;


    function typeEffect() {
        const currentWord = words[wordIndex];

        if (isDeleting) {
            typewriterElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typewriterElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        let currentSpeed = isDeleting ? eraseSpeed : typeSpeed;

        if (!isDeleting && charIndex === currentWord.length) {
            currentSpeed = delayBetweenWords;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            currentSpeed = 300;
        }

        setTimeout(typeEffect, currentSpeed);
    }

    if (typewriterElement) {
        typeEffect();
    }
});