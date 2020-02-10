 @extends('layout.app')

@section('content')
    <header class="news-subpage-header subpage-header-size main-header">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Hírek</h1>
                        <p class="header-excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ullamcorper tincidunt turpis
                        </p>
                        <img class="home-header-svg" src="{{ asset('assets/img/news/mestergerenda_barna_jobb.png') }}" alt="Design elem">
                    </div>
                </div>
            </div>
        </article>
    </header>
    <main class="main news-subpage">
        <section class="news">
                    <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                    <div class="m-container">
                        <div class="news-row">
                            @foreach($news as $n)
                            @if($loop->odd)
                            <div class="news-card">
                                <div class="row">
                                    <div class="col pl-0">
                                       {{-- <img class="news-card-img ml-0" src="/storage/{{ $n->image }}" alt="Hírek">--}}
                                        <img class="news-card-img ml-0" src="{{ $n->getThumbnail() }}" alt="Hírek">
                                    </div>
                                    <div class="col">
                                        <div class="news-card-title">
                                            <h4 class="text-highlight-darker">{{ $n->getTitle() }}</h4>
                                        </div>
                                        <div class="news-card-text">
                                            <p class="ellipsis">
                                                {{ $n->getExcerpt() }}
                                            </p>
                                        </div>
                                        <a class="news-btn" href="/hirek/{{ $n->getId() }}/{{ $n->getSlug() }}">Bővebben ></a>
                                    </div>
                                </div>
                                <img class="news-bottom-lines" src="{{ asset('assets/img/news/mestergerenda_zold_jobb.png') }}" alt="Design elem">
                            </div>
                            @else
                            <div class="news-card">
                                <div class="row column-reverse">
                                    <div class="col pl-0 position-relative">
                                        <div class="news-card-title">
                                            <h4 class="text-highlight-darker">{{ $n->getTitle() }}</h4>
                                        </div>
                                        <div class="news-card-text">
                                            <p class="">
                                                {{ $n->getExcerpt() }}
                                            </p>
                                            <img class="news-bottom-lines second-row-line" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                                        </div>
                                        <a class="news-btn" href="/hirek/{{ $n->getId() }}/{{ $n->getSlug() }}">Bővebben ></a>
                                    </div>
                                    <div class="col">
                                        <img class="news-card-img ml-0" src="{{ $n->getThumbnail() }}" alt="Hírek">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>

                        <div class="pagination">
                            <div class="pagination-container">
                                {{ $links[0] }}
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
