@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/guessandwin/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2019</div>
                            <div class="col-7">
                                <div class="label">Januari</div>
                                <h1 class="animatedText">Guess and Win</h1>
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
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/5ncVYaM9XRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Achraf, Max, Nick, Sandesh en Thomas hebben een bordspel gemaakt voor ons eerste project. Het was de bedoeling dat je in het project met behulp van Scrum methodiek een bordspel ging maken. Dat is gelukt dus toen moesten we een soort reclamefilmpje en/of uitlegfilmpje maken om het te promoten en soort van ui te leggen. Dat is deze video geworden!</p>
                        <a href="https://github.com/sandesh98/Guess-and-Win" target="_blank">Link naar Github</a>
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
                            <li class="slide"><img src="{{ asset('website/images/project/guessandwin/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/guessandwin/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/guessandwin/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/guessandwin/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>Een van de onderdelen op de Hogeschool Rotterdam is projecten maken. We hebben de opdracht gekregen om een bordspel te maken. Of het nou een bestaand of nieuw bordspel is maakte de opdrachtgever niet veel uit. Wat wel belangrijk was is dat het spel een digitaal component moest bevatten. Het lastigste van het project is dat het spel ook speelbaar moet zijn zonder de digitale component. </p>
                            <p>Mijn projectleden en ik hebben ervoor gekozen om het bekende spel 30 Seconds na te maken en onze eigen draai eraan te geven. Het bord, de kaarten, de dobbelsteen, de pionnen en het concept hebben overgenomen uit het originele spel. Onze eigen draai bevatten special en powerup kaarten die ervoor zorgen dat het spel nog spannender wordt. De kaarten kunnen in jou voor en/of nadeel uitkomen.</p>
                            <p>De digitale component vervangt alles behalve de pionnen en bordspel. Voor de rest gaan beurten, kaarten en pionnen doormiddel van het digitale component.</p>
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
                                        <li>Terminal</li>
                                        <li>Slack</li>
                                        <li>Adobe Photoshop</li>
                                        <li>Adobe Illustrator</li>
                                        <li>Adobe Premiere</li>
                                        <li>Adobe XD</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Talen</span>
                                    <ul class="striped inside">
                                        <li>Vue</li>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Bootstrap</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Projectleden</span>
                                    <ul class="striped inside">
                                        <li>Achraf Chettou</li>
                                        <li>Max de Bruin</li>
                                        <li>Nick Arema</li>
                                        <li>Sandesh Boedhoe</li>
                                        <li>Thomas van de Bovenkamp</li>
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
                        <div class="vcenter link-container"><a href="{{ route('project.sportmaatje') }}" class="prev-link">
                                <div class="project-title">Sportmaatje</div>
                                <div class="link-title">Vorige project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.de-cafe-koers') }}" class="next-link">
                                <div class="project-title">De Café Koers</div>
                                <div class="link-title">Volgende project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
