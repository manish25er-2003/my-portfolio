<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <!-- Brand Column -->
            <div class="footer-col footer-brand">
                <div class="footer-logo">
                    <span class="logo-badge">MK</span>
                    <span class="logo-text">Manish<span class="text-cyan">Kumar</span></span>
                </div>
                <p class="footer-desc">
                    Full Stack Laravel Developer crafting modern, scalable web applications with passion and precision.
                </p>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-col footer-links">
                <h4 class="footer-title">Quick Links</h4>
                <div class="footer-nav-grid">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#experience">Experience</a></li>
                    </ul>
                    <ul>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#hobbies">Hobbies</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Connect Column -->
            <div class="footer-col footer-social">
                <h4 class="footer-title">Connect</h4>
                <div class="social-box-grid">
                    <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn" class="social-box">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com" target="_blank" aria-label="GitHub" class="social-box">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="social-box">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="social-box">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="social-box">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-divider"></div>

        <!-- Bottom Footer Bar -->
        <div class="footer-bottom">
            <p class="footer-copy">&copy; {{ date('Y') }} Manish Kumar. All rights reserved.</p>
            <p class="footer-credit">Designed & Developed by <span class="text-cyan">Manish Kumar</span></p>
        </div>
    </div>
</footer>


<div class="whatsapp-wrapper">
    <!-- Chat Popup Window -->
    <div class="whatsapp-card" id="whatsappCard">
        <div class="card-header">
            <div class="header-icon">
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="header-text">
                <h3>Start a Conversation</h3>
                <p>Hi! Click below to chat on <strong>WhatsApp</strong></p>
            </div>
        </div>

        <div class="card-body">
            <p class="reply-time">The team typically replies in a few minutes.</p>

            <!-- Direct Chat Link for Manish -->
            <a href="https://wa.me/917087338600?text=hi%20manish" target="_blank" rel="noopener noreferrer" class="chat-member">
                <div class="member-avatar">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="member-info">
                    <h4>Manish</h4>
                    <p>Manish - Quick WhatsApp Chat</p>
                </div>
                <i class="fa-brands fa-whatsapp action-icon"></i>
            </a>
        </div>
    </div>

    <!-- Main Floating Button -->
    <button class="whatsapp-toggle-btn" id="whatsappToggleBtn" onclick="toggleWhatsAppCard()">
        <span class="btn-text" id="btnText">Need Help? <strong>Chat with us</strong></span>
        <div class="icon-circle">
            <i class="fa-brands fa-whatsapp" id="btnIcon"></i>
        </div>
    </button>
</div>
