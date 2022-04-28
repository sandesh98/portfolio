@extends('website.layout.master')

@section('main')
<div id="inner">
    <section class="behind-header">
        <div id="home-slider" class="titanSlider fh fw">
            <div class="hero fs">
                <div style="background-image: url({{ asset('website/images/home/sandesh.jpg') }}); background-position: top center" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container">
                        <div class="grid">
                            <div class="col-11 col-offset-1">
                                <h1 class="animatedText" style="margin-bottom: 10px;">Sandesh Boedhoe</h1>
                                <div class="">
{{--                                    <p class="subtitle">Mijn naam is Sandesh en ik ben 23 jaar oud en volg de opleiding Communicatie Multimedia Design aan de Hogeschool Rotterdam.</p>--}}
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
