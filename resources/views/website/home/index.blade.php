@extends('website.layout.master')

@section('main')
<div id="inner">
    <section class="behind-header">
        <div id="home-slider" class="titanSlider fh fw">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
