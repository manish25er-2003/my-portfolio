<section class="hero" id="home">
    <div class="hero-bg-glow glow-cyan"></div>

    <div class="container hero-container">
        <!-- Left Content Column -->
        <div class="hero-content">
            <div class="badge-pill">
                <span class="pulse-dot"></span> Available for new opportunities
            </div>

            <!-- Static Role Title -->
            <div class="hero-role">
                Hello, I'm a <span class="text-cyan">Software Engineer</span>
            </div>

            <h1 class="hero-title">
                Manish <span class="text-cyan text-glow">Kumar</span>
            </h1>

            <h2 class="hero-subtitle">
                Crafting scalable web applications & APIs
            </h2>

            <p class="hero-text">
                Full-stack developer focused on building elegant digital experiences, robust backend systems, and scalable web solutions people love to use.
            </p>

            <!-- Action Buttons: View Work, Contact Me, and Resume -->
            <div class="hero-actions">
                <a href="#projects" class="btn btn-cyan">
                    View my work <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
                <a href="#contact" class="btn btn-secondary">
                    Contact Me <i class="fa-solid fa-paper-plane"></i>
                </a>
                <a href="{{ asset('resume.pdf') }}" target="_blank" class="btn btn-outline">
                    Resume <i class="fa-solid fa-download"></i>
                </a>
            </div>

            <div class="hero-meta">
                <span class="meta-item"><i class="fa-solid fa-location-dot"></i> Based in India</span>
                <span class="meta-divider">/</span>
                <span class="meta-item"><i class="fa-solid fa-code"></i> Open to remote</span>
            </div>
        </div>

        <!-- Right Portrait Card Column -->
        <div class="hero-image-col">
            <div class="portrait-card-wrapper">

                <div class="portrait-card">
                    <img src="{{ asset('images/myimg.jpg') }}" alt="Manish Kumar" class="portrait-img">

                    <!-- Inner Top Badge -->
                    <div class="inner-badge">
                        <span class="pulse-dot-cyan"></span> building in public
                    </div>

                    <!-- Inner Bottom Overlay -->
                    <div class="inner-overlay-text">
                        Projects with purpose
                    </div>
                </div>

                <!-- Floating Badge: Top Right -->
                <div class="glass-badge badge-tr">
                    <i class="fa-solid fa-wand-magic-sparkles text-cyan"></i>
                    <div class="badge-text-group">
                        <strong class="badge-num">1+</strong>
                        <span class="badge-sub">Years experience</span>
                    </div>
                </div>

                <!-- Floating Badge: Bottom Left -->
                <div class="glass-badge badge-bl">
                    <div class="badge-avatar-icon">M</div>
                    <div class="badge-text-group">
                        <strong class="badge-title">Open to collaborate</strong>
                        <span class="badge-sub">Let's build something great</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
