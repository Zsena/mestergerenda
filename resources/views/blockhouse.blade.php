@extends('layout.app')

@section('content')
    <header class="main-header blockhouse-header header-after subpage-primary-header-size">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Gerendaházak</h1>
                        <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris ullamcorper tincidunt turpis, mattis ullamcorper nisl pulvinar quis.
                            Vestibulum quis erat risus. </p>
                    </div>

                </div>
            </div>
        </article>
    </header>
    <main class="main blockhouse-page">
        <section class="first-section">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker mb-0">Mi a gerendaház?</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="col-7 pl-0">
                            <p>
                                <span class="text-highlight">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span> Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est. Phasellus sollicitudin
                                mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                                Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                            </p>
                            <p>
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut, sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem, ullamcorper eget ornare in, mattis sit amet dolor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="b-type-section">
            <div class="m-container">
                <div class="col-12">
                    <h2>Típusok</h2>
                </div>
                <div class="row card-row">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/homepage/design-elements/placeholder.png') }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Típus_1</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                    et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc.
                                    Donec quis erat orci. Mauris massa eros,
                                    sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/homepage/fooldal_referenciahaz.png') }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Típus_2</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                    et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc.
                                    Donec quis erat orci. Mauris massa eros,
                                    sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/homepage/design-elements/placeholder.png') }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Típus_3</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui,
                                    et aliquet ex convallis et. Sed ac mauris imperdiet neque consectetur mattis nec eu nunc.
                                    Donec quis erat orci. Mauris massa eros,
                                    sollicitudin ut arcu quis, vehicula blandit purus. Suspendisse eleifend nunc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="pb-2 pt-3" style="width: 70%; margin: auto;">
                <!--Start of Modal -->
                <div class="btn-modal">
                    <input id="modal__trigger" type="checkbox" />
                    <label for="modal__trigger">Bővebben a típusokról</label>
                    <div class="modal__overlay" role="dialog" aria-labelledby="modal__title" aria-describedby="modal_desc">
                        <div class="modal__wrap">
                            <label for="modal__trigger">&#10006;</label>
                            <h2 id="modal__title">Bővebben a típusokról</h2>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
                            <p id="modal__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.1</p>
                        </div>
                    </div>
                </div>
                <!--End of Modal -->
            </section>
        </section>
        <section class="properties">
            <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight">Szerkezetek</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row pb-2">
                            <div class="horizontal-card">
                                <div class="row pb-2">
                                    <div class="col pl-0">
                                        <p class="text-highlight mb-0">Lorem</p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio aliquet ante lacinia vulputate vel at sem.
                                            Sed dictum varius neque. Quisque congue nisi eu ullamcorper condimentum. Morbi sodales nibh mi, a sollicitudin enim
                                            sollicitudin ac. Suspendisse gravida sem nulla, et tristique neque placerat sed. Vivamus auctor nisi vitae finibus tincidunt.
                                            Etiam et dui nisi. Fusce venenatis ultricies condimentum.
                                        </p>
                                        <p>
                                            Nam venenatis tincidunt neque eu scelerisque. Cras vel tincidunt lectus.
                                            Proin ultrices aliquet justo eu venenatis. Sed finibus, nunc vitae gravida accumsan, augue tortor sodales ante,
                                            nec eleifend tellus sapien et magna. Vivamus dignissim enim in venenatis lobortis.
                                            In hac habitasse platea dictumst. Phasellus pulvinar euismod laoreet.
                                        </p>
                                    </div>
                                    <div class="col">
                                        <figure>
                                            <img class="mr-xl-0" src="{{ asset('assets/img/blockhouse/plans.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="vector-col">
                                        <figure>
                                            <img class="ml-xl-0" src="{{ asset('assets/img/blockhouse/house.png') }}" alt="Vector">
                                        </figure>
                                    </div>
                                    <div class="col-12 pl-0">
                                        <p class="text-highlight">Lorem</p>
                                        <p class="">
                                            ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                            Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci. Mauris massa eros, sollicitudin ut
                                            arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod. Praesent tempor ipsum non urna posuere,
                                            ac convallis orci commodo. Nullam dictum enim vitae turpis placerat vulputate.
                                            Fusce ullamcorper interdum aliquet.
                                        </p>
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="vector-col">
                                        <figure>
                                            <img class="ml-xl-0" src="{{ asset('assets/img/blockhouse/house.png') }}" alt="Vector">
                                        </figure>
                                    </div>
                                    <div class="col-12 pl-0">
                                        <p class="text-highlight">Lorem</p>
                                        <p class="">
                                            ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                            Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci. Mauris massa eros, sollicitudin ut
                                            arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod. Praesent tempor ipsum non urna posuere,
                                            ac convallis orci commodo. Nullam dictum enim vitae turpis placerat vulputate.
                                            Fusce ullamcorper interdum aliquet.
                                        </p>
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="vector-col">
                                        <figure>
                                            <img class="ml-xl-0" src="{{ asset('assets/img/blockhouse/house.png') }}" alt="Vector">
                                        </figure>
                                    </div>
                                    <div class="col-12 pl-0">
                                        <p class="text-highlight">Lorem</p>
                                        <p class="">
                                            ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum accumsan dui, et aliquet ex convallis et.
                                            Sed ac mauris imperdiet neque consectetur mattis nec eu nunc. Donec quis erat orci. Mauris massa eros, sollicitudin ut
                                            arcu quis, vehicula blandit purus. Suspendisse eleifend nunc vel semper euismod. Praesent tempor ipsum non urna posuere,
                                            ac convallis orci commodo. Nullam dictum enim vitae turpis placerat vulputate.
                                            Fusce ullamcorper interdum aliquet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <img class="bottom-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-bottom.png') }}" alt="Design elem">
        </section>
        <section class="technologies position-relative">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-white mb-0">Technológiák</h2>
                    <img class="design-line-right-top" src="{{ asset('assets/img/lines/green-small-verti.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="col-7 pl-0">
                            <p class="text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue, purus orci pharetra arcu, non aliquet nunc diam a est. Phasellus sollicitudin
                                mi eget pretium scelerisque. Quisque vulputate cursus quam, a posuere ante luctus non.
                                Sed sed faucibus ligula, sit amet commodo massa. Morbi et lorem laoreet, auctor tortor ac, congue felis.
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut, sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem, ullamcorper eget ornare in, mattis sit amet dolor.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue,
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut, sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem, ullamcorper eget ornare in, mattis sit amet dolor.
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut, sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem, ullamcorper eget ornare in, mattis sit amet dolor.
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut, sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem, ullamcorper eget ornare in, mattis sit amet dolor.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue,
                            </p>
                            <p class="text-white">
                                Aenean sed ultricies mauris. Mauris vehicula eget elit non auctor. Nunc tempor est a turpis congue,
                                vel eleifend enim tristique. Phasellus maximus, ante ac condimentum aliquet, tortor purus maximus lectus,
                                ut porttitor erat ligula vitae ipsum. Phasellus lorem magna, laoreet eget sagittis ut, sodales id nisi. Vivamus nunc justo,
                                sagittis eu finibus sed, imperdiet a nulla. Cras in lobortis urna. Aenean erat sem, ullamcorper eget ornare in, mattis sit amet dolor.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet ultrices erat, non bibendum ligula.
                                Nunc at tellus vitae libero gravida consequat id sed orci. Morbi maximus odio neque, vitae faucibus dolor gravida ac.
                                Proin volutpat, nisl sit amet sodales congue,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img class="footer-top-elem" src="{{ asset('assets/img/homepage/design-elements/footer-top.png') }}" alt="Design elem">
        </section>
    </main>
@endsection

@section('js')
@endsection

@section('css')
@endsection