@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="behind-header desktop">
            <div style="background-image: url({{ asset('website/images/contact/01.jpg') }});" class="bg faded"></div>
            <div class="vbottom desktop fh">
                <div class="container">
                    <div class="grid mb-xl">
                        <div class="col-4">
                            <h3 class="mt-0">Laat een bericht achter</h3>
                        </div>
                        <div class="col-2"><a href="mailto:sandeshb981@gmail.com">sandeshb981@gmail.com</a></div>
                        <div class="col-2"><span class="label label-white">Spijkenisse</span></div>
                    </div>

                    @livewire('contact-form')
                </div>
            </div>
        </section>
    </div>
@endsection
