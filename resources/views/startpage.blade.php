<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mestergerenda</title>

        <!-- css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style></style>
    </head>
    <body>
        <nav class="main-nav" id="navbar">
            <ul class="menu m-container">
                <li class="item"><a class="left-menu-item" href="#">Referenciák</a></li>
                <li class="item"><a class="left-menu-item" href="#">Költségek</a></li>
                <li class="item"><a class="left-menu-item" href="#">Árajánlat</a></li>
                <li class="logo"><a href="#"><img src="{{ asset('assets/img/homepage/logo-cropped.png') }}" alt="Mestergerenda logó"></a></li>
                <li class="item"><a href="#">Rólunk</a>
                <li class="item"><a href="#">Hírek</a>
                <li class="item"><a href="#">Alapanyagok</a></li>
                <li class="item"><a href="#">Gerendaházak</a></li>
                {{--<li class="item"><a href="#">Kapcsolat</a>--}}
                <li class="item"><a href="#">Egyéb faépítészet</a>
                <li class="item mobil-projects"><a href="#">Kisteres projektek</a></li>
                <li class="toggle"><i class="fas fa-bars"></i></li>
            </ul>
        </nav>
        <header class="main-header">
            <article class="m-container header-layer-container">
                <div class="row">
                    <div class="main-layer col">
                        <div class="text-box">
                            <h1>Lorem ipsum dolor sit amet</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper
                                tincidunt turpis, mattis ullamcorper nisl pulvinar quis. Vestibulum quis erat risus.
                            </p>
                            <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        </div>
                        <a href="#" class="default btn" type="button">Érdekel</a>
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
                                <h2>Gerendaház</h2>
                                <img class="line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis
                                nec eu nunc. Donec quis erat orci. Mauris massa eros, sollicitudin ut arcu quis,
                                vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                                Praesent tempor ipsum non urna posuere, ac convallis orci commodo.
                                Nullam dictum enim vitae turpis placerat vulputate.
                                Fusce ullamcorper interdum aliquet.
                            </p>
                            <p>
                                Integer auctor nulla id risus scelerisque sollicitudin sed et mi.
                                Donec vitae dapibus enim. Proin ornare venenatis neque a ultrices.
                                Suspendisse placerat enim consequat, blandit mi non, rhoncus mauris.
                                Vivamus quis erat dolor. Fusce convallis metus eget justo euismod, sit amet cursus metus congue.
                                In ante mauris,
                                ultricies eget risus sed, fermentum consequat arcu.
                            </p>
                            <div class="row">
                                <div class="col">
                                    <figure>
                                        <img src="{{ asset('assets/img/homepage/design-elements/vector1.png') }}" alt="Ikon">
                                        <figcaption>Lorem Ipsum</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure>
                                        <img src="{{ asset('assets/img/homepage/design-elements/vector2.png') }}" alt="Ikon">
                                        <figcaption>Lorem Ipsum</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure>
                                        <img src="{{ asset('assets/img/homepage/design-elements/vector3.png') }}" alt="Ikon">
                                        <figcaption>Lorem Ipsum</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure>
                                        <img src="{{ asset('assets/img/homepage/design-elements/vector4.png') }}" alt="Ikon">
                                        <figcaption>Lorem Ipsum</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure>
                                        <img src="{{ asset('assets/img/homepage/design-elements/vector5.png') }}" alt="Ikon">
                                        <figcaption>Lorem Ipsum</figcaption>
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
                                    <a href="#" class="btn btn-primary-inverse clickable-card-link">Érdekel</a>
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
                    <img class="ref-green-line" src="../assets/img/homepage/design-elements/horizontal-green-line.png" alt="Design elem">
                </div>
                <div class="m-container faq-container">
                    <div class="program-text">
                        <h2 class="ref-title">Referenciaház program</h2>
                        <p class="ref-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                            Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci. Mauris massa eros, sollicitudin ut arcu quis,
                            vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                            Praesent tempor ipsum non urna posuere, ac convallis orci commodo. Nullam dictum enim vitae turpis placerat vulputate.
                        </p>
                    </div>
                    <div class="col-12 heading-group">
                        <h2 class="text-highlight-darker">Gyakori kérdések</h2>
                    </div>
                    <div class="row faq-row">
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci. Mauris massa eros,
                                sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                                Praesent tempor ipsum non urna posuere, ac convallis orci commodo.
                                Nullam dictum enim vitae turpis placerat vulputate. Fusce ullamcorper interdum aliquet.
                            </p>
                            <p>
                                <span class="text-highlight">Integer auctor nulla id risus scelerisque sollicitudin sed et mi?</span><br>
                                Donec vitae dapibus enim. Proin ornare venenatis neque a ultrices.
                                Suspendisse placerat enim consequat, blandit mi non, rhoncus mauris. Vivamus quis erat dolor.
                                Fusce convallis metus eget justo euismod, sit amet cursus metus congue. In ante mauris, ultricies eget risus sed,
                                fermentum consequat arcu. Nullam dui neque, porttitor ac pretium ut, varius vel libero. Suspendisse egestas enim sed velit eleifend consectetur.
                                Duis tincidunt urna velit, eget placerat erat blandit sit amet. Fusce aliquet ut felis et maximus. Integer feugiat justo ut
                            </p>
                            <a class="btn btn-secondary" href="#">Gyakori Kérdések</a>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/homepage/fooldal_gyakorikerdesek.png') }}" alt="Gyakori kérdések szekció:Ház kerttel kép">
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
                            <img class="testi-main-img" src="{{ asset('assets/img/homepage/fooldal_rolunkmondtak.png') }}" alt="Rólunk mondták">
                        </div>
                        <div class="col testi-column">
                            <div class="testi-card">
                                <div class="col-12 heading-group">
                                    <h2 class="text-highlight-darker">Rólunk mondták</h2>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                            Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci.
                                            Mauris massa eros, sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                                            Praesent tempor ipsum non urna posuere, ac convallis orci commodo.
                                            Nullam dictum enim vitae turpis placerat vulputate. Fusce ullamcorper interdum aliquet.
                                        </p>
                                        <p class="commas-row">
                                            <em class="text-highlight-darker commas">
                                                <img class="commas-top" src="../assets/img/homepage/design-elements/commas-top.png" alt="Design elem">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                                et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci.
                                                <img class="commas-bottom" src="../assets/img/homepage/design-elements/commas-bottom.png" alt="Design elem">
                                            </em>
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                            Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci.
                                            Mauris massa eros, sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod.
                                        </p>
                                        <a class="btn btn-primary" href="#">Referenciház program</a>
                                    </div>
                                </div>
                            </div>
                            <img class="testi-bottom-lines" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        </div>
                    </div>
                </div>
            </section>
            <section class="news">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                <div class="m-container">
                    <div class="news-row">
                        <div class="row">
                            <div class="col pl-0">
                                <h2 class="text-highlight-darker">Hírek</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet leo ut erat tincidunt,
                                    condimentum egestas libero convallis.
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div class="news-card">
                            <div class="row">
                                <div class="col pl-0">
                                    <img class="news-card-img ml-0" src="{{ asset('assets/img/homepage/placeholder_news.png') }}" alt="Hírek">
                                </div>
                                <div class="col">
                                    <div class="news-card-title">
                                        <h4 class="text-highlight-darker">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class="news-card-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet leo ut erat tincidunt,
                                            condimentum egestas libero convallis.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                        </p>
                                    </div>
                                    <a class="news-btn" href="#">Bővebben ></a>
                                </div>
                            </div>
                            <img class="news-bottom-lines" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        </div>
                        <div class="news-card">
                            <div class="row column-reverse">
                                <div class="col pl-0">
                                    <div class="news-card-title">
                                        <h4 class="text-highlight-darker">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class="news-card-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet leo ut erat tincidunt,
                                            condimentum egestas libero convallis.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                        </p>
                                    </div>
                                    <a class="news-btn" href="#">Bővebben ></a>
                                </div>
                                <img class="news-bottom-lines second-row-line" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                                <div class="col">
                                    <img class="news-card-img ml-0" src="{{ asset('assets/img/homepage/placeholder_news.png') }}" alt="Hírek">
                                </div>
                            </div>
                        </div>
                        <div class="news-card">
                            <div class="row">
                                <div class="col pl-0">
                                    <img class="news-card-img ml-0" src="{{ asset('assets/img/homepage/placeholder_news.png') }}" alt="Hírek">
                                </div>
                                <div class="col">
                                    <div class="news-card-title">
                                        <h4 class="text-highlight-darker">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class="news-card-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet leo ut erat tincidunt,
                                            condimentum egestas libero convallis.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                        </p>
                                    </div>
                                    <a class="news-btn" href="#">Bővebben ></a>
                                </div>
                            </div>
                            <img class="news-bottom-lines" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        </div>
                    </div>
                </div>
                <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
            </section>
        </main>
        <footer class="mega-footer">
            <div class="m-container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-highlight">Rólunk</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="#">Link 1</a>
                            </li>
                            <li>
                                <a href="#">Link 2</a>
                            </li>
                            <li>
                                <a href="#">Link 3</a>
                            </li>
                            <li>
                                <a href="#">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="text-highlight">Elérhetőségeink</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="#">LinkLinkLink 1</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 2</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 3</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="text-highlight">Híreink</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="#">LinkLinkLink 1</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 2</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 3</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="text-highlight">Információk</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="#">LinkLinkLink 1</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 2</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 3</a>
                            </li>
                            <li>
                                <a href="#">LinkLinkLink 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="text-highlight">Hírlevél</h4>
                        <p>Iratkozzon fel és kérjen új információkat álmai házára!</p>
                        <form action="#">
                            <ul class="flex-outer">
                                <li>
                                    <input type="text" id="newsLname" placeholder="*Név:">
                                </li>
                                <li>
                                    <input type="email" id="newsLemail" placeholder="E-mail">
                                </li>
                                <li>
                                    <select id="newsLsubject">
                                        <option value="targy">Tárgy</option>
                                        <option value="1">Akciók</option>
                                        <option value="2">Információk</option>
                                        <option value="3">Ajánlatok</option>
                                    </select>
                                </li>
                                <li>
                                    <input type="checkbox" id="agree">
                                    <label for="agree">Elfogadom  az adatvédelmi nyilatkozatot</label>
                                </li>
                                <li>
                                    <button type="submit" class="btn-primary btn">Feliratkozok</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="sticky-footer">
            <div class="col-12 call-to-action-box">
                <span class="call-to-action-text">Hívjon minket:</span>
                <img class="sticky-footer-line" src="{{ asset('assets/img/homepage/design-elements/vertical-line-bfooter.png') }}" alt="Design elem">
                <span><a href="tel:4444">4444</a></span>
            </div>
        </footer>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>
