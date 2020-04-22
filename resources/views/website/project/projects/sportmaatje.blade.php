@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/sportmaatje/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2020</div>
                            <div class="col-7">
                                <div class="label">April</div>
                                <h1 class="animatedText">Sportmaatje</h1>
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
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/S5715C7ddG4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Sportmaatje is een app speciaal voor eenzame ouderen tussen de leeftijd 55 en 65 jaar oud. De app moet ouderen stimuleren om een maatje te vinden en vervolgens met de maatje af te spreken om te gaan sportenx</p>
                        <a href="https://github.com/sandesh98/Guess-and-Win" target="_blank">Link naar Adobe XD</a>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Prototype</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">online department</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Jaar</div>
                            <div class="desc">2020</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Onder leiding van</div>
                            <div class="desc">Hogeschool Rotterdam</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/sportmaatje/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/sportmaatje/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/sportmaatje/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/sportmaatje/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>Sportmaatje is een app voor ouderen, zowel man als vrouw, tussen de leeftijd 55 en 65 jaar oud die eenzaam zijn. De app is een middel om de drempel om sociale contacten met andere te verlagen.</p>
                            <p>De gebruiker maakt gemakkelijk een account in de Sportmaatjes app en heeft direct toegang tot velen functies. Zo kan de gebruiker maatjes vinden op basis van gedeelte interesses en deelnemen aan groepsevenementen om nieuwe maatjes en workouts te ontdekken. Ook kan de gebruiker gemakkelijk een workout inplannen met een maatje. Om de sociale contacten met dat maatje te behouden kan de gebruiker gebruik maken van de herhaal functie waarin de twee maatjes dezelfde workout nog een keer inplannen op een later moment. Wanneer de gebruiker klaar is met sporten kunnen ze de app nog steeds gebruiken voor de socials sectie waarin ze inspiratie op kunnen doen over bijvoorbeeld een gezonder levensstijl.</p>
                            <p>Mijn teamgenoten en ik hebben deze prototype kunnen maken door veel te onderzoeken en veel te testen bij ons doelgroep.</p>
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
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Projectleden</span>
                                    <ul class="striped inside">
                                        <li>Anne Bruin</li>
                                        <li>Sandesh Boedhoe</li>
                                        <li>Seyda Kocaer</li>
                                        <li>Tristan Bijl</li>
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
                        <div class="vcenter link-container"><a href="{{ route('project.sandesh') }}" class="prev-link">
                                <div class="project-title">Personal website</div>
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
