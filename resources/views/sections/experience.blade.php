@php
    $experiences = [
        [
            'role' => 'Full Stack Developer',
            'company' => 'Binary Data Pvt.',
            'status' => 'Current',
            'type' => 'Full-time',
            'dates' => 'Dec 2025 – Present',
            'location' => 'India',
            'icon' => 'fa-laptop-code',
            'bullets' => [
                'Building and maintaining full-stack web applications using modern technologies.',
                'Developing RESTful APIs and integrating them with dynamic frontend interfaces.',
                'Collaborating with cross-functional teams to deliver production-ready features.',
                'Writing clean, scalable code following best practices and SOLID principles.'
            ],
            'tags' => ['Laravel', 'PHP', 'REST API', 'MySQL', 'JavaScript']
        ],
        [
            'role' => 'Backend Trainee',
            'company' => 'Baseline Technology',
            'status' => null,
            'type' => 'Training',
            'dates' => 'Aug 2025 – Nov 2025',
            'location' => 'India',
            'icon' => 'fa-chalkboard-user',
            'bullets' => [
                'Trained in backend development with focus on PHP and Laravel framework.',
                'Implemented authentication, authorization, and database-driven features.',
                'Contributed to internal projects and improved backend API response times.'
            ],
            'tags' => ['PHP', 'Laravel', 'MySQL', 'REST API']
        ],
        [
            'role' => 'Software Engineer Developer',
            'company' => 'Think Next Technology',
            'status' => null,
            'type' => 'Full-time',
            'dates' => 'Jan 2025 – Jul 2025',
            'location' => 'India',
            'icon' => 'fa-code',
            'bullets' => [
                'Developed and maintained web applications using PHP and Laravel.',
                'Built responsive frontend interfaces with HTML, CSS, Bootstrap, and JavaScript.',
                'Integrated third-party APIs and implemented core backend business logic.'
            ],
            'tags' => ['Laravel', 'PHP', 'JavaScript', 'Bootstrap', 'MySQL']
        ]
    ];
@endphp

<section class="experience-section" id="experience">
    <div class="experience-bg-glow"></div>

    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-badge">
                <i class="fa-solid fa-briefcase"></i> CAREER HISTORY
            </span>
            <h2 class="section-title">
                Work <span class="text-cyan text-glow">Experience</span>
            </h2>
            <p class="section-subtitle">
                My professional journey, technical roles, and software engineering milestones.
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="experience-timeline">
            <div class="timeline-line"></div>

            @if(isset($experiences) && count($experiences) > 0)
                @foreach($experiences as $exp)
                    <div class="experience-card-wrapper">
                        <!-- Node Icon -->
                        <div class="timeline-node">
                            <i class="fa-solid {{ $exp['icon'] }}"></i>
                        </div>

                        <!-- Glassmorphism Card -->
                        <div class="experience-card">
                            <div class="card-header">
                                <div class="role-group">
                                    <h3 class="exp-title">{{ $exp['role'] }}</h3>
                                    <div class="badge-group">
                                        @if($exp['status'])
                                            <span class="status-badge current">
                                                <span class="pulse-dot-green"></span> {{ $exp['status'] }}
                                            </span>
                                        @endif
                                        <span class="status-badge type">{{ $exp['type'] }}</span>
                                    </div>
                                </div>

                                <div class="exp-date">
                                    <i class="fa-regular fa-calendar-days"></i> {{ $exp['dates'] }}
                                </div>
                            </div>

                            <div class="exp-company-meta">
                                <span class="company-name">
                                    <i class="fa-solid fa-building-columns"></i> {{ $exp['company'] }}
                                </span>
                                <span class="location-name">
                                    <i class="fa-solid fa-location-dot"></i> {{ $exp['location'] }}
                                </span>
                            </div>

                            <ul class="exp-bullets">
                                @foreach($exp['bullets'] as $bullet)
                                    <li>
                                        <i class="fa-solid fa-angle-right bullet-icon"></i>
                                        <span>{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="exp-tags">
                                @foreach($exp['tags'] as $tag)
                                    <span class="tech-tag">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
