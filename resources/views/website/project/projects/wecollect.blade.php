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
                            <p>Tijdens dit project was ik zelf de baas over het project. Ik mocht namelijk het onderwerp en de uitwerking bepalen. Met dit project wil ik het begrip e-waste naar boven brengen en mensen meer grip geven op wat zij kunnen met hun oude elektronische apparaten kunnen doen. Veel vrienden, familie maar ook klanten die ik gesproken heb, hebben namelijk geen idee wat zij met deze apparaten kunnen doen.</p>
                            <p>Daarom luidt mijn ontwerpvraag:<br>
                                <i class="text-muted">”Hoe kunnen consumenten meer inzicht krijgen op hun niet gebruikte elektronische apparaten en daarbij geïnstrueerd worden om deze apparaten te laten recyclen?”</i>
                            </p>
                            <p>Eerst ben ik begonnen met deskresearch doen aan de hand van een paar vragen die ik van tevoren had bedacht. Tijdens het onderzoek kwamen erg interessante punten naar boven: Zo is de leeftijd waarop kinderen een telefoon krijgen steeds jonger en jonger en dat ongeveer 10% van alle e-waste tussen het grofvuil beland omdat mensen simpelweg niet weten wat zij met deze apparaten kunnen doen. Deze inzichten heb ik samen met andere inzichten die bijvoorbeeld ook uit mijn Google Form zijn gekomen verwerkt in Statement Cards.</p>
                            <p>Tijdens het project heb ik samen met een paar klasgenoten een aantal creatieve brainstormsessies (methode van H.G Wells, tijdmachine) gedaan om tot een veelheid aan ideeën te komen. Vervolgens heb ik samen met deze klasgenoot het beste idee gekozen. Om eens goed na te denken over de stappen die ik moet doorlopen om het idee tot een werkelijkheid te maken ben ik in contact geraakt met een Bedrijfskunde student. Samen met haar heb ik de methode: Overbrug het gat, uitgevoerd om na te denken over deze stappen.</p>
                            <p>Het concept:<br>
                                Uit eindelijk ben ik tot het concept Wecollect gekomen. Aan de hand van een netwerk scan kunnen consumenten inzichtelijk krijgen welke apparaten actief en inactief zijn op hun netwerk. Wanneer zij op een apparaat drukken zien zij informatie over het apparaat en wat de mogelijkheden zijn om het apparaat op een verantwoorde manier weg te doen. Na de opties bekeken te hebben als een consument ligt het balletje wel bij hen om vervolgens de stap te nemen om het product daadwerkelijk weg te doen. De stappen die men kan ondernemen zijn als volgt:
                            </p>
                            <ul>
                                <li class="text-muted">Het product inleveren bij een e-waste punt in de buurt.</li>
                                <li class="text-muted">Een inruil punt vinden om het product te brengen en verkopen.</li>
                                <li class="text-muted">Het product verkopen via bijvoorbeeld Marktplaats en Facebook.</li>
                                <li class="text-muted">Instructies om het product terug te zetten naar fabrieksinstellingen.</li>

                            </ul>

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
                                        <li>Adobe Indesign</li>
                                        <li>Apple Keynote</li>
                                        <li>Figma</li>
                                        <li>Miro</li>
                                        <li>Trello</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="head">
                            <div class="title">Methodes</div>
                        </div>
                        <div class="body">
                            <div class="grid">
                                <div class="col-2"><span class="label">Connect</span>
                                    <ul class="striped inside">
                                        <li>Deskresearch</li>
                                        <li>Destep Context Map</li>
                                        <li>Statements Cards</li>
                                        <li>Google Form onderzoek</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Concept</span>
                                    <ul class="striped inside">
                                        <li>Creatieve sessie H.G. Wells</li>
                                        <li>Pecha Kucka presentatie</li>
                                        <li>Reframing</li>
                                        <li>Ontwerprichtlijnen</li>
                                        <li>Stakeholder Map</li>
                                        <li>Persona</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Create</span>
                                    <ul class="striped inside">
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
                            <a href="{{ route('project.superspeurders') }}" class="next-link">
                                <div class="project-title">Superspeurders</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
