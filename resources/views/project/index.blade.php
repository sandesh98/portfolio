@extends('layout.master')

@section('main')
    <div id="inner">
        <section class="mb-xl">
            <div class="container mb-md">
                <div class="grid">
                    <div class="col-3">
                        <h2 class="grid-title">Projects</h2>
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
                    <a href="{{ route('project.csr') }}" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('images/project/csr/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">AA4CSR</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.natraj-flyer') }}" class="illustraties grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('images/project/natrajflyer/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Dansacademie Natraj</div>
                            <div class="subtitle">Flyer</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="project-single.html" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('images/project/technischedienst/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Technische Dienst</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="project-single.html" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('images/project/dutchdiner/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Dutch Diner meent</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.chefmarketing') }}" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('images/project/chefmarketing/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Chefmarketing</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="{{ route('project.sandesh') }}" class="websites grid-item col-8">
                        <div class="thumb">
                            <img src="{{ asset('images/project/sandeshboedhoe/project-image.jpg') }}">
                        </div>
                        <div class="caption">
                            <div class="title">Personal Website</div>
                            <div class="subtitle">Website</div>
                        </div>
                    </a>

                </div>
            </div>
        </section>
    </div>
@endsection