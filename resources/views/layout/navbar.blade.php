<header id="main-header">
    <div class="container">
        <div class="grid">
            <nav class="main-nav">
                <div class="responsive-nav">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <ul class="nav-links">
                    <li class="col-1 brand"><a href="{{ route('home.index') }}" style="font-weight: bolder; font-size: 1.3em; text-decoration: none;">Sandesh</a></li>
                    <li class="col-1"><a href="{{ route('project.index') }}" class="nav-link undefined">Project</a>
                    </li>
                    <li class="col-1 col-offset-1"><a href="{{ route('profile.index') }}" class="nav-link undefined">Profile</a>
                    </li>
                    <li class="col-1 col-offset-1"><a href="{{ route('contact.index') }}" class="nav-link undefined">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>