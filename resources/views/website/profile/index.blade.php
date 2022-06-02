@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="mb-xl">
            <div class="hero behind-header small">
                <div style="background-image: url({{ asset('website/images/profile/loesepoes.png') }}); background-position: center top;" class="bg faded"></div>
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
                            <p>Ik ben 23 jaar oud en woon in Spijkenisse. Mijn hobby’s zijn poolen, gamen met vrienden en programmeren. Eén van mijn eigenschap is dat ik een persoon ben die niet stil kan staan. Momenteel volg ik de opleiding Communicatie en Multimedia Design aan de Hogeschool Rotterdam. Een belangrijk onderdeel van de opleiding is het bedenken en uitwerken van mooie digitale producten die passen bij de behoefte van de gebruiker(s). Hier heb ik ook een grote passie voor. Daarom ben ik altijd druk bezig met het opzoeken van de laatste trends op het gebied van design en technologie.</p>
                            <h3>School</h3>
                            <p>Momenteel ben ik een derde jaar Communicatie en Multimedia Design student aan de Hogeschool Rotterdam. Eén van de leukste onderdelen van de opleiding buiten het bedenken en uitwerken van producten die passen bij de behoefte van de doelgroep is de samenwerking. Zowel samenwerken in teamverband waarbij ik met gemiddeld 3 andere studenten aan de slag om een ontwerpproces te doorlopen als samenwerken in de vorm van een co-creatie sessie, spreken mij erg aan op het vakgebied.</p>
                            <p>Naar mijn mening zijn één van de leukste onderdelen binnen het ontwerpproces het afnemen van interviews, creëren van een prototype en deze prototypes doormiddel van allerlei creatieve methodes testen bij de gebruiker. In het derde leerjaar moet ik het eerste semester stagelopen bij een bedrijf dat zich bezighoudt met interactieve digitale producten waarbij de mens centraal staat. Tijdens mijn stageperiode hoop ik ook minimaal 1 van deze onderdelen te kunnen beoefenen. </p>
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
                                    Senior Sales Adviser
                                </li>
                            </ul>

                            <span class="label">Sep 2021 - Jan 2022</span>
                            <ul class="striped">
                                <li>Openr B.V.<br>
                                    UX/UI-Stage
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
                                    <li>Flutter</li>
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
                                    Senior Sales Adviser
                                </li>
                            </ul>

                            <span class="label">Sep 2021 - Jan 2022</span>
                            <ul class="striped">
                                <li>Openr B.V.<br>
                                    UX/UI-Stage
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
