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
                    <form action="#" id="contactForm">
                        <ul id="contactErrorContainer" class="error-container"></ul>
                        <div class="row">
                            <div class="col pl-0 pr-0">
                                <div class="row flex-outer">
                                    <div class="col pl-0 mr-1">
                                        <input type="text" id="contactLastName" name="contactLastName" placeholder="*Vezetéknév:" required>
                                    </div>
                                    <div class="col pl-0 mr-1">
                                        <input type="text" id="contactFirstName" name="contactFirstName" placeholder="*Keresztnév:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12 pl-0 mr-1">
                                        <input type="email" id="contactEmail" name="contactEmail" placeholder="*E-mail:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12 pl-0 mr-1">
                                        <input type="tel" id="contactTel" name="contactTel" placeholder="*Telefonszám:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col pl-0 mr-1">
                                        <input type="text" id="contactZipCode" name="contactZipCode" placeholder="*Irányítószám:" required>
                                    </div>
                                    <div class="col pl-0 mr-1">
                                        <input type="text" id="contactCity" name="contactCity" placeholder="*Település:" required>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12 pl-0 mr-1">
                                        <div class="input-file-container">
                                            <input type="file" class="input-file" id="contactUploadFile" multiple>
                                            <label tabindex="0" for="contactUploadFile" class="input-file-trigger">Dokumentum kiválasztása...</label>
                                        </div>
                                        <p class="file-return"></p>
                                    </div>
                                </div>
                                <div class="row flex-outer styled-input--square">
                                    <div class="col-12 pl-0 mr-1">
                                        <div class="styled-input-single">
                                            <input type="checkbox" id="contactAgree" name="contactAgree" required>
                                            <label for="contactAgree">Elfogadom  az adatvédelmi nyilatkozatot</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flex-outer">
                                    <div class="col-12 pl-0 mr-1">
                                        <button type="submit" id="contactSendButton" class="btn-primary btn">Elküld</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="flex-outer row">
                                    <div class="col-12">
                                        <textarea id="contactMessage" name="contactMessage" placeholder="Írja le mit szeretne pontosan..." required></textarea>
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
    <script>
        //form: upload file
        document.querySelector("html").classList.add('js');

        var fileInput  = document.querySelector( ".input-file" ),
            button     = document.querySelector( ".input-file-trigger" ),
            the_return = document.querySelector(".file-return");

        button.addEventListener( "keydown", function( event ) {
            if ( event.keyCode == 13 || event.keyCode == 32 ) {
                fileInput.focus();
            }
        });
        button.addEventListener( "click", function( event ) {
            fileInput.focus();
            return false;
        });
        fileInput.addEventListener( "change", function( event ) {
            the_return.innerHTML = this.value;
        });
    </script>
@endsection

@section('css')
@endsection