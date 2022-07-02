@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="mb-xl">
            <div class="hero behind-header small">
                <div style="background-image: url({{ asset('website/images/profile/sandesh.jpeg') }}); background-position: center center;" class="bg faded"></div>
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
                            <p>Ik ben 24 jaar oud en ik woon in Spijkenisse. Ik mijn vrije tijd hou ik ervan om te poolen met vrienden. Daarbij probeer ik ook regelmatig een bezoekje te brengen aan de sportschool. Een eigenschap van mij is dat ik er niet van hou om stil te zitten. Het grootste gedeelte van mijn tijd ben ik bezig met het optimale uit mijzelf te halen of ik ben druk met school of werk.</p>
                            <h3>School</h3>
                            <p>Momenteel ben ik een derde jaar Communicatie en Multimedia Design student aan Hogeschool Rotterdam. Het leukste aan mijn opleiding vind ik onderzoek doen naar een probleem en hier toffe en mooie toepassingen voor bedenken. Tijdens de projecten ben ik een echte teamspeler en vind ik samen nieuwe ideeën bedenken met de doelgroep ontzettend motiverend. </p>
                            <p>Tijdens mijn stageperiode in het vierde leerjaar ben ik opzoek naar een bedrijf dat zich verdiept in UX en UI design voor mobiele applicaties. Door mijn affiniteit met Apple en mijn interesse in technologie weet ik veel over telefoon en de hardware. In mijn ontwerp probeer ik dit ook altijd te werken. Een voorbeeld hiervan is een recent project
                                <a class="undefined" href="https://sandeshboedhoe.nl/wecollect">Wecollect</a>.</p>
                            <h3>Werk</h3>
                            <p>Ik ben bijna vijf jaar in dienst bij Amac in Spijkenisse. Amac de grootste Apple Premium Reseller van Europa. Het leukste aan mijn werk naar mijn mening is dat ik premium producten mag verkopen aan klanten. Mijn motivatie haal ik contact met mensen en mijn collega’s. Het achterhalen van de wensen en behoefte van een klant geeft mij kick.</p>
                            <a href="https://www.linkedin.com/in/sandesh98/" target="_blank"><i class="fa fa-linkedin fa-social-icons-sm mt-20"></i></a>
                            <a href="https://github.com/sandesh98" target="_blank"><i class="fa fa-github fa-social-icons-sm mt-20"></i></a>
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
                            <h3 class="stripe">Designing</h3>
                            <ul class="striped">
                                <span class="label">Mijn specialisatie</span>
                                <li>User Experience Design</li>
                                <li>User Interface Design</li>
                                <div class="mt-20">
                                    <span class="label">Programma's</span>
                                    <li>Figma</li>
                                    <li>Adobe Photoshop</li>
                                    <li>Adobe Illustrator</li>
                                </div>
                            </ul>
                        </div>

                        <div class="list-block">
                            <h3 class="stripe">Coding</h3>
                            <ul class="striped">
                                <span class="label">Comfortabel met</span>
                                <li>Laravel</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                                <div class="mt-20">
                                    <span class="label">In aanraking gekomen met</span>
                                    <li>Vue</li>
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
