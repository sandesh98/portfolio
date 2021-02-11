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
                            <p>Samen met mijn projectgroepje hebben wij onder leiding van Online Departement en Hogeschool Rotterdam het idee Sportmaatje uitgewerkt. Sportmaatje is tijdens een voorgaand project bedacht. Tijdens dit project hebben wij het idee opgepakt en uitgewerkt tot een concept. </p>
                            <p>Mijn rol binnen het team was Teamcaptain. Voor mij is een teamcaptain iemand die het overzicht en zijn hoofd koel moet blijven houden. Een teamcaptain heeft niet meer te zeggen dan de rest van het team.  Sportmaatje is een app voor ouderen, zowel man als vrouw, tussen de leeftijd 55 en 65 jaar oud die eenzaam zijn. De app is een middel om de drempel om sociale contacten met andere eenzame ouderen te verlagen. Door de verschillende functies van de app kunnen gebruikers nieuwe workouts ontdekken en nieuwe sportmaatjes leren kennen.</p>
                            <p>Ter voorbereiding van het concept zijn mijn team en ik eerst aan de slag gegaan met een kort onderzoek. Dit onderzoek bestond uit het afnemen van interviews bij de doelgroep om het onderzoek van het voorgaande project te kunnen bevestigen. Daarna zijn wij aan de slag gegaan met wireframes maken. Voor het structureren van de navigatie hebben wij de Cardsorting methode toegepast samen met de doelgroep. Wij hebben een goed beeld gekregen van een ideale Wireframe doordat wij deze veel hebben getoond aan de doelgroep. Vervolgens zijn we verder gemaakt met het ontwikkelen van een prototype. Hiervoor hebben wij in totaal vier iteraties doorlopen. De testen varieerde van AB-testen tot instructies laten uitvoeren. Tot slot moesten wij een videopresentatie maken en deze aan alle CMD-studenten en docenten tonen.</p>
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
