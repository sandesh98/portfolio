@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="behind-header desktop">
            <div style="background-image: url({{ asset('website/images/contact/01.jpg') }});" class="bg faded"></div>
            <div class="vbottom desktop fh">
                <div class="container">
                    <div class="grid mbxl">
                        <a href="https://www.linkedin.com/in/sandesh98/" target="_blank"><i class="fa fa-linkedin fa-social-icons"></i></a>
                        <a href="https://github.com/sandesh98" target="_blank"><i class="fa fa-github fa-social-icons"></i></a>
                    </div>
                    <div class="grid mb-xl">
                        <div class="col-4"><a href="mailto:sandeshb981@gmail.com" style="font-size: 36px; font-weight: bold;">sandeshb981@gmail.com</a></div>
                        <div class="col-2"><span class="label label-white">Spijkenisse</span></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
