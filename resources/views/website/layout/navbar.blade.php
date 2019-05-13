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
                    <li class="col-1 brand"><a href="{{ route('home.index') }}" class="sandesh">Sandesh</a></li>
                    <li class="col-1"><a href="{{ route('project.index') }}" class="nav-link undefined {{ request()->is('project*') ? 'active' : '' }}">Projecten</a>
                    </li>
                    <li class="col-1 col-offset-1"><a href="{{ route('profile.index') }}" class="nav-link undefined {{ request()->is('profile') ? 'active' : '' }}">Profiel</a>
                    </li>
                    <li class="col-1 col-offset-1"><a href="{{ route('contact.index') }}" class="nav-link undefined {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>