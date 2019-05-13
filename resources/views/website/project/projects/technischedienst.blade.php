@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/technischedienst/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2017</div>
                            <div class="col-7">
                                <div class="label">September</div>
                                <h1 class="animatedText">Technische Dienst</h1>
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
                        <img src="{{ asset('website/images/project/technischedienst/preview.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Technische Dienst is een webapplicatie die ik uit eigen initiatief heb geschreven om het inname proces binnen Amac Spijkenisse een stuk makkelijker te maken. Wanneer klanten hun Apple product bij ons achterlaten is het fijn dat zij een formulier meekrijgen waarop alles zwart op wit staat.</p>
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
                            <div class="title">Jaar</div>
                            <div class="desc">2017</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/technischedienst/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/technischedienst/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/technischedienst/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/technischedienst/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>In september 2017 heb ik een webapplicatie gebouwd om een van de grootste frustraties te voorkomen op de werkvloer. Klanten komen langs met bijvoorbeeld hun iMac of Macbook om deze door ons te laten herstellen. Het herstellen van een Mac is niet in 5 minuten gedaan dus kiezen we er altijd voor om deze tijdelijk in te nemen. Bij het innemen is het zowel fijn voor ons als voor de klant om een afgifte bewijs te ontvangen waarop de gegevens van de klant, het product en aanvullende informatie vermeldt staan. </p>
                            <p>Een van de grootste ergernissen is dat de serviceformulieren altijd met de hand ingevuld moeten worden. Daarbij is er kans dat er essentiële gegevens onduidelijk geschreven worden. Wat we zelf meegemaakt hebben in Spijkenisse is dat serviceformulieren op mysterieuze wijzen verdwijnen, succes met het achterhalen van het probleem en de klant informeren.</p>
                            <p>Mijn oplossing voor dit probleem is een webapplicatie schrijven waarin serviceformulieren online opgeslagen worden zodat deze nooit kwijt raken en informatie altijd goed en duidelijk leesbaar zijn. In Spijkenisse gebruiken we het al bijna 2 jaar met succes! De applicatie heeft handige features die interne communicatie overzichtelijk houden. Helaas vanwege de privacywetgeving heb ik de applicatie offline moeten halen en alle data moeten verwijderen</p>
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
                        <div class="vcenter link-container text-right"><a href="{{ route('project.dutchdiner') }}" class="next-link">
                                <div class="project-title">Dutch Diner</div>
                                <div class="link-title">Volgende project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection