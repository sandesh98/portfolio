@extends('layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/sandeshboedhoe/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2016</div>
                            <div class="col-7">
                                <div class="label">November</div>
                                <h1 class="animatedText">Sandeshboedhoe.nl</h1>
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
                        <img src="{{ asset('website/images/project/sandeshboedhoe/preview.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Dit is de website waar het allemaal mee begon. Bij het maken van de website had ik de visie om verder te komen met behulp van mijn website. De website moet mij de mogelijkheid bieden om alle projecten die ik gemaakt heb zichtbaar te maken. Ook is het de bedoeling geweest om te kunnen solliciteren met alleen mijn website.</p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Maker</div>
                            <div class="desc">Sandesh Boedhoe</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Web</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Year</div>
                            <div class="desc">2016</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/sandeshboedhoe/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/sandeshboedhoe/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/sandeshboedhoe/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/sandeshboedhoe/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>De website waar het allemaal mee begon. Dit is mijn eerste portfolio website die ik helemaal zelfontworpen en gemaakt heb. Ook was het de eerste keer dat ik met domeinnamen en hostings ging spelen. Op het begin was het eng en lastig om alles werkend te krijgen maar met de hulp van Internet en klasgenoten hebben we alles werkend gekregen.</p>
                            <p>Het fijne aan de website is dat ik geen aparte CV hoef te maken aangezien alle gegevens op mijn website vermeld staan. Zo ik heb bijvoorbeeld gesolliciteerd bij Amac en stage kunnen regelen doormiddel van mijn website.</p>
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
                                        <li>Atom</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Talen</span>
                                    <ul class="striped inside">
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                        <li>Bootstrap</li>
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
                        <div class="vcenter link-container"><a href="{{ route('project.dutchdiner') }}" class="prev-link">
                                <div class="project-title">Dutch Diner</div>
                                <div class="link-title">Vorige project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.guess-and-win') }}" class="next-link">
                                <div class="project-title">Guess and Win</div>
                                <div class="link-title">Volgende project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection