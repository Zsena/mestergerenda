@extends('layout.app')

@section('content')
<header class="main-header header-after">
    <article class="m-container header-layer-container">
        <div class="row">
            <div class="home-page-layer main-layer col">
                <div class="text-box">
                    <h1>A velünk élő otthonok</h1>
                    <p>
                        A Mestergerenda tervezői a szaktudást ötvözik a fa iránti szenvedéllyel.
                        A fagerendából vagy rönkből készült házak pénztárcakímélők és környezetbarátok. Kerüljön közelebb a természethez gerendaházzal!
                        Kérjen tőlünk árajánlatot!
                    </p>
                    <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                </div>
                <a href="/arajanlat" class="default btn" type="button">ÁRAJÁNLATKÉRÉS</a>
            </div>
        </div>
    </article>
</header>
<main class="main">
    <section class="block-house-section">
        <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
        <div class="m-container">
            <div class="row">
                <div class="col heading-top-transform">
                    <div class="heading-group">
                        <h2>A gerendaházakról</h2>
                        <img class="line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    </div>
                    <p>
                        A gerendaház tökéletes választás Ön és családja, párja számára, ha közel szeretnék magukat érezni a természethez, de pénztárcabarát épületre is vágynak. Egyedi igényeit nem csak a gerendaház tervezése során valósíthatja meg. A könnyű falszerkezet lehetővé teszi, hogy a későbbiekben könnyen átalakíthassa a belső tereket vagy hozzáépítsen otthonához.
                    </p>
                    <p>
                        A gerendaházak pozitív hatással vannak az egészségre: a természetes alapanyagoknak hála fellélegezhetnek az allergiások és a tiszta környezetre vágyók. Ráadásul amellett, hogy a gerendaház garantálja az időtálló eleganciát, előállítása jelentősen kisebb ökológiai lábnyomot hagy maga után, mint más épületeké.
                    </p>
                    <div class="row picto-row">
                        <div class="col">
                            <figure>
                                <img src="{{ asset('assets/img/homepage/design-elements/vector1.png') }}" alt="Ikon">
                                <figcaption>Személyre szabható</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img style="max-width: 35px;" src="{{ asset('assets/img/homepage/design-elements/vector2.png') }}" alt="Ikon">
                                <figcaption>Természetes alapanyagok</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="{{ asset('assets/img/homepage/design-elements/vector3.png') }}" alt="Ikon">
                                <figcaption>Egészséges beltér</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="{{ asset('assets/img/homepage/design-elements/vector4.png') }}" alt="Ikon">
                                <figcaption>Jó ár-érték arány</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure>
                                <img src="{{ asset('assets/img/homepage/design-elements/vector5.png') }}" alt="Ikon">
                                <figcaption>Kisebb ökológiai lábnyom</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="img-wrap">
                        <figure>
                            <img src="{{ asset('assets/img/homepage/fooldal_gerendahaz.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="img-column">
                        <img class="line-bottom" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown-longer.png') }}" alt="Design elem">
                    </div>
                </div>
            </div>
        </div>
        <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
    </section>
    <section class="special-offers-section">
        <div class="m-container">
            <div class="col-12">
                <h2>Kiemelt Ajánlatok</h2>
            </div>
            <div class="row card-row">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/img/homepage/design-elements/placeholder.png') }}" alt="Kiemelt ajánlatok">
                        <div class="card-body">
                            <h5 class="card-title">Lorem Ipsum Dolor</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc.
                                Donec quis erat orci. Mauris massa eros,
                                sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc.
                            </p>
                            <a href="#" class="btn btn-primary clickable-card-link">Érdekel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/img/homepage/fooldal_referenciahaz.png') }}" alt="Referenciaház">
                        <div class="card-body">
                            <h5 class="card-title ref-title">Referenciaház program</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc.
                                Donec quis erat orci. Mauris massa eros,
                                sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc.
                            </p>
                            <a href="/referenciak#refProgram" class="btn btn-primary-inverse clickable-card-link">Érdekel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/img/homepage/design-elements/placeholder.png') }}" alt="Kiemelt ajánlatok">
                        <div class="card-body">
                            <h5 class="card-title">Lorem Ipsum Dolor</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc.
                                Donec quis erat orci. Mauris massa eros,
                                sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc.
                            </p>
                            <a href="#" class="btn btn-primary clickable-card-link">Érdekel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section">
        <img class="ref-long-bline" src="../assets/img/homepage/design-elements/vertical-line-brown-longer-ref.png" alt="Design elem">
        <div class="ref-program-box">
            <div class="program-text">
                <a href="/referenciak#refProgram"><h2 class="ref-title">Referenciaház program</h2></a>
                <p class="ref-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                    Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci. Mauris massa eros, sollicitudin ut arcu quis,
                    vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                    Praesent tempor ipsum non urna posuere, ac convallis orci commodo. Nullam dictum enim vitae turpis placerat vulputate.
                </p>
            </div>
            <img class="ref-green-line" src="../assets/img/homepage/design-elements/horizontal-green-line.png" alt="Design elem">
        </div>
        <div class="m-container faq-container">
            <div class="col-12 heading-group">
                <h2 class="text-highlight-darker">Gyakori kérdések</h2>
            </div>
            <div class="row faq-row">
                <div class="col-6">
                    <p>Egyre többen döntenek a gerendaházak mellett számos előnye és szépsége miatt. Az itthon még szokatlan épületekről azonban egyelőre keveset tudnak a megrendelők. Mi megosztjuk a tudásunkat Önnel!
                    </p>
                    <p>
                        <span class="text-highlight">Mi az a gerendaház?</span><br>
                        A gerendaház fagerendákból épült ház. Számos elkészítési módja létezik, de mi a tradicionális eljárást ötvözzük a modern technológiával. Ez azt jelenti, hogy a természetes alapanyagok mellett technológiai szigetelést alkalmazunk és ásványgyapotot is használunk.
                    </p>
                    <a class="btn btn-secondary" href="/arajanlat#gyik">Még több válasz</a>
                </div>
                <div class="col-4">
                    <figure class="color-effect">
                        <a href="/arajanlat#gyik"><img src="{{ asset('assets/img/homepage/fooldal_gyakorikerdesek.png') }}" alt="Gyakori kérdések szekció:Ház kerttel kép"></a>
                    </figure>
                </div>
            </div>
        </div>
        <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
    </section>
    <section class="testimonial">
        <div class="line-box">
            <img class="testi-top-line" src="{{ asset('assets/img/homepage/design-elements/vertical-line-dbrown-faq.png') }}" alt="Design elem">
        </div>
        <div class="m-container">
            <div class="row testi-row">
                <div class="col">
                    <img class="testi-main-img" src="{{ asset('assets/img/homepage/about-us3.png') }}" title="Photo by Djordje Petrovic" alt="Rólunk mondták: Photo by Djordje Petrovic">
                </div>
                <div class="col testi-column">
                    <div class="testi-card">
                        <div class="col-12 heading-group">
                            <h2 class="text-highlight-darker">Rólunk mondták</h2>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p>
                                    Habár számunkra a munka az utolsó faelem beszerelésével véget ér, egy családnak egy új élet kezdődik onnantól. Emiatt különösen nagy örömmel tölt el minket, amikor mások is elégedettek azzal, ami számunkra szenvedély.
                                </p>
                                <p class="commas-row">
                                    <em class="text-highlight-darker commas">
                                        <img class="commas-top" src="../assets/img/homepage/design-elements/commas-top.png" alt="Design elem">
                                        „Gyönyörű otthont kaptam a Mestergerendától. Minden gördülékenyen ment velük, és maximálisan nyitottak voltak az elképzeléseimre. Máskor is őket választom.”
                                        Gipsz Jakab
                                        <img class="commas-bottom" src="../assets/img/homepage/design-elements/commas-bottom.png" alt="Design elem">
                                    </em>
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                    Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci.
                                    Mauris massa eros, sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                                </p>
                                <a class="btn btn-primary" href="/referenciak">Referenciáink</a>
                            </div>
                        </div>
                    </div>
                    <img class="testi-bottom-lines" src="{{ asset('assets/img/homepage/design-elements/mestergerenda_zold_jobb.png') }}" alt="Design elem">
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
        <div class="m-container">
            <div class="news-row">
                <div class="row">
                    <div class="col pl-xl-0">
                        <h2 class="text-highlight-darker">Hírek</h2>
                        <p>
                            Értesüljön legfrissebb híreinkről! Nálunk nemcsak építészeti újdonságokról olvashat, hanem hasznos tanácsokkal is ellátjuk a gerendaházakat illetően.
                        </p>
                        <div class="col"></div>
                    </div>
                </div>
                @foreach($latest_news as $l)
                @if($loop->odd)
                <div class="news-card">
                    <div class="row">
                        <div class="col pl-xl-0">
                            <img class="news-card-img ml-0" src="{{$l->getThumbnail()}}" alt="Hírek">
                        </div>
                        <div class="col">
                            <div class="news-card-title">
                                <h4 class="text-highlight-darker">{{ $l->getTitle() }}</h4>
                            </div>
                            <div class="news-card-text">
                                <p class="">
                                    {{ $l->getExcerpt() }}
                                </p>
                            </div>
                            <a class="news-btn" href="/hirek/{{ $l->getId() }}/{{ $l->getSlug() }}">Bővebben></a>
                        </div>
                    </div>
                    <img class="news-bottom-lines" src="{{ asset('assets/img/homepage/design-elements/mestergerenda_zold_jobb.png') }}" alt="Design elem">
                </div>
                @else
                <div class="news-card">
                    <div class="row column-reverse">
                        <div class="col pl-xl-0">
                            <div class="news-card-title">
                                <h4 class="text-highlight-darker">{{ $l->getTitle() }}</h4>
                            </div>
                            <div class="news-card-text">
                                <p class="">
                                    {{ $l->getExcerpt() }}
                                </p>
                            </div>
                            <a class="news-btn" href="/hirek/{{ $l->getId() }}/{{ $l->getSlug() }}">Bővebben ></a>
                        </div>
                        <img class="news-bottom-lines second-row-line" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <div class="col">
                            <img class="news-card-img ml-0" src="{{ asset('assets/img/homepage/placeholder_news.png') }}" alt="Hírek">
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
    </section>
</main>
@endsection

