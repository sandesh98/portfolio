@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="mb-xl">
            <div class="hero behind-header small">
                <div style="background-image: url({{ asset('website/images/profile/sandeshboedhoe.jpeg') }});" class="bg faded"></div>
                <div class="vbottom">
                    <div class="container">
                        <div class="grid mb-md">
                            <div class="col-8">
                                <h1 class="animatedText">Profiel</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <div class="grid">
                    <div class="col-3">
                        <div class="content-block">
                            {!! $text->about_me !!}
                        </div>
                        <div class="content-block">
                            <h4>Extra weetjes</h4>
                            <div class="grid">
                                <div class="col-2-3">
                                    <h3>Trainingen</h3>
                                    <ul class="striped">
                                        <li>ACE-training<br>
                                            (Apple Customer Experience)
                                        </li>
                                        <li>Apple Ecosystem training</li>
                                    </ul>
                                </div>
                                <div class="col-1-3">
                                    <h3>Certifacten</h3>
                                    <ul class="striped">
                                        <li>Apple Product Professional</li>
                                        <li>Adobe Photoshop Certifacte</li>
                                        <li>Adobe Premier Certifacte</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-offset-1">
                        <div class="list-block">
                            <h3 class="stripe">Opleidingen</h3><span class="label">2019 - heden</span>
                            <ul class="striped">
                                <li>Hogeschool Rotterdam <br>
                                    Communicatie en Multimedia Design <br>
                                    HBO
                                </li>
                            </ul><span class="label">2015 - 2018</span>
                            <ul class="striped">
                                <li>Techniek Collega Rotterdam <br>
                                    Applicatie- en mediaontwikkelaar <br>
                                    MBO
                                </li>
                            </ul><span class="label">2011 - 2015</span>
                            <ul class="striped">
                                <li>CSG De Oude Maas <br>
                                    Techno Mavo <br>
                                    VMBO
                                </li>
                            </ul>
                        </div>
                        <div class="list-block">
                            <h3 class="stripe">Werk</h3>

                            <span class="label">Okt 2018 - Heden</span>
                            <ul class="striped">
                                <li>Atlantis<br>
                                    Administratie
                                </li>
                            </ul>

                            <span class="label">Sep 2016 - Heden</span>
                            <ul class="striped">
                                <li>Amac<br>
                                    Medior Sales Adviser
                                </li>
                            </ul>

                            <span class="label">Jan 2018 - Jun 2018</span>
                            <ul class="striped">
                                <li>Collab Group<br>
                                    Stagiair / Student
                                </li>
                            </ul>

                            <span class="label">Okt 2016 - Feb 2017</span>
                            <ul class="striped">
                                <li>Computer.nl<br>
                                    Stagiair / Student
                                </li>
                            </ul>

                            <span class="label">Mei 2016 - Aug 2016</span>
                            <ul class="striped">
                                <li>Krom Spijkenisse<br>
                                    Afwashulp
                                </li>
                            </ul>

                            <span class="label">Sep 2014 - Sep 2015</span>
                            <ul class="striped">
                                <li>Dixons<br>
                                    Verkoopmedewerker
                                </li>
                            </ul>

                            <span class="label">Jun 2014 - Jun 2014</span>
                            <ul class="striped">
                                <li>Panoramaflat<br>
                                    Vrijwillegerswerk
                                </li>
                            </ul>

                            <span class="label">Apr 2014 - Apr 2014</span>
                            <ul class="striped">
                                <li>Dixons<br>
                                    Stagiar / Student
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-2">
                        <div class="list-block">
                            <h3 class="stripe">Programming</h3>
                            <ul class="striped">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>Vue</li>
                                <li>Javascript</li>
                                <li>MySQL</li>
                                <li>Bootstrap</li>
                            </ul>
                        </div>
                        <div class="list-block">
                            <h3 class="stripe">Tools</h3>
                            <ul class="striped">
                                <li>PHPStorm</li>
                                <li>Adobe Photoshop</li>
                                <li>Spotify</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
