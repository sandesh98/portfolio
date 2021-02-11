@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel: true, autoplay: true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/abchulplijn/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2021</div>
                            <div class="col-7">
                                <div class="label">Februari</div>
                                <h1 class="animatedText">ABC-Hulplijn</h1>
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
                        <img src="{{ asset('website/images/project/abchulplijn/preview.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>ABC-Hulplijn is een concept speciaal voor middelbare scholieren met Dyslexie. De app zorgt ervoor dat zij zich zeker en tegelijkertijd zelfstandig voelen. De opdracht is bedacht door middelbare scholieren onder leiding van Hogeschool Rotterdam.</p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Illustratie</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Middelbare scholen</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Jaar</div>
                            <div class="desc">2021</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/abchulplijn/carousel/carousel-1.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/abchulplijn/carousel/carousel-2.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/abchulplijn/carousel/carousel-3.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/abchulplijn/carousel/carousel-4.png') }}"
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
                            <p>Mijn team en ik hebben de opdracht gekregen om de online leeromgeving tussen docenten en leerlingen doormiddel van digitale middelen optimaal te ondersteunen.</p>
                            <p>Eerst zijn we begonnen met het kiezen van een doelgroep. Door semigestructureerd interviews te houden met middelbare scholieren en deze resultaten de evalueren, hebben mijn team en ik een paar doelgroepen vast weten te stellen. Doormiddel van de Prefer Matrix methode is de doelgroep gevallen op middelbare scholieren met Dyslexie.</p>
                            <p>De volgende stap in ons ontwerpproces was het organiseren van gestructureerde interviews met middelbare scholieren met Dyslexie en deskresearch doen naar de doelgroep. Uit het onderzoek hebben wij veel interessante punten weten te achterhalen. Zo zijn wij erachter gekomen dat Dyslexie erfelijk kan zijn en dat scholen veel middelen biedt aan de doelgroep. Maar er zijn ook een paar negatieve punten naar boven gekomen. Zo ligt de werkdruk hoger op docenten omdat zij meer tijd moeten besteden aan leerlingen met Dyslexie.De leerlingen durven vaak geen vragen te stellen omdat zij zich onzeker voelen.</p>
                            <p>Vervolgens zijn wij aan de slag gegaan het maken van wireframes in Figma. Deze wireframes hebben wij AB-getest bij de doelgroep. En van wireframe zijn wij itererend overgegeaan naar een high-fidelity prototype. </p>
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
                                        <li>Figma</li>
                                        <li>Miro</li>
                                        <li>Trello</li>
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
                        <div class="vcenter link-container"><a href="{{ route('project.guess-and-win') }}" class="prev-link">
                                <div class="project-title">Guess and Win</div>
                                <div class="link-title">Vorige project</div>
                            </a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.csr') }}"
                                                                          class="next-link">
                                <div class="project-title">CSR</div>
                                <div class="link-title">Volgende project</div>
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
