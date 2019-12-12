 @extends('layout.app')

@section('content')
    <header class="news-subpage-header subpage-header-size main-header">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Hírek</h1>
                        <p>
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
                                        <img class="news-card-img ml-0" src="{{Voyager::image($n->thumbnail('cropped'))}}" alt="Hírek">
                                    </div>
                                    <div class="col">
                                        <div class="news-card-title">
                                            <h4 class="text-highlight-darker">{{ $n->title}}</h4>
                                        </div>
                                        <div class="news-card-text">
                                            <p>
                                                {{ $n->excerpt }}
                                            </p>
                                        </div>
                                        <a class="news-btn" href="#">Bővebben ></a>
                                    </div>
                                </div>
                                <img class="news-bottom-lines" src="{{ asset('assets/img/news/mestergerenda_zold_jobb.png') }}" alt="Design elem">
                            </div>
                            @else
                            <div class="news-card">
                                <div class="row column-reverse">
                                    <div class="col pl-0">
                                        <div class="news-card-title">
                                            <h4 class="text-highlight-darker">{{ $n->title}}</h4>
                                        </div>
                                        <div class="news-card-text">
                                            <p>
                                                {{ $n->excerpt }}
                                            </p>
                                        </div>
                                        <a class="news-btn" href="#">Bővebben ></a>
                                    </div>
                                    <img class="news-bottom-lines second-row-line" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                                    <div class="col">
                                        <img class="news-card-img ml-0" src="{{Voyager::image($n->thumbnail('cropped'))}}" alt="Hírek">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>

                        <div class="pagination">
                            <div class="pagination-container">
                                {{ $news->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>

                        {{--
                        <div class="pagination">
                            <div class="pagination-container">
                                <a href="#">&laquo;</a>
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a class="active" href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">&raquo;</a>
                            </div>
                        </div>
                        --}}
                    </div>
                    <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
                </section>
    </main>
@endsection

@section('js')
@endsection

@section('css')
@endsection
