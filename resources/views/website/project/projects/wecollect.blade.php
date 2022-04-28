@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel: true, autoplay: true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/wecollect/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2022</div>
                            <div class="col-7">
                                <div class="label">April</div>
                                <h1 class="animatedText">WECOLLECT</h1>
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
                        <img src="{{ asset('website/images/project/wecollect/preview.png') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Wecollect geeft consumenten een overzicht van al hun actieve en inactieve apparaten die aangesloten staat op hun wifi-netwerk. Vanuit hier biedt de app verschillende mogelijkheden om hun apparaat op een verantwoorde manier te scheiden. Zo krijgen consumenten meer grip op de mogelijkheden om oud elektronica te deponeren.</p>
                        <a href="https://www.figma.com/proto/KQyJs4PdYRHh4WRAvIbTPx/Final-product?page-id=7%3A3&node-id=43%3A785&viewport=241%2C48%2C0.36&scaling=scale-down&starting-point-node-id=43%3A785" target="_blank">Link naar Figma prototype</a>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Illustratie</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Sandesh Boedhoe</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Jaar</div>
                            <div class="desc">2022</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/wecollect/carousel/carousel-1.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/wecollect/carousel/carousel-2.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/wecollect/carousel/carousel-3.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/wecollect/carousel/carousel-4.jpg') }}"
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
                            <p>Mijn team en ik hebben de opdracht gekregen om de online leeromgeving tussen docenten en leerlingen doormiddel van digitale middelen optimaal te ondersteunen. Mijn rol binnen het team was de teamcaptain. Ik heb voornamelijk voor het ontwerpproces gezorgd, interviews afgenomen en meegeholpen met het maken van beroepsproducten.</p>
                            <p>Eerst zijn we begonnen met het kiezen van een doelgroep. Door semigestructureerd interviews te houden met middelbare scholieren en deze resultaten de evalueren, zijn mijn team en ik op een paar doelgroepen gestrand. Deze waren leerlingen met Dyslexie, leerlingen met een leerachterstand, leerlingen die ervan houden om met hun handen te werken en tot slot leerlingen met ADHD. Doormiddel van de Prefer Matrix methode is de doelgroep gevallen op middelbare scholieren met Dyslexie.</p>
                            <p>De volgende stap in ons ontwerpproces was het organiseren van gestructureerde interviews met middelbare scholieren met Dyslexie en deskresearch doen naar de doelgroep. Ik heb er toen voor gekozen om mijn nichtjes en neefjes te interviewen aangezien zij in de Corona tijd makkelijk te benaderen waren. Uit het onderzoek hebben wij veel interessante punten weten te achterhalen. Zo zijn wij erachter gekomen dat Dyslexie erfelijk kan zijn en dat scholen veel middelen biedt aan de doelgroep. Maar er zijn ook een paar negatieve punten naar boven gekomen. Zo ligt de werkdruk hoger op docenten omdat zij meer tijd moeten besteden aan leerlingen met Dyslexie. De leerlingen durven vaak geen vragen te stellen omdat zij zich onzeker voelen.</p>
                            <p>Vervolgens hebben wij gepland om diepgaande interviews te houden om het onderzoek dat na de semigestructureerde interviews te bevestigen of juist te ontkrachten. Ook hiervoor heb ik mijn nichtje benaderd die valt in onze Persona.</p>
                            <p>Na een veelheid aan informatie op een rijtje gezet te hebben zijn wij aan de slag gegaan met het opstellen van Design Principles en Design Requirements. Hierbij kan je voorstellen dat het product ondersteuning moet bieden aan kinderen met Dyslexie.</p>
                            <p>Vervolgens zijn wij aan de slag gegaan het maken van wireframes in Figma. Deze wireframes hebben ik AB-getest bij de doelgroep. En van wireframe zijn wij itererend overgegaan naar een high-fidelity prototype.</p>
                            <p>Het eindproduct is een prototype met drie functies.</p>
                            <ol class="ol-list-info">
                                <li>De eerste functie is de persoonlijke spraak assistent. De functie zorgt ervoor dat de leerling een vraag kan stellen aan de assistent. De assistent geeft hier vervolgens antwoord op.</li>
                                <li>De tweede functie is de spellingscontrole. Hier kan de leerling een woord in tikken zoals hij of zij denkt dat deze geschreven moet worden. De spellingscontrole corrigeert de fout en laat het betekenis zien van het woord.</li>
                                <li>De laatste functie is de nakijker. Programma’s zoals Word arceren fout geschreven woorden. Echter is er geen spellingscontrole wanneer iets met pen en papier wordt geschreven. Met de nakijker scant de leerling een stuk geschreven tekst en de functie arceert spelfouten.</li>
                            </ol>
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
                                        <li>Adobe Illustrator</li>
                                        <li>Apple Keynote</li>
                                        <li>Figma</li>
                                        <li>Miro</li>
                                        <li>Trello</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Methodes</span>
                                    <ul class="striped inside">
                                        <li>Deskresearch</li>
                                        <li>Destep Context Map</li>
                                        <li>Statements Cards</li>
                                        <li>Google Form onderzoek</li>
                                        <li>Creatieve sessie H.G. Wells</li>
                                        <li>Pecha Kucka presentatie</li>
                                        <li>Reframing</li>
                                        <li>Ontwerprichtlijnen</li>
                                        <li>Stakeholder Map</li>
                                        <li>Conclusie</li>
                                        <li>Overbrug het gat methode</li>
                                        <li>Sitemap</li>
                                        <li>Moodboard</li>
                                        <li>Wireframe</li>
                                        <li>Testplan</li>
                                        <li>Prototype</li>
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
                            <a href="{{ route('project.dutchdiner') }}" class="prev-link">
                                <div class="project-title">Dutch Diner</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right">
                            <a href="{{ route('project.pscateringservices') }}" class="next-link">
                                <div class="project-title">P.S. Catering Services</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
