<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">GET IN TOUCH</span>
            <h2 class="section-title">Contact <span class="text-cyan">Me</span></h2>
            <p class="section-subtitle">Have a project in mind or want to collaborate? I'd love to hear from you.</p>
        </div>

        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="card contact-form-card">

                {{-- Flash Message Success Alert --}}
                @if(session('success'))
                    <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.3); color: #10b981; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name <span class="required">*</span></label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="John Doe" value="{{ old('name') }}" required>
                            @error('name') <span style="color: #ef4444; font-size: 12px;">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="john@example.com" value="{{ old('email') }}" required>
                            @error('email') <span style="color: #ef4444; font-size: 12px;">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="+91 00000 00000" value="{{ old('phone') }}">
                            @error('phone') <span style="color: #ef4444; font-size: 12px;">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" class="form-input" placeholder="Project Inquiry" value="{{ old('subject') }}" required>
                            @error('subject') <span style="color: #ef4444; font-size: 12px;">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" class="form-input" rows="5" placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
                        @error('message') <span style="color: #ef4444; font-size: 12px;">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-gradient btn-block">
                        <i class="fa-solid fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information Column -->
            <div class="contact-info-col">
                <!-- Email Card -->
                <div class="card contact-info-card">
                    <div class="icon-box">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <span class="info-label">EMAIL</span>
                        <p class="info-value">manishkumarssp50@gmail.com</p>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="card contact-info-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <span class="info-label">PHONE</span>
                        <p class="info-value">+91 70873 38600</p>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="card contact-info-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="info-content">
                        <span class="info-label">LOCATION</span>
                        <p class="info-value">Punjab, India</p>
                    </div>
                </div>

                <!-- Social Connect Card -->
                <div class="card contact-social-card">
                    <h4>Connect on Social Media</h4>
                    <div class="social-icons-row">
                        <a href="https://linkedin.com" target="_blank" class="social-box" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://github.com" target="_blank" class="social-box" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                        <a href="https://instagram.com" target="_blank" class="social-box" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://facebook.com" target="_blank" class="social-box" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank" class="social-box" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>

                <!-- Availability Card -->
                <div class="card contact-availability-card">
                    <h4>Available for Opportunities</h4>
                    <p>I'm currently open to freelance projects, full-time roles, and exciting collaborations. Response time is typically within 24 hours.</p>
                    <div class="availability-status">
                        <span class="status-dot"></span>
                        <span class="status-text">Available to work</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
