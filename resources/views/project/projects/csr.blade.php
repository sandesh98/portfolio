@extends('layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('images/project/csr/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2016</div>
                            <div class="col-7">
                                <div class="label">September</div>
                                <h1 class="animatedText">CSR4ALL</h1>
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
                        <img src="{{ asset('images/project/csr/preview.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>AA4CSR staat voor Ami Aliar 4 Sales Connection Relation. Ami is een oom van mij en hij had een idee in zijn hoofd waardoor mensen die een uitkering ontvangen hun skills kunnen uitbreiden om zo weer op de arbeidsmarkt terecht te komen.</p>
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
                            <div class="title">Year</div>
                            <div class="desc">2016</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Ami</div>
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
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-1.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-2.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-3.jpg') }}" class="fw"></li>
                            <li class="slide"><img src="{{ asset('images/project/csr/carousel/carousel-4.jpg') }}" class="fw"></li>
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
                            <p>AA4CSR is een ideale oplossing voor mensen die net uit de uitkering komen of die momenteel een uitkering hebben. Ami, mijn oom heeft had een idee om dat soort mensen wat skills bij te scholen. Dat zou hij doormiddel van cursussen doen waar mensen zich voor kunnen inschrijven. Het inschrijven zou via website gaan. Mensen zouden zich eerst moeten registeren en daarna zouden zij zich kunnen aanmelden voor de cursussen. Helaas heeft Ami alles offline moeten halen in verband met persoonlijke omstandigheden.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="prev-next-container mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-4">
                        <div class="vcenter link-container"><a href="{{ route('project.sandesh') }}" class="prev-link">
                                <div class="project-title">Sandesh Boedhoe</div>
                                <div class="link-title">Vorige project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="{{ route('project.natraj-flyer') }}" class="next-link">
                                <div class="project-title">Dansacademie Natraj Flyer</div>
                                <div class="link-title">Volgende project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection