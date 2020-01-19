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
        <section class="faq-sub-section" id="gyik">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-white">Gyakori Kérdések</h2>
                    <img class="design-line-right-top" src="{{ asset('assets/img/lines/green-small-verti.png') }}" alt="Design elem">
                    <div class="row">
                        <div data-tabs class="tabs">
                            <div class="tab">
                                <input type="radio" name="tabgroup" id="tab-1" checked>
                                <label for="tab-1">Tab 1</label>
                                <div class="tab__content">
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
                            </div>
                            <div class="tab">
                                <input type="radio" name="tabgroup" id="tab-2">
                                <label for="tab-2">Tab 2</label>
                                <div class="tab__content">
                                    <h4>Tab heading 2</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio cum eveniet excepturi eum provident molestias ad ipsa unde dignissimos illo porro animi earum aliquam perspiciatis id omnis, adipisci incidunt. Qui, beatae. Beatae animi totam obcaecati at quae, iste facere fuga nemo pariatur esse nihil?</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque commodi eos voluptatem numquam pariatur deleniti repellat fugiat eligendi nulla molestiae sunt praesentium vero sequi distinctio error quibusdam maiores natus magnam, explicabo hic sed alias dolores, quis eum! Reprehenderit atque cupiditate dolorum? Saepe, doloribus veniam? Nulla!</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="tabgroup" id="tab-3">
                                <label for="tab-3">Tab 3</label>
                                <div class="tab__content">
                                    <h4>Tab heading 3</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officiis voluptas maiores deserunt ullam aliquam?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, officia accusantium quod fuga porro eius animi earum excepturi omnis! Reprehenderit!</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="tabgroup" id="tab-4">
                                <label for="tab-4">Tab 4</label>
                                <div class="tab__content">
                                    <h4>Tab heading 4</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia exercitationem veritatis vero eaque. Nam totam dolorem sapiente ullam non sed nostrum praesentium voluptatem, ad quam libero deserunt nemo fuga hic repudiandae veritatis cupiditate, mollitia recusandae!</p>
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