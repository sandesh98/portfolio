@extends('layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel : true, autoplay : true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url(website/images/hero/05.jpg);" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2018</div>
                            <div class="col-7">
                                <div class="label">January</div>
                                <h1 class="animatedText">Chefmarketing</h1>
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
                        <div class="video-frame mb-xl">
                            <iframe src="https://player.vimeo.com/video/165082518?badge=0&amp;portrait=0&amp;title=0&amp;byline=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Businesses cannot get away from the force of advertising. If they want to make their products known in the marketplace they have to use some form of advertisement. Advertising is being more and more known as a reasonable and desirable business force. The marketing may be in the form of a heart to heart talk </p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Director</div>
                            <div class="desc">Vincent Toretti</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Web, Mobile</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Year</div>
                            <div class="desc">2016</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Agency</div>
                            <div class="desc">The Mass</div>
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
                            <li class="slide"><img src="images/projects/thumb-01-wide.jpg" class="fw"></li>
                            <li class="slide"><img src="images/projects/thumb-02-wide.jpg" class="fw"></li>
                            <li class="slide"><img src="images/projects/thumb-03-wide.jpg" class="fw"></li>
                            <li class="slide"><img src="images/projects/thumb-05-wide.jpg" class="fw"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <div class="grid content">
                    <div class="col-4 col-offset-2">
                        <p>Businesses cannot get away from the force of advertising. If they want to make their products known in the marketplace they have to use some form of advertisement. Advertising is being more and more known as a reasonable and desirable business force. The marketing may be in the form of a heart to heart talk.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <ul class="accordion">
                    <li class="active">
                        <div class="head">
                            <div class="title">Read more</div>
                        </div>
                        <div class="body">
                            <p>Without resorting to reality, one can, given infinite time and resources, produce all conceivable theories. One of these theories is bound to be the “truth”. To decide among them, scientists conduct experiments and compare their results to predictions yielded by the theories. A theory is falsified when one or more of its predictions fails. No amount of positive results – i.e., outcomes that confirm the theory’s predictions – can “prove right” a theory. Theories can only be proven false by that great arbiter, reality.</p>
                        </div>
                    </li>
                    <li>
                        <div class="head">
                            <div class="title">Credits</div>
                        </div>
                        <div class="body">
                            <div class="grid">
                                <div class="col-2"><span class="label">Agency</span>
                                    <ul class="striped inside">
                                        <li>Webdesigner Trends</li>
                                        <li>The FWA</li>
                                        <li>Abduzeedo</li>
                                        <li>Smashing Magazine</li>
                                        <li>AWWWARDS</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">Production company</span>
                                    <ul class="striped inside">
                                        <li>The Webbber</li>
                                        <li>Computer Arts</li>
                                        <li>siteInspire</li>
                                        <li>httpster.net</li>
                                        <li>It's nice that</li>
                                    </ul>
                                </div>
                                <div class="col-2"><span class="label">VFX &amp; Design</span>
                                    <ul class="striped inside">
                                        <li>Book of Design</li>
                                        <li>Illustrator's Home</li>
                                        <li>Designer's magazine</li>
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
                        <div class="vcenter link-container"><a href="project-single.html" class="prev-link">
                                <div class="project-title">The Vault</div>
                                <div class="link-title">Previous project</div></a></div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right"><a href="project-single.html" class="next-link">
                                <div class="project-title">Wakey Wakey</div>
                                <div class="link-title">Next project</div></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection