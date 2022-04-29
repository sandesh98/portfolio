@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel: true, autoplay: true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/superspeurders/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2021</div>
                            <div class="col-7">
                                <div class="label">Juni</div>
                                <h1 class="animatedText">Superspeurders</h1>
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
                        <img src="{{ asset('website/images/project/superspeurders/preview.png') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Superspeurders is een interactieve groepsspeurtocht te voet, waarbij kinderen doormiddel van checkpoints opdrachten uitvoeren in de eigen stad Rotterdam zo en zoveel mogelijk praktijkervaring opdoen in het verkeer.</p>
                        <a href="https://sandesh98.github.io/anwbontheroad/" target="_blank">Link naar website</a>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Illustratie</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">ANWB</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Jaar</div>
                            <div class="desc">2021</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/superspeurders/carousel/carousel-1.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/superspeurders/carousel/carousel-2.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/superspeurders/carousel/carousel-3.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/superspeurders/carousel/carousel-4.jpg') }}"
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
                            <p>Hier komt het proces van Superspeurders!</p>
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
                                <div class="col-2"><span class="label">Discover</span>
                                    <ul class="striped inside">
                                        <li>SWOT-analyse</li>
                                        <li>Destep Context Map</li>
                                        <li>Deskresearch</li>
                                        <li>Interviews</li>
                                        <li>Observeren</li>
                                        <li>Expert interview</li>
                                        <li>Stakeholder Map</li>
                                        <li>Provisional Persona</li>
                                        <li>Insight Cards</li>
                                        <li>Empathy Map</li>
                                        <li>Debrief</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Define</span>
                                    <ul class="striped inside">
                                        <li>Framing Your Design Challenge</li>
                                        <li>5 Why's</li>
                                        <li>Job Stories</li>
                                        <li>User Stories</li>
                                        <li>Design Principles</li>
                                        <li>4 Denkhoeden</li>
                                        <li>Disney methode</li>
                                        <li>The Mash Up</li>
                                        <li>Toevalstreffer</li>
                                        <li>COCD-Box</li>
                                        <li>Solution Sketch</li>
                                        <li>Design Principles vs. Concepten</li>
                                        <li>Concept Cards</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Design</span>
                                    <ul class="striped inside">
                                        <li>Concept test</li>
                                        <li>Four Square Story</li>
                                        <li>Flowchart</li>
                                        <li>Golden Circle</li>
                                        <li>Design Guidelines</li>
                                        <li>Sitemap</li>
                                        <li>Paper prototype</li>
                                        <li>Wireframe</li>
                                        <li>Prototype</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Deliver</span>
                                    <ul class="striped inside">
                                        <li>Design Crid</li>
                                        <li>Usability Tests</li>
                                        <li>A/B-test</li>
                                        <li>Fly On The Wall</li>
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
                            <a href="{{ route('project.wecollect') }}" class="prev-link">
                                <div class="project-title">WECOLLECT</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right">
                            <a href="{{ route('project.abc-hulplijn') }}" class="next-link">
                                <div class="project-title">ABC-Hulplijn</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
