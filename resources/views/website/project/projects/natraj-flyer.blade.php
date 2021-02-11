@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/natrajflyer/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2017</div>
                            <div class="col-7">
                                <div class="label">Maart</div>
                                <h1 class="animatedText">Dansacademie Natraj</h1>
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
                        <img src="{{ asset('website/images/project/natrajflyer/preview.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Dansacademie Natraj is door Rajni Ghiraw opgericht. Haar passie ligt echt bij het dansen en die kennis wil zij met andere delen. Zodoende heeft ze haar eigen dansschool opgericht. Rajni heeft mij ingeschakeld om haar flyer te maken.</p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Maker</div>
                            <div class="desc">Sandesh Boedhoe</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Flyer</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Year</div>
                            <div class="desc">2017</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Rajni Ghiraw</div>
                        </div>
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
                            <p>Dansacademie Natraj heeft Rajni opgericht voor mensen die van traditionele Indiase dansen houdt. Rajni focust zich naast haar werk volledig op haar dansschool. Ze houdt veel optredens, ook geeft ze lessen aan anderen. Dit doet zij op verschillende locaties. De flyer was bedoeld om meer publiek te trekken maar ook om de dansschool meer bekendheid te geven.</p>
                            <p>Het was voor mij de eerste keer om een flyer te ontwerpen. Tijdens het proces heb ik veel over Photoshop geleerd. Je zou nu denken; wie maakt er nou weer een flyer in Photoshop? Nou ik. Wel heb ik tijdens het proces geleerd dat Photoshop misschien niet het beste programma is om flyers in te maken.</p>
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
                                        <li>Adobe Photoshop</li>
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
                            <a href="{{ route('project.de-cafe-koers') }}" class="prev-link">
                                <div class="project-title">De Café Koers</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right">
                            <a href="{{ route('project.dutchdiner') }}" class="next-link">
                                <div class="project-title">Dutch Diner</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
