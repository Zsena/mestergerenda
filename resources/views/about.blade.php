@extends('layout.app')

@section('content')
<header class="main-header about-us-header header-after subpage-primary-header-size">
    <article class="m-container header-layer-container">
        <div class="row">
            <div class="main-layer col">
                <div class="text-box">
                    <h1>Rólunk</h1>
                    <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                    <p>
                        Gerendaház- és rönkházépítéssel foglalkozó cégünk 2019-ben alakult. Olyan, több évtizedes tapasztalattal rendelkező műszaki szakemberekkel dolgozunk, akiknek már a felmenőik is famegmunkálással foglalkoztak.
                    </p>
                </div>

            </div>
        </div>
    </article>
</header>
<main class="main">
    <section class="about-us-section">
        <div class="m-container">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
            <div class="col-12">
                <h2 class="text-highlight-darker">Kik vagyunk?</h2>
                <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                <div class="row">
                    <div class="horizontal-card">
                        <div class="row">
                            <div class="col-7 pl-0">
                                <p class="text-highlight">
                                    Gerendaház- és rönkházépítéssel foglalkozó cégünk 2019-ben alakult. Olyan, több évtizedes tapasztalattal rendelkező műszaki szakemberekkel dolgozunk, akiknek már a felmenőik is famegmunkálással foglalkoztak.
                                </p>
                                <h3 class="text-highlight-darker">Hitvallásunk</h3>
                                <p>Szenvedélyünk a fa. Ezért számunkra minden felkérés olyan örömteli, mint egy pihentető séta a természetben. Megrendelőink elképzeléseinek megvalósításához minden esetben precíz szakértelemmel látunk neki. Büszkék vagyunk arra, hogy a tervezés és építés során környezetkímélő módszereket alkalmazunk. Hiszünk benne, hogy amikor épületet tervezünk, nem csupán házat építünk, hanem otthont is teremtünk.</p>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <img class="mr-xl-0" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Rólunk">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="horizontal-card">
                        <div class="row">
                            <div class="col-7 pl-0">
                                <h3 class="text-highlight mb-0">Milyen munkákat vállalunk?</h3>
                                <p>
                                    A gerendaház és rönkház sokféle lehet. Lakóházat, üdülőházat, kisebb kerti épületeket, fedett beállókat készítünk. Nagyobb ácsmunkákat, így például tetőgerendázást is vállalunk. A kivitelezés során csak minősített és a jogszabályokban rögzített dokumentációval ellátott alapanyagokat használunk fel.
                                </p>
                            </div>
                            <div class="col-3">
                                <figure>
                                    <img class="mr-xl-0" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Rólunk">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="horizontal-card">
                        <div class="row">
                            <div class="col-4 pl-md-0">
                                <figure>
                                    <img class="ml-xl-0" src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" alt="Rólunk">
                                </figure>
                            </div>
                            <div class="col-6">
                                <p class="text-highlight pb-0">Integer auctor nulla</p>
                                <p>
                                    Integer mattis odio id massa efficitur, quis pellentesque est ultricies. In dictum sollicitudin pulvinar.
                                    Etiam cursus nisi est, non malesuada mi fringilla a. Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Morbi turpis neque, pharetra sit amet mi nec, maximus ultrices ligula.
                                    Quisque elementum accumsan arcu, eu aliquet ante suscipit eget. Morbi vitae turpis consectetur, blandit mi id, pulvinar ex.
                                    Suspendisse a magna nulla. Donec urna augue, commodo sed sapien a, imperdiet auctor risus. Sed a gravida nunc, vitae egestas ipsum.
                                    Nunc nec iaculis quam. Ut quam tellus, euismod et ullamcorper sodales,
                                    facilisis ut tellus. Vestibulum feugiat id elit ac efficitur. Suspendisse potenti.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet ante lacinia vulputate vel at sem. Sed dictum varius neque.
                                    Quisque congue nisi eu ullamcorper condimentum. Morbi sodales nibh mi, a sollicitudin enim sollicitudin ac.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
    </section>
    <section class="vision img-after">
        <div class="m-container">
            <div class="col-12">
                <h2 class="text-white">Távlati terveink</h2>
                <img class="design-line-right-top" src="{{ asset('assets/img/lines/green-small-verti.png') }}" alt="Design elem">
                <div class="row">
                    <div class="col-12 pl-0">
                        <p class="text-white">
                            Szeretnénk a jövőben teljes mértékben megújuló alapanyagokból építkezni, amivel még kisebbé tehetjük az ökolábnyomunkat. A faházak hozzájárulnak a környezeti egyensúly megteremtéséhez és barátságos otthonként is szolgálnak. Ezért reményeink szerint egyre nyitottabbá tehetjük a hazai vásárlókat a gerenda- és rönkházakra.
                        </p>
                        <div class="call-to-action-btn-group row">
                            <div class="col-8">
                                <a href="/arajanlat" class="btn text-white form-btn">
                                    Gerendaházat szeretne? Vegye fel velünk a kapcsolatot vagy kérjen tőlünk árajánlatot!
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="tel:+36205555555" class="btn text-white call-btn">
                                    <i class="fas fa-mobile"></i>&nbsp;+36 20 555 55 55
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="company-goals">
        <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
        <div class="m-container">
            <div class="col-12">
                <h2 class="text-highlight-darker">Értékek, amiket közvetítünk</h2>
                <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                <div class="row">
                    <div class="col-12 pl-0">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                            Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                            Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                            Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                            Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                            Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                            Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                            Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                            Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                            Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                            Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                            Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                            Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                            Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
    </section>
</main>
@endsection

@section('js')
@endsection

@section('css')
@endsection