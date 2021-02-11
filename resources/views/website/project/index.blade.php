@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="mb-xl">
            <div class="container mb-md">
                <div class="grid">
                    <div class="col-3">
                        <h2 class="grid-title">Projecten</h2>
                    </div>
                    <div class="col-5 text-right">
                        <nav id="filters">
                            <ul class="filters">
                                <li><a href="#" data-filter="grid-item" class="active filter">Alles</a></li>
                                <li><a href="#" data-filter="websites" class="filter">Websites</a></li>
                                <li><a href="#" data-filter="illustraties" class="filter">Illustraties</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="project-grid" class="masonry-grid">

                    <!-- Project -->
                    <a href="{{ route('project.abc-hulplijn') }}" class="illustraties grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/abchulplijn/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Schoolproject - ABC-Hulplijn</div>
                            <div class="subtitle">Prototype</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.pscateringservices') }}" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/pscateringservices/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">P.S. CateringServices</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.sportmaatje') }}" class="illustraties grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/sportmaatje/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Schoolproject - Sportmaatje</div>
                            <div class="subtitle">Prototype</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.de-cafe-koers') }}" class="illustraties grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/decafekoers/project-image.png') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Schoolproject - De Café Koers</div>
                            <div class="subtitle">Prototype</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.guess-and-win') }}" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/guessandwin/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Schoolproject - Guess and Win</div>
                            <div class="subtitle">Website + bordspel</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.natraj-flyer') }}" class="illustraties grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/natrajflyer/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Dansacademie Natraj</div>
                            <div class="subtitle">Flyer</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.dutchdiner') }}" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('website/images/project/dutchdiner/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Dutch Diner</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                </div>
            </div>
        </section>
    </div>
@endsection
