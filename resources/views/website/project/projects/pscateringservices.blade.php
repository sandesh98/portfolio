@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/pscateringservices/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2020</div>
                            <div class="col-7">
                                <div class="label">Juni</div>
                                <h1 class="animatedText">P.S. Catering Services</h1>
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
                        <img src="{{ asset('website/images/project/pscateringservices/preview.jpg') }}" alt="Preview afbeelding">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>P.S. Catering Services is de lokale catering van Spijkenisse. Op de website is het mogelijk om alle gerechten te zien en een bestelling te plaatsen doormiddel van het contactformulier. </p>
                        <a href="https://www.pscateringservices.nl/" target="_blank">Link naar de website</a>
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
                            <div class="desc">2020</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Peggy Saman</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/pscateringservices/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/pscateringservices/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/pscateringservices/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/pscateringservices/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>Voor een aantal jaar heeft P.S Catering Services gedraaid zonder website. Door mond op mondreclame kreeg ze haar klanten binnen. Toch wilde ze hier verandering in doormiddel van een website.</p>
                            <p>We website hebben een oud basisschool klasgenoot genaamd Richard en ik in elkaar gezet doormiddel van Wordpress. De samenwerking tussen ons verliep vlekkeloos. Richard heeft heel veel verstand van Wordpress. Hij wist direct hoe je extra pagina’s maakt en componenten binnen het thema gebruikt. Ik aan de andere kant keek meer naar het design perspectief. De eigenaresse van de catering kookt allerlei Surinaamse gerechten en vertoont deze ook op een luxe wijze. Het thema moet daarom deze luxe ook uitstralen. Verder heb ik ook een bijdrage geleverd aan wat programmeer werk. Om bepaalde componenten van de website zoals knoppen een andere uitstraling te geven vergt dit enige programmeerkennis. De programmeerkennis die verijsd was bestond uit HTML en CSS.</p>
                            <p>Uiteindelijk hebben Richard en ik de website in een weekendje tijd in elkaar gezet. Op de hoofdpagina kan je direct zien wie P.S. Catering Services is en waar zij voor staat. Er is een galerij pagina gemaakt waar ze al het werk laat zien waar ze trots op is. Ook is de website voorzien van een pagina waarin al haar gerechten te vinden zijn met daarbij een afbeelding. Tot slot is er een contact pagina waar contact informatie te vinden is en waar mensen een bestelling kunnen plaatsen doormiddel van een contactformulier.</p>
                        </div>
                    </li>
                    <li>
                        <div class="head">
                            <div class="title">Tools</div>
                        </div>
                        <div class="body">
                            <div class="grid">
                                <div class="col-2"><span class="label">Taal</span>
                                    <ul class="striped inside">
                                        <li>Wordpress</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Programma</span>
                                    <ul class="striped inside">
                                        <li>Adobe Photoshop</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Samen gemaakt met</span>
                                    <ul class="striped inside">
                                        <li>Richard Martins</li>
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
                            <a href="{{ route('project.abc-hulplijn') }}" class="prev-link">
                                <div class="project-title">ABC-Hulplijn</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right">
                            <a href="{{ route('project.sportmaatje') }}" class="next-link">
                                <div class="project-title">Sportmaatje</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
