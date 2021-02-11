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
                        <img src="{{ asset('website/images/project/guessandwin/preview.jpg') }}" alt="Preview afbeelding">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Achraf, Max, Nick, Thomas en ik hebben een bordspel gemaakt voor ons eerste project. Het project had twee belangrijke eisen. Zo moesten wij gebruik maken van de Scrum methodiek en het bordspel moest een digitaal component bevatten.</p>
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
                            <p>Guess and Win heb ik in de tijd gemaakt waarin ik de opleiding Informatica op Hogeschool Rotterdam volgde. Uiteindelijk ben ik gestopt met de opleiding omdat ze mij niet beviel.</p>
                            <p>Vanuit de Hogeschool hebben wij de opdracht gekregen om een bordspel te maken. Dit mocht een huidig bordspel zijn of een eigen verzonnen bordspel. Wij hebben voor het bordspel 30 Seconds gekozen en onze eigen draai eraan gegeven. Wij hebben de goeie aspecten op een rijtje gezet en deze overgenomen naar ons eigen spel. Het concept van het bord hebben wij overgenomen samen met de pionnen, de speelkaarten en de dobbelsteen. Wij hebben onze eigen draai gegeven door zogenoemde special en powerup kaarten toe te voegen om het spel nog interessanter en spannender te maken. De kaarten kunnen in je voor- en nadeel werken.</p>
                            <p>De digitale component dat wij toegevoegd hebben is in de vorm van een website. De gebruiker kan het spel zonder speelkaarten, dobbelsteen en powerup kaarten spelen doormiddel van de website. De website houdt bij hoever iedereen is, toont de woorden die geraden moeten worden en verteld hoeveel stappen een team mag zetten nadat de dobbelsteen digitaal gedobbeld is.</p>
                            <p>Het spel hebben wij volledig uit kunnen werken en laten bedrukken door een drukkerij. Hierdoor zag het spel er professioneel uit. Maar vanwege tijdsnood hebben wij helaas geen doos kunnen maken waar alles netjes in past.</p>
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
