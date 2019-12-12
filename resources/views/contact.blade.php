@extends('layout.app')

@section('content')
    <header class="main-header contact-header header-after subpage-primary-header-size">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Kapcsolat</h1>
                        <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ullamcorper tincidunt turpis, mattis ullamcorper nisl pulvinar quis.
                            Vestibulum quis erat risus. </p>
                    </div>

                </div>
            </div>
        </article>
    </header>
    <main class="main contact-page">
        <section class="contact-section">
            <div class="m-container">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Irodánkról</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-7 pl-0">
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
                                                <li class="text-highlight">Elérhetőség</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Elérhetőség</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Elérhetőség</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <figure>
                                        <img class="mr-xl-0" src="{{ asset('assets/img/contact/placeholder-contact.png') }}" alt="Kapcsolat">
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
                                    <a class="btn btn-primary" href="#">Érdekel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="map"></section>
        <section class="company-goals">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Lépjen velünk kapcsolatba</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non. Sed sed faucibus ligula,
                                sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.</p>
                        </div>
                    </div>

                    {{--Basic form--}}{{-- TODO -- need a VALIDATION --}}
                    <form action="#">
                        <div class="row">
                            <div class="col-3">
                                <div class="row flex-outer">
                                    <div class="col">
                                        <input type="text" id="lastName" placeholder="*Vezetéknév:" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="firstName" placeholder="*Keresztnév:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col">
                                        <input type="email" id="email" placeholder="*E-mail:" required>
                                    </div>
                                    <div class="col">
                                        <input type="tel" id="tel" placeholder="*Telefonszám:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-3">
                                        <input type="text" id="zipCode" placeholder="*Irányítószám:" required>
                                    </div>
                                    <li class="col-7">
                                        <input type="text" id="zipCode" placeholder="*Település:" required>
                                    </li>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12">
                                        <input type="text" id="street" placeholder="*Utca, Házszám:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-7">
                                        <input type="file" id="uploadFile" required>
                                    </div>
                                    <div class="col-3">
                                        <input type="file" id="uploadFile2" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12">
                                        <input type="checkbox" id="agree">
                                        <label for="agree">Elfogadom  az adatvédelmi nyilatkozatot</label>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12">
                                        <button type="submit" id="sendButton" class="btn-primary btn">Elküld</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="flex-outer row">
                                    <div class="col-12">
                                        <textarea id="message" placeholder="Írja le mit szeretne pontosan..." required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

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