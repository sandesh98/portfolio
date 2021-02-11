@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel: true, autoplay: true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/decafekoers/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2019</div>
                            <div class="col-7">
                                <div class="label">Oktober</div>
                                <h1 class="animatedText">De Café Koers</h1>
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
                        <img src="{{ asset('website/images/project/decafekoers/preview.png') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Kick-off project voor alle eerstejaars CMD-studenten van de Hogeschool Rotterdam. We kregen de opdracht om een spel voor andere eerstejaars studenten te verzinnen zodat ze elkaar en de school beter leren kennen.</p>
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
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-1.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-2.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-3.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-4.png') }}"
                                                   class="fw"></li>
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
                            <p>Hogeschool Rotterdam heeft ons de opdracht gegeven om onderzoek te doen naar een andere opleiding en een spel te verzinnen voor eerstejaars studenten zodat ze niet alleen elkaar maar ook de school leren kennen tijden de introductieweek. Doormiddel van verschillende onderzoeken en het bijwonen van workshops heb ik kennis opgedaan om het ideale spel voor deze studenten te verzinnen.</p>
                            <p>Samen met mijn projectgroep hebben we voor eerstejaars bedrijfskunde studenten gekozen. Het spel dat we verzonnen hebben heet: De Café Koers. De bedoeling is om van café naar café te gaan en daar een pitching game te spelen. Er zijn twee kaarten die tegelijkertijd getrokken moeten worden, en het is de bedoeling om een product of dienst te verzinnen van de combinatie kaarten. Vervolgens is het de bedoeling om het verzonnen idee te pitchen aan de groep. </p>
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
                                        <li>Adobe XD</li>
                                        <li>Adobe Illustrator</li>
                                        <li>Adobe Photoshop</li>
                                        <li>Trello</li>
                                        <li>Slack</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Projectleden</span>
                                    <ul class="striped inside">
                                        <li>Daniel Guseinov</li>
                                        <li>Henri van der Stelt</li>
                                        <li>Ravelli Winklaar</li>
                                        <li>Sandesh Boedhoe</li>
                                        <li>Volkan Bakar</li>
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
                        <div class="vcenter link-container">
                            <a href="{{ route('project.guess-and-win') }}" class="prev-link">
                                <div class="project-title">Guess and Win</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right">
                            <a href="{{ route('project.natraj-flyer') }}" class="next-link">
                                <div class="project-title">Dansacademie Natraj Flyer</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
