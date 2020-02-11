@extends('layout.app')

@section('content')
    <header class="main-header offer-header header-after subpage-primary-header-size">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Árajánlatkérés</h1>
                        <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ullamcorper tincidunt turpis, mattis ullamcorper nisl pulvinar quis.
                            Vestibulum quis erat risus. </p>
                    </div>

                </div>
            </div>
        </article>
    </header>
    <main class="main offer-subpage">
        <section class="form-section">
            <div class="m-container">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Árajánlatkérését itt leadhatja</h2>
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
                    <form action="#" id="contactForm">
                        <ul id="errorContainer" class="error-container"></ul>
                        <div class="row">
                        <div class="col-3">
                            <div class="row flex-outer">
                                <div class="col">
                                    <input type="text" id="lastName" name="lastName" placeholder="*Vezetéknév:" required>
                                </div>
                                <div class="col">
                                    <input type="text" id="firstName" name="firstName" placeholder="*Keresztnév:" required>
                                </div>
                            </div>
                            <div class="row flex-outer">
                                <div class="col-12">
                                    <input type="email" id="email" name="email" placeholder="*E-mail:" required>
                                </div>
                            </div>
                            <div class="row flex-outer">
                                <div class="col-12">
                                    <input type="tel" id="tel" name="tel" placeholder="*Telefonszám:" required>
                                </div>
                            </div>
                            <div class="row flex-outer">
                                <div class="col">
                                    <input type="text" id="zipCode" name="zipCode" placeholder="*Irányítószám:" required>
                                </div>
                                <div class="col">
                                    <input type="text" id="city" name="city" placeholder="*Település:" required>
                                </div>
                            </div>
                            <div class="row flex-outer">
                                <div class="col-12">
                                    <input type="file" id="uploadFile">
                                </div>
                            </div>
                            <div class="row flex-outer">
                                <div class="col-12">
                                    <input type="checkbox" id="agree" name="agree" required>
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
                                    <textarea id="message" name="message" placeholder="Írja le mit szeretne pontosan..." required></textarea>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>

                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="faq-sub-section" id="gyik">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-white">Gyakori Kérdések</h2>
                    <img class="design-line-right-top" src="{{ asset('assets/img/lines/green-small-verti.png') }}" alt="Design elem">
                    <div class="row">
                        <div id="wrapper">
                            <div class="content-row">
                                <!-- Tab links -->
                                <div class="tabs">
                                    <button class="tablinks active" data-tabs="tab-A"><p data-title="GYIK">GYIK</p></button>
                                    <button class="tablinks" data-tabs="tab-B"><p data-title="Lorem">Tab2</p></button>
                                    <button class="tablinks" data-tabs="tab-C"><p data-title="ipsum">Tab3</p></button>
                                    <button class="tablinks" data-tabs="tab-D"><p data-title="dolor">Tab4</p></button>
                                </div>
                                <!-- Tab content -->
                                <div class="wrapper_tabcontent">
                                    <div id="tab-A" class="tabcontent active">
                                        <h3>GYIK</h3>
                                        <div class="content">
                                            <div>
                                                <input type="checkbox" id="question1" name="q"  class="questions">
                                                <label for="question1" class="question">
                                                    Lorem ipsum dolor sit amet?
                                                    <img class="arrow" src="{{ asset('assets/img/icons/arrow-right.png') }}" alt="Nyíl">
                                                </label>
                                                <div class="answers">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                                    Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                                    Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                                    Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                                                    Sed sed faucibus ligula, sit amet commodo massa.
                                                    Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="question2" name="q" class="questions">
                                                <label for="question2" class="question">
                                                    Short?
                                                    <img class="arrow" src="{{ asset('assets/img/icons/arrow-right.png') }}" alt="Nyíl">
                                                </label>
                                                <div class="answers">
                                                    short!
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="question3" name="q" class="questions">
                                                <label for="question3" class="question">
                                                    Lorem ipsum dolor sit amet?
                                                    <img class="arrow" src="{{ asset('assets/img/icons/arrow-right.png') }}" alt="Nyíl">
                                                </label>
                                                <div class="answers">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                                    Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                                    Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                                    Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                                                    Sed sed faucibus ligula, sit amet commodo massa.
                                                    Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="question4" name="q"  class="questions">
                                                <label for="question4" class="question">
                                                    Lorem ipsum dolor sit amet?
                                                    <img class="arrow" src="{{ asset('assets/img/icons/arrow-right.png') }}" alt="Nyíl">
                                                </label>
                                                <div class="answers">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                                    Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                                    Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est.
                                                    Phasellus sollicitudin mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                                                    Sed sed faucibus ligula, sit amet commodo massa.
                                                    Morbi et lorem laoreet, auctor tortor ac, congue felis.
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="question5" name="q" class="questions">
                                                <label for="question5" class="question">
                                                    Short?
                                                    <img class="arrow" src="{{ asset('assets/img/icons/arrow-right.png') }}" alt="Nyíl">
                                                </label>
                                                <div class="answers">
                                                    short!
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="question6" name="q" class="questions">
                                                <label for="question6" class="question">
                                                    Lorem ipsum dolor sit amet?
                                                    <img class="arrow" src="{{ asset('assets/img/icons/arrow-right.png') }}" alt="Nyíl">
                                                </label>
                                                <div class="answers">
                                                    This is the answer!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tabcontent">
                                        <h3>Lorem</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.</p>
                                    </div>
                                    <div id="tab-C" class="tabcontent">
                                        <h3>ipsum</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.</p>
                                    </div>
                                    <div id="tab-D" class="tabcontent">
                                        <h3>dolor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                            Nunc at tellus vitae libero gravida consequat id sed orci.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/green-bottom-element.png') }}" alt="Design elem">
        </section>
    </main>
@endsection

@section('js')
@endsection

@section('css')
@endsection