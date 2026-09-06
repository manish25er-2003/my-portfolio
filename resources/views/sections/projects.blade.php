<section class="projects section-padding" id="projects">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">PROJECTS</span>
            <h2 class="section-title">Featured <span class="text-cyan">Projects</span></h2>
            <p class="section-subtitle">Some of the projects I have worked on and explored.</p>
        </div>

        <div class="projects-grid">
            @foreach($projects as $project)
                <div class="card project-card">
                    <div class="project-img-wrapper">
                        @if($project['featured'])
                            <span class="badge-featured">Featured</span>
                        @endif
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
                    </div>
                    <div class="project-body">
                        <h3>{{ $project['title'] }}</h3>
                        <p>{{ $project['description'] }}</p>

                        <div class="tech-pills">
                            @foreach($project['tags'] as $tag)
                                <span class="pill">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <div class="project-actions">
                            <a href="{{ $project['demo'] }}" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Live Demo
                            </a>
                            <a href="{{ $project['github'] }}" target="_blank" class="btn btn-secondary btn-sm">
                                <i class="fa-brands fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
