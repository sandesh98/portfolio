@extends('layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('images/project/guessandwin/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2019</div>
                            <div class="col-7">
                                <div class="label">Januari</div>
                                <h1 class="animatedText">Guess and Win</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-6 col-offset-1">
                        <div class="video-frame mb-xl">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/5ncVYaM9XRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Achraf, Max, Nick, Sandesh en Thomas hebben een bordspel gemaakt voor ons eerste project. Het was de bedoeling dat je in het project met behulp van Scrum methodiek een bordspel ging maken. Dat is gelukt dus toen moesten we een soort reclamefilmpje en/of uitlegfilmpje maken om het te promoten en soort van ui te leggen. Dat is deze video geworden!</p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Web</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Hogeschool Rotterdam</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Jaar</div>
                            <div class="desc">2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <div class="grid content">
                    <div id="img-carousel" class="titanSlider">
                        <ul class="slides">
                            <li class="slide"><img src="{{ asset('images/project/guessandwin/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/guessandwin/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/guessandwin/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/guessandwin/carousel/carousel-4.jpg') }}" class="fw"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <ul class="accordion">
                    <li class="active">
                        <div class="head">
                            <div class="title">Meer informatie</div>
                        </div>
                        <div class="body">
                            <p>Aanvullende informatie over het project</p>
                        </div>
                    </li>
                    <li>
                        <div class="head">
                            <div class="title">Tools</div>
                        </div>
                        <div class="body">
                            <div class="grid">
                                <div class="col-2"><span class="label">Programma's</span>
                                    <ul class="striped inside">
                                        <li>PHPStorm</li>
                                        <li>Trello</li>
                                        <li>Sequel Pro</li>
                                        <li>Terminal</li>
                                        <li>Slack</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Talen</span>
                                    <ul class="striped inside">
                                        <li>PHP</li>
                                        <li>Laravel</li>
                                        <li>HTML</li>
                                        <li>CSS / Sass</li>
                                        <li>Javascript / jQuery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="prev-next-container mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-4">
                        <div class="vcenter link-container"><a href="{{ route('project.natraj-flyer') }}" class="prev-link">
                                <div class="project-title">Dansacademie Natraj Flyer</div>
                                <div class="link-title">Vorige project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="" class="next-link">
                                <div class="project-title">Dutch Diner</div>
                                <div class="link-title">Volgende project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection