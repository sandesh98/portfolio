@extends('layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('images/project/dutchdiner/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2017</div>
                            <div class="col-7">
                                <div class="label">Maart</div>
                                <h1 class="animatedText">Dutch Diner Meent</h1>
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
                        {{--                        <div class="video-frame mb-xl">--}}
                        <img src="{{ asset('images/project/dutchdiner/preview.jpg') }}" alt="">
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Het maken van de website voor Dutch Diner Meent was een van mijn stage opdrachten bij Collab Group. De website is geheel in wordpress gemaakt zodat het voor de eigenaar makkelijk is om wijzigingen aan te brengen.</p>
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
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Collab Group</div>
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
                            <li class="slide"><img src="{{ asset('images/project/dutchdiner/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/dutchdiner/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/dutchdiner/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/dutchdiner/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>Dutch Diner serveert overheerlijke poffertjes en pannenkoeken, bereid op ambachtelijke wijze. Al jarenlang is ons pannenkoekenrestaurant een begrip in Rotterdam. Generatie op generatie geniet van onze nostalgische lekkernijen. Naast onze specialiteiten bieden wij burgers, broodjes, saté of een lekkere uitsmijter. Voor ieder wat wils dus. Bekijk voor meer informatie ons menu.</p>
                            <p>Wie Rotterdam kent, kent ons mooie en unieke pand aan de Meent. Het staat er na vele jaren nog prachtig bij. Toch is het voortbestaan van ons pand niet altijd zeker geweest. Enkele jaren geleden zou het pand weggehaald worden. Daar hebben wij een stokje voor gestoken, zodat u nog steeds kunt genieten van die heerlijke ouderwetse poffertjes en pannenkoeken.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="prev-next-container mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-4">
                        <div class="vcenter link-container"><a href="{{ route('project.technischedienst') }}" class="prev-link">
                                <div class="project-title">Technische Dienst</div>
                                <div class="link-title">Vorige project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.chefmarketing') }}" class="next-link">
                                <div class="project-title">Chefmarketing</div>
                                <div class="link-title">Volgende project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection