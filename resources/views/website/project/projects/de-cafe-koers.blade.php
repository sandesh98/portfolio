@extends('website.layout.master')

@push('script')
    <script>$('#img-carousel').titanSlider({carousel: true, autoplay: true});</script>
@endpush

@section('main')
    <div id="inner">
        <section class="nmb behind-header">
            <div class="hero">
                <div style="background-image: url({{ asset('website/images/project/decafekoers/header.jpg') }})" class="bg faded"></div>
                <div class="vcenter">
                    <div class="container mb-xl">
                        <div class="grid">
                            <div class="col-1">2019</div>
                            <div class="col-7">
                                <div class="label">Oktober</div>
                                <h1 class="animatedText">De Café Koers</h1>
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
                        <img src="{{ asset('website/images/project/decafekoers/preview.png') }}" alt="">
                    </div>
                </div>
                <div class="grid content">
                    <div class="col-offset-1 col-3">
                        <p>Kick-off project voor alle eerstejaars CMD-studenten van de Hogeschool Rotterdam. We kregen de opdracht om een spel voor andere eerstejaars studenten te verzinnen zodat ze elkaar en de school beter leren kennen.</p>
                    </div>
                    <div class="col-offset-1 col-1">
                        <div class="project-data">
                            <div class="title">Type</div>
                            <div class="desc">Web</div>
                        </div>
                        <div class="project-data">
                            <div class="title">Opdrachtgever</div>
                            <div class="desc">Hogeschool Rotterdam</div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="project-data">
                            <div class="title">Jaar</div>
                            <div class="desc">2019</div>
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
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-1.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-2.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-3.jpg') }}"
                                                   class="fw"></li>
                            <li class="slide"><img src="{{ asset('website/images/project/decafekoers/carousel/carousel-4.png') }}"
                                                   class="fw"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-xl">
            <div class="container">
                <ul class="accordion">
                    <li class="active">
                        <div class="head">
                            <div class="title">Meer informatie</div>
                        </div>
                        <div class="body">
                            <p>Als kick-off van de opleiding Communicatie en Multimedia Design heb ik de opdracht vanuit Hogeschool Rotterdam gekregen om een spel voor eerste jaar studenten te bedenken waardoor zij de klas maar ook de stad Rotterdam leren kennen.</p>
                            <p>Hierin is het belangrijk om een doelgroep vast te stellen. Allereerst hadden mijn team en ik de opleiding Informatica als doelgroep vastgesteld. Dit hadden wij gedaan omdat ik de opleiding gedaan heb (niet afgerond) en daarom nog connecties heb met deze studenten. Daarbij wist ik ook hoe de gemiddelde informaticus denkt aangezien ik hiervoor een ICT-opleiding heb afgerond. Het waren dus één en al aannames. Halverwege het project kregen wij een zogenaamde kill your darling, wat inhoudt om je doelgroep te laten vallen en helemaal opnieuw te beginnen. Pas vanaf hier ging wij aan de slag zoals het hoort, middels van een ontwerpproces.</p>
                            <p>Ter voorbereiding van het kiezen van een nieuw doelgroep zijn wij gezamenlijk gaan kijken naar ons netwerk. Al gauw kwam ik erachter dat ik een nichtje heb die in dezelfde periode gestart is met haar opleiding als ik. Het fijne hieraan is dat zij de intro periode al achter de rug heeft. Tijdens een interview dat ik had geregeld met mijn nichtje en een medestudent van haar heb ik de mogelijkheid gehad om te vragen wat zij tijdens haar introductieweek gedaan heeft en wat ze ervan vond. Verder heb ik ook vragen gesteld over haar opleiding bedrijfskunde. Na het interview heb ik voorgesteld om verder deskresearch te doen naar de opleiding. Ik wilde graag weten welke kanten je op kan gaan tijdens de opleiding maar ook nadat je afgestudeerd bent.</p>
                            <p>Vervolgens hebben we een veelheid aan ideeën verzameld en op basis van deze informatie zijn we een creatieve brainstormsessie gaan houden. Uit deze sessie is het spel De Café Koers gekomen. Daarna zijn we aan de slag gegaan met uittekenen van het spel. Hiermee wilde wij een eenheid creëren van waar en hoe het spel gespeeld kan worden. Daarna zijn we verdergegaan met het uitwerken van het spel. Voor de uitwerking hebben we een pak kaarten gekocht en deze beplakt met onze eigen logo en woorden. Zo hebben wij een product gemaakt dat echt vastgehouden kan worden. Tot slot hebben wij een paar eerste jaar bedrijfskunde studenten uitgenodigd om het spel te laten spelen.</p>
                            <p>Vervolgens hebben we een veelheid aan ideeën verzameld en op basis van deze informatie zijn we een creatieve brainstormsessie gaan houden. Uit deze sessie is het spel De Café Koers gekomen. Daarna zijn we aan de slag gegaan met uittekenen van het spel. Hiermee wilde wij een eenheid creëren van waar en hoe het spel gespeeld kan worden. Daarna zijn we verdergegaan met het uitwerken van het spel. Voor de uitwerking hebben we een pak kaarten gekocht en deze geplakt met onze eigen logo en woorden. Zo hebben wij een product gemaakt dat echt vastgehouden kan worden. Daarnaast hebben we ook een app prototype gemaakt. Het is namelijk de bedoeling dat de studenten van cafe naar cafe reizen als een soort speurtocht. De app houdt ook direct de puntentelling bij en er zit een timer in. Tot slot hebben wij een paar eerste jaar bedrijfskunde studenten uitgenodigd om het spel te laten spelen.</p>
                        </div>
                    </li>
                    <li>
                        <div class="head">
                            <div class="title">Tools</div>
                        </div>
                        <div class="body">
                            <div class="grid">
                                <div class="col-2"><span class="label">Programma's</span>
                                    <ul class="striped inside">
                                        <li>Adobe XD</li>
                                        <li>Adobe Illustrator</li>
                                        <li>Adobe Photoshop</li>
                                        <li>Trello</li>
                                        <li>Slack</li>
                                    </ul>
                                </div>

                                <div class="col-2"><span class="label">Projectleden</span>
                                    <ul class="striped inside">
                                        <li>Daniel Guseinov</li>
                                        <li>Henri van der Stelt</li>
                                        <li>Ravelli Winklaar</li>
                                        <li>Sandesh Boedhoe</li>
                                        <li>Volkan Bakar</li>
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
                        <div class="vcenter link-container">
                            <a href="{{ route('project.guess-and-win') }}" class="prev-link">
                                <div class="project-title">Guess and Win</div>
                                <div class="link-title">Vorige project</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vcenter link-container text-right">
                            <a href="{{ route('project.natraj-flyer') }}" class="next-link">
                                <div class="project-title">Dansacademie Natraj Flyer</div>
                                <div class="link-title">Volgende project</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
