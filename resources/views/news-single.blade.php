@extends('layout.app')

@section('content')
    <style type="text/css">
        header.news-single-header {
            background-image: url({{ $news->getThumbnail() }}{{-- Voyager::image($news->thumbnail('cropped')) --}});
        }
    </style>
    <header class="news-single-header header-after subpage-header-size main-header">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>{{ $news->getTitle() }}</h1>
                        <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <p class="header-excerpt">{{ $news->getExcerpt() }}</p>
                    </div>
                </div>
            </div>
        </article>
    </header>
    <main class="main single-page">
        <section class="single-page-section">
            <div class="m-container">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                <div class="col-12 pt-3">
                    {{--<h2 class="text-highlight-darker pt-3">{{ $news->title}}</h2>--}}
                    <small class="pt-3">{{-- {{ $news->author->name }}:--}}{{ $news->getCreatedAt() }}</small>
                    {{--{{var_dump($latest_news)}}--}}
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="pl-0 pt-0">
                                    <p class="lead-text">
                                        {{ $news->getExcerpt() }}
                                        {{--{{ var_dump($latest_news)}}--}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-12">
                        <figure class="img-frame-2 thumbnail-img position-relative z-index-99999">
                            <img src="{{$news->getThumbnail()}}" alt="basic">
                        </figure>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="image3-section img-after">
            <div class="row">
                    <a class="btn btn-primary" href="/hirek">Vissza a hírekhez</a>
            </div>
        </section>
        <section class="article-body">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker">{{ $news->getTitle() }}</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="col-12 pl-0 pt-3 news-body">
                            <p>
                                {!! $news->getBody() !!}
                            </p>
                            <p>Források</p>
                            <ul>
                                <li><a href="#">List here</a></li>
                                <li><a href="#">List here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="gallery-section">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Képgaléria</h2>
                    <div class="row">
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(2)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(3)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(4)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(5)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(6)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(7)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                        <div class="col pl-0">
                            <figure>
                                <img onclick="openModal();currentSlide(8)" class="hover-shadow cursor" src="{{ asset('assets/img/about-us/placeholder-small.png') }}" alt="Galéria">
                            </figure>
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="gellerySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>

                        <div class="gellerySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>

                        <div class="gellerySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>

                        <div class="gellerySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>
                        <div class="gellerySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>
                        <div class="gellerySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>
                        <div class="gellerySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>
                        <div class="gellerySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="{{ asset('assets/img/about-us/placeholder-bigger.png') }}" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="news-single-section latest-news-section">
            <div class="m-container">
                <div class="col-12">
                    <h2>Legfrissebb Híreink</h2>
                </div>
                <div class="row card-row">
                    @foreach($latest_news as $ln)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $ln->getThumbnail()  }}" alt="">
                            <div class="card-body">
                                <a href="/hirek/{{ $ln->getId() }}/{{ $ln->getSlug() }}" class="clickable-card-link"><h5 class="card-title">{{ $ln->getTitle() }}</h5></a>
                                <p class="card-text ellipsis">
                                    {{ $ln->getExcerpt() }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
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
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
@endsection

@section('css')
@endsection
