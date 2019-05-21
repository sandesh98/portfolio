@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel: true, autoplay: true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/brandinnederland/header.jpg') }})"
                     class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2018</div>
                            <div class="col-7">
                                <div class="label">Mei</div>
                                <h1 class="animatedText">Brand in Nederland</h1>
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
                        <img src="{{ asset('website/images/project/brandinnederland/preview.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Leuk side projectje waarbij er doormiddel van een api gezien kan worden waar er in Nederland
                            brand is
                        </p>
                        <a href="http://brandinnederland.nl/">brandinnderland.nl</a><br>
                        <a href="https://github.com/sandesh98/branden-in-vlaardingen">Github</a>
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
                            <div class="desc">2018</div>
                        </div>
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
                            <p>Het begon allemaal bij een domeinnaam. Martijn, Darrell en ik zaten te doppen over wat
                                een leuk projectje zou kunnen zijn waar we aan kunnen werken wanneer we niks te doen
                                hebben in onze vrije tijd. Na lang denken hebben we besloten om brandinnederland.nl te
                                kopen en heel simpel aan te geven waar in Nederland er brand is. We hebben nog de
                                grootste plannen om de website veel verder uit te breiden. </p>
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
                                        <li>Visual Studio Code</li>
                                        <li>Adobe XD</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Talen</span>
                                    <ul class="striped inside">
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>PHP</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Projectleden</span>
                                    <ul class="striped inside">
                                        <li>Darrell van de Bos</li>
                                        <li>Martijn Weerheijm</li>
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
                        <div class="vcenter link-container"><a href="{{ route('project.guess-and-win') }}"
                                                               class="prev-link">
                                <div class="project-title">Guess and Win</div>
                                <div class="link-title">Vorige project</div>
                            </a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.natraj-flyer') }}"
                                                                          class="next-link">
                                <div class="project-title">Dansacademie Natraj Flyer</div>
                                <div class="link-title">Volgende project</div>
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection