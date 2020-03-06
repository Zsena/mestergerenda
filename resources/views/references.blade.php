@extends('layout.app')

@section('content')
    <header class="main-header references-header header-after subpage-primary-header-size">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Referenciák</h1>
                        <img class="home-header-svg"
                             src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}"
                             alt="Design elem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ullamcorper tincidunt turpis, mattis ullamcorper nisl pulvinar quis.
                            Vestibulum quis erat risus. </p>
                    </div>

                </div>
            </div>
        </article>
    </header>
    <main class="main references-subpage">
        <section class="references-section">
            <div class="m-container">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}"
                     alt="Design elem">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Top 3 referenciánk</h2>
                    <img class="design-line-top"
                         src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}"
                         alt="Design elem">
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-7 pl-0">
                                    <p class="text-highlight">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet
                                        ante lacinia vulputate vel at sem.
                                        Sed dictum varius neque. Quisque congue nisi eu ullamcorper condimentum. Morbi
                                        sodales nibh mi, a sollicitudin enim sollicitudin ac.
                                        Suspendisse gravida sem nulla, et tristique neque placerat sed. Vivamus auctor
                                        nisi vitae finibus tincidunt. Etiam et dui nisi.
                                        Fusce venenatis ultricies condimentum. Nam venenatis tincidunt neque eu
                                        scelerisque.
                                        Cras vel tincidunt lectus. Proin ultrices aliquet justo eu venenatis. Sed
                                        finibus, nunc vitae gravida accumsan,
                                        augue tortor sodales ante, nec eleifend tellus sapien et magna. Vivamus
                                        dignissim enim in venenatis lobortis.
                                        In hac habitasse platea dictumst. Phasellus pulvinar euismod laoreet.
                                    </p>
                                </div>
                                <div class="col-3">
                                    <figure>
                                        <img class="mr-xl-0"
                                             src="{{ asset('assets/img/about-us/placeholder-small.png') }}"
                                             alt="Referencia">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-7 pl-0">
                                    <p class="text-highlight mb-0">Lorem ipsum</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet
                                        ante lacinia vulputate vel at sem.
                                        Sed dictum varius neque. Quisque congue nisi eu ullamcorper condimentum. Morbi
                                        sodales nibh mi, a sollicitudin enim sollicitudin ac.
                                        Suspendisse gravida sem nulla, et tristique neque placerat sed. Vivamus auctor
                                        nisi vitae finibus tincidunt. Etiam et dui nisi.
                                        Fusce venenatis ultricies condimentum. Nam venenatis tincidunt neque eu
                                        scelerisque.
                                        Cras vel tincidunt lectus. Proin ultrices aliquet justo eu venenatis. Sed
                                        finibus, nunc vitae gravida accumsan,
                                        augue tortor sodales ante, nec eleifend tellus sapien et magna. Vivamus
                                        dignissim enim in venenatis lobortis.
                                        In hac habitasse platea dictumst. Phasellus pulvinar euismod laoreet.
                                    </p>
                                </div>
                                <div class="col-3">
                                    <figure>
                                        <img class="mr-xl-0"
                                             src="{{ asset('assets/img/about-us/placeholder-small.png') }}"
                                             alt="Referencia">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="refProgram">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-7 pl-0">
                                    <p class="text-highlight mb-0">Lorem ipsum</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet
                                        ante lacinia vulputate vel at sem.
                                        Sed dictum varius neque. Quisque congue nisi eu ullamcorper condimentum. Morbi
                                        sodales nibh mi, a sollicitudin enim sollicitudin ac.
                                        Suspendisse gravida sem nulla, et tristique neque placerat sed. Vivamus auctor
                                        nisi vitae finibus tincidunt. Etiam et dui nisi.
                                        Fusce venenatis ultricies condimentum. Nam venenatis tincidunt neque eu
                                        scelerisque.
                                        Cras vel tincidunt lectus. Proin ultrices aliquet justo eu venenatis. Sed
                                        finibus, nunc vitae gravida accumsan,
                                        augue tortor sodales ante, nec eleifend tellus sapien et magna. Vivamus
                                        dignissim enim in venenatis lobortis.
                                        In hac habitasse platea dictumst. Phasellus pulvinar euismod laoreet.
                                    </p>
                                </div>
                                <div class="col-3">
                                    <figure>
                                        <img class="mr-xl-0"
                                             src="{{ asset('assets/img/about-us/placeholder-small.png') }}"
                                             alt="Referencia">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-4 pl-xl-0">
                                    <figure>
                                        <img class="ml-xl-0"
                                             src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}"
                                             alt="Referencia">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-highlight pb-0 mt-0">Referenciaház programunkról bővebben</h3>
                                    <p>
                                        Integer mattis odio id massa efficitur, quis pellentesque est ultricies. In
                                        dictum sollicitudin pulvinar.
                                        Etiam cursus nisi est, non malesuada mi fringilla a. Pellentesque habitant morbi
                                        tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Morbi turpis neque, pharetra sit amet mi nec,
                                        maximus ultrices ligula.
                                        Quisque elementum accumsan arcu, eu aliquet ante suscipit eget. Morbi vitae
                                        turpis consectetur, blandit mi id, pulvinar ex.
                                        Suspendisse a magna nulla. Donec urna augue, commodo sed sapien a, imperdiet
                                        auctor risus. Sed a gravida nunc, vitae egestas ipsum.
                                        Nunc nec iaculis quam. Ut quam tellus, euismod et ullamcorper sodales,
                                        facilisis ut tellus. Vestibulum feugiat id elit ac efficitur. Suspendisse
                                        potenti.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet
                                        ante lacinia vulputate vel at sem. Sed dictum varius neque.
                                        Quisque congue nisi eu ullamcorper condimentum. Morbi sodales nibh mi, a
                                        sollicitudin enim sollicitudin ac.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}"
                 alt="Design elem">
        </section>
        <section class="foorplan-section img-after">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-white">Kialakítás</h2>
                    <div class="row">
                        <div class="col-4 pl-0">
                            <p class="text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non
                                bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque,
                                vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc
                                diam a est. Phasellus sollicitudin
                                mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                                Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor
                                ac, congue felis.
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a
                                turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor
                                purus maximus lectus,
                                ut porttitor erat ligula nővitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut,
                                sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem,
                                ullamcorper eget ornare in, mattis sit amet dolor.
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a
                                turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor
                                purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut,
                                sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem,
                                ullamcorper eget ornare in, mattis sit amet dolor.
                            </p>
                        </div>
                        <div class="col-8">
                            <figure>
                                <img class="" src="{{ asset('assets/img/references/alaprajz.png') }}" alt="Referencia">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery-section">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}"
                 alt="Design elem">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Referenciáink képekben</h2>
                </div>
                <div class="slider-container">
                    <div class="slider">
                        <img class="active" src="https://images.pexels.com/photos/206648/pexels-photo-206648.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Referenciák">
                        <img src="https://images.pexels.com/photos/259618/pexels-photo-259618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Referenciák">
                        <img src="https://images.pexels.com/photos/1365110/pexels-photo-1365110.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Referenciák">
                        <img src="https://images.pexels.com/photos/2996071/pexels-photo-2996071.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Referenciák">
                        <img src="https://images.pexels.com/photos/1878810/pexels-photo-1878810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Referenciák">
                    </div>
                    <nav class="slider-nav">
                        <ul>
                            <li class="arrow">
                                <button class="previous">
                                  <span>
                                    <i class="fas fa-arrow-left"></i>
                                  </span>
                                </button>
                            </li>
                            <li class="arrow">
                                <button class="i-next">
                                  <span>
                                   <i class="fas fa-arrow-right"></i>
                                  </span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{--slider-container end--}}
                <div class="gallery-light-box">
                    <div class="col-12">
                        <h2 class="text-highlight-darker">Képgaléria</h2>
                        <img class="design-line-right-top" src="{{ asset('assets/img/lines/green-small-verti.png') }}"
                             alt="Design elem">
                        <div class="row">
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor"
                                         src="https://images.pexels.com/photos/206648/pexels-photo-206648.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(2)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(3)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(4)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(5)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(6)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(7)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(8)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(9)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(10)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(11)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                            <div class="col pl-0">
                                <figure>
                                    <img onclick="openModal();currentSlide(12)" class="hover-shadow cursor"
                                         src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            <div class="gellerySlides">
                                <div class="numbertext">1 / 12</div>
                                <img src="https://images.pexels.com/photos/206648/pexels-photo-206648.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:100%">
                            </div>

                            <div class="gellerySlides">
                                <div class="numbertext">2 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>

                            <div class="gellerySlides">
                                <div class="numbertext">3 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>

                            <div class="gellerySlides">
                                <div class="numbertext">4 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">5 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">6 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">7 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">8 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">9 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">10 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">11 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>
                            <div class="gellerySlides">
                                <div class="numbertext">12 / 12</div>
                                <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}"
                 alt="Design elem">
        </section>
    </main>
@endsection

@section('js')
    <script>
        //single slider
        const items = document.querySelectorAll('.slider-container .slider img');
        const itemCount = items.length;
        const nextItem = document.querySelector('.i-next');
        const previousItem = document.querySelector('.previous');
        let count = 0;

        function showNextItem() {
            items[count].classList.remove('active');

            if(count < itemCount - 1) {
                count++;
            } else {
                count = 0;
            }

            items[count].classList.add('active');
            console.log(count);
        }

        function showPreviousItem() {
            items[count].classList.remove('active');

            if(count > 0) {
                count--;
            } else {
                count = itemCount - 1;
            }

            items[count].classList.add('active');
            console.log(count);
        }

        function keyPress(e) {
            e = e || window.event;

            if (e.keyCode == '37') {
                showPreviousItem();
            } else if (e.keyCode == '39') {
                showNextItem();
            }
        }

        nextItem.addEventListener('click', showNextItem);
        previousItem.addEventListener('click', showPreviousItem);
        document.addEventListener('keydown', keyPress);

        //modal-slider
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("gellerySlides");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
@endsection

@section('css')
@endsection