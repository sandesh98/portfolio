@extends('website.layout.master')

@section('main')
{{--    <div id="inner">--}}
{{--        <section class="behind-header">--}}
{{--            <div style="background-image: url({{ asset('website/images/home/sandeshboedhoe.jpeg') }}); background-position: center top;" class="bg faded"></div>--}}
{{--        </section>--}}
{{--    </div>--}}

<div id="inner">
    <section class="behind-header">
        <div id="home-slider" class="titanSlider fh fw">
{{--            <ul class="slides">--}}
{{--                <li class="slide dark">--}}
{{--                    <div class="hero fs">--}}
{{--                        <div style="background-image: url({{ asset('website/images/home/sandeshboedhoe.jpeg') }}); background-position: center top;" class="bg faded"></div>--}}
{{--                        <div class="vcenter">--}}
{{--                            <div class="container">--}}
{{--                                <div class="grid">--}}
{{--                                    <div class="col-7">--}}
{{--                                        <div class="label">January</div><a href="project-single.html" class="project-link">--}}
{{--                                            <h1 class="stripe animatedText">Resilience</h1></a>--}}
{{--                                        <div class="label">Retouching</div>--}}
{{--                                        <div class="label">Art Direction</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
                    <div class="hero fs">
                        <div style="background-image: url({{ asset('website/images/home/sandeshboedhoe.jpeg') }}); background-position: center top;" class="bg faded"></div>
                        <div class="vcenter">
                            <div class="container">
                                <div class="grid">
                                    <div class="col-11 col-offset-1">
                                        <h1 class="animatedText" style="margin-bottom: 10px;">Sandesh Boedhoe</h1>
                                        <div class="">
                                            <p class="subtitle">Mijn naam is Sandesh en ik ben 22 jaar oud en volg de opleiding Communicatie Multimedia Design aan de Hogeschool Rotterdam.</p>
                                            <p class="subtitle">Ik ben opzoek naar een stage in de periode van september 2021 tot en met januari 2022 als UX-developer.</p>

                                        </div>
                                    </div>
{{--                                    <div class="col-11 col-offset-1">--}}
{{--                                        Hello mijn naam is sandesh--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
{{--            </ul>--}}
        </div>
    </section>
</div>
@endsection
