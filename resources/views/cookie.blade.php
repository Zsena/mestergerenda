@extends('layout.app')

@section('content')
    <header class="main-header single-page-header header-after subpage-primary-header-size">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Cookie Szabályzat</h1>
                        <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ullamcorper tincidunt turpis, mattis ullamcorper nisl pulvinar quis.
                            Vestibulum quis erat risus. </p>
                    </div>

                </div>
            </div>
        </article>
    </header>
    <main class="main single-page">
        <section class="single-page-section">
            <div class="m-container">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                <div class="col-12">
                    <h2 class="text-highlight-darker mt-0 mb-0 position-relative z-index-99999">A sütik kezelése</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-7 pl-0 pt-0">
                                    <p class="text-highlight">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet ante lacinia vulputate vel at sem.
                                        Sed dictum varius neque. Quisque congue nisi eu ullamcorper condimentum. Morbi sodales nibh mi, a sollicitudin enim sollicitudin ac.
                                        Suspendisse gravida sem nulla, et tristique neque placerat sed. Vivamus auctor nisi vitae finibus tincidunt. Etiam et dui nisi.
                                        Fusce venenatis ultricies condimentum. Nam venenatis tincidunt neque eu scelerisque.
                                        Cras vel tincidunt lectus. Proin ultrices aliquet justo eu venenatis. Sed finibus, nunc vitae gravida accumsan,
                                        augue tortor sodales ante, nec eleifend tellus sapien et magna. Vivamus dignissim enim in venenatis lobortis.
                                        In hac habitasse platea dictumst. Phasellus pulvinar euismod laoreet.
                                    </p>
                                    <div class="row personal-datas">
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Elérhetőségünk</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Webtárhely adatok</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Webfejlesztési partnerünk</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <figure class="img-frame-1">
                                        <img src="{{ asset('assets/img/contact/placeholder-contact.png') }}" alt="basic">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula. Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac. Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est. Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                    </p>
                                    <a class="btn btn-primary" href="#">Adatok kezelése</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="image-section img-after">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <h2 class="text-white">Részletes süti szabályzatunkat itt olvashatja!</h2>
                </div>
            </div>
        </section>
        <section class="company-goals">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker">A sütik kezeléséről bővebben</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <h3 class="text-highlight-darker">1. Lorem Ipsum</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                            </p>
                            <h3 class="text-highlight-darker">2. Lorem Ipsum</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                            </p>
                            <h3 class="text-highlight-darker">3. Lorem Ipsum</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                            </p>
                            <ul>
                                <li>List here</li>
                                <li>List here</li>
                                <li>List here</li>
                                <li>List here</li>
                                <li>List here</li>
                            </ul>
                            <h3 class="text-highlight-darker">4. Lorem Ipsum</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
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
