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
                                <h1 class="animatedText">Over mij</h1>
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
                            <h2>Hi, mijn naam is Sandesh</h2>
                            <p>Ik ben 22 jaar oud en woon in Spijkenisse. Mijn hobby’s zijn programmeren, gamen met vrienden en ik vind het ontzettend leuk om te poolen. Eén van mijn eigenschappen is dat ik een persoon ben die niet stil kan staan. Zo ben ik momenteel bezig met een website, samen met een oud klasgenoot waarin wij mensen willen helpen om de iPhone te vinden die het beste bij hun past. Deze website maken wij in de programmeertaal Laravel. Laravel is een framework gebaseerd op PHP en ik gebruik het ondertussen al vier jaar.</p>
                            <h3>School</h3>
                            <p>Op het moment ben ik een tweede jaar Communicatie en Multimedia Design student aan de Hogeschool Rotterdam. Het leukste aan de opleiding vind ik de samenwerking met mijn klasgenoten. Dit komt omdat je gebruik maakt van de individuele kwaliteiten en elkaar daarom goed kan aanvullen tijdens een project. Gedurende het tweede schooljaar moeten wij aan twee projecten werken. Waar ik altijd trots op ben bij het uitvoeren van een project is het ontwerpproces bedenken en deze vervolgens uitvoeren. </p>
                            <h3>Werk</h3>
                            <p>Ik ben bijna vijf jaar in dienst bij Amac in Spijkenisse. Amac de grootste Apple Premium Reseller van Europa. Het leukste aan mijn werk naar mijn mening is dat ik premium producten mag verkopen aan klanten. Mijn motivatie haal ik contact met mensen en mijn collega’s. Het achterhalen van de wensen en behoefte van een klant geeft mij kick. Hetzelfde geldt voor interviews afnemen bij de doelgroep en stakeholders.</p>
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
                                    <h3>Certificaten</h3>
                                    <ul class="striped">
                                        <li>Apple Product Professional</li>
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
                                <li>Techniek College Rotterdam <br>
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

                        <div class="list-block d-none d-sm-block d-md-block"> {{--alleen zichtbaar bij sm sreen--}}
                            <h3 class="stripe">Werk</h3>

                            <span class="label">Sep 2016 - Heden</span>
                            <ul class="striped">
                                <li>Amac<br>
                                    Medior Sales Adviser
                                </li>
                            </ul>

                            <span class="label">Okt 2018 - Jan 2020</span>
                            <ul class="striped">
                                <li>Atlantis<br>
                                    Administratie
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

                        <div class="list-block">
                            <h3 class="stripe">Coding</h3>
                            <ul class="striped">
                                <span class="label">Comfortabel met</span>
                                <li>Laravel</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>Bootstrap</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                                <div class="mt-20">
                                    <span class="label">In aanraking gekomen met</span>
                                    <li>Vue</li>
                                    <li>LiveWire</li>
                                    <li>Dart</li>
                                </div>
                            </ul>
                        </div>

                    </div>
                    <div class="col-2">
                        <div class="list-block d-sm-none d-md-none"> {{--alleen zichtbaar bij groter dan sm sreen--}}
                            <h3 class="stripe">Werk</h3>

                            <span class="label">Sep 2016 - Heden</span>
                            <ul class="striped">
                                <li>Amac<br>
                                    Medior Sales Adviser
                                </li>
                            </ul>

                            <span class="label">Okt 2018 - Jan 2020</span>
                            <ul class="striped">
                                <li>Atlantis<br>
                                    Administratie
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
                </div>
            </div>
        </section>
    </div>
@endsection
