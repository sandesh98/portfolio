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
                        <p>Sportmaatje is een app speciaal voor eenzame ouderen tussen de leeftijd 55 en 65 jaar oud. De app moet ouderen stimuleren om een maatje te vinden en vervolgens met de maatje af te spreken om te gaan sporten.</p>
                        <a href="https://xd.adobe.com/view/637c77ce-6377-4cad-5b3b-3fb5003b6987-154d/" target="_blank">Link naar Adobe XD</a>
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
                            <p>Mijn groep en ik hebben onder leiding van Online Departement en Hogeschool Rotterdam het idee Sportmaatje uitgewerkt tot een clickable prototype. Het idee is tijdens een voorgaand project bedacht. Aan ons om concept te kiezen en deze verder uit te werken.</p>
                            <p>Ik was de teamcaptain binnen het project. Voor mij is een teamcaptain iemand die het overzicht en zijn hoofd koel moet blijven houden. Een teamcaptain heeft niet meer te zeggen dan de rest van het team.</p>
                            <p>Het concept Sportmaatje is tijdens een voorgaand project bedacht, net als vele andere concepten. Allereerst hebben wij een conceptkeuze moeten maken doormiddel van een Prefix Matrix methode. Op basis van criteria zoals het risico, de effort en het gevoel is de keuze gevallen op Sportmaatje. Vervolgens hebben wij het onderzoek van sportmaatje doorgenomen en een interview opgesteld bij de doelgroep om de inzichten uit dat onderzoek te bevestigen. Mijn taak hierin was om een interviewplan op te stellen waarin zaken staan zoals de doelgroep, de vragen en wat voor soort interview het gaat worden. In dit geval was het een gestructureerd interview.</p>
                            <p>Samen met onderzoeken zijn we ook aan de slag gegaan met een co-creatie sessie. Deze sessie hebben wij kunnen doen met Hogeschool Maastricht. Mijn rol hierin was om de sessie voor te bereiden en te verzorgen. Mijn teamgenoten hebben geobserveerd en foto’s gemaakt. Na vele ideeën opgedaan te hebben, zijn deze gefilterd doormiddel van dotvoting.</p>
                            <p>Vervolgens zij wij aan de slag gegaan met een low-fid prototype. Deze hebben wij op papier gemaakt en getest bij de doelgroep. Itererend zijn wij verdergegaan met een low-prototype naar een high-fidality in Adobe XD. In totaal hebben wij 4 iteraties gehad voordat het project voorbij was. Mijn rol bij elke iteratie was het verzorgen van een testplan en een groepsopdracht was om de testen uit te voeren. Elke week kwamen wij bij elkaar om de resultaten te bespreken en aan de hand van de Design Principles en Guidelines te kijken wat de volgende aanpassingen zijn.</p>
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
                                        <li>Adobe Premiere</li>
                                        <li>Microsoft Teams</li>
                                        <li>Miro</li>
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
                        <div class="vcenter link-container">
                            <a href="{{ route('project.pscateringservices') }}" class="prev-link">
                                <div class="project-title">P.S. Catering Services</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.guess-and-win') }}" class="next-link">
                                <div class="project-title">Guess and Win</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
