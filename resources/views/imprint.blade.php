@extends('layout.app')

@section('content')
    <header class="main-header single-page-header header-after subpage-primary-header-size">
        <article class="m-container header-layer-container">
            <div class="row">
                <div class="main-layer col">
                    <div class="text-box">
                        <h1>Nyílvános cégadatok</h1>
                        <img class="home-header-svg" src="{{ asset('assets/img/homepage/design-elements/home_header_elem.png') }}" alt="Design elem">
                        <p>Céginformáció jegyzéke alapján</p>
                    </div>

                </div>
            </div>
        </article>
    </header>
    <main class="main single-page">
        <section class="single-page-section">
            <div class="m-container">
                <img class="top-white-elem" src="{{ asset('assets/img/homepage/design-elements/first-sec-top.png') }}" alt="Design elem">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Ismerje meg cégünket</h2>
                    <img class="design-line-top" src="{{ asset('assets/img/homepage/design-elements/vertical-line-brown.png') }}" alt="Design elem">
                    <div class="row">
                        <div class="horizontal-card">
                            <div class="row">
                                <div class="col-7 pl-0 pt-0">
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
                                                <li class="text-highlight">Elérhetőségünk</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Webtárhely adatok</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li class="text-highlight">Webfejlesztési partnerünk</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                                <li>Lorem Ipusum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <figure class="img-frame-2">
                                        <img src="{{ asset('assets/img/contact/placeholder-contact.png') }}" alt="basic">
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
                                    <a class="btn btn-primary" href="/rolunk">Rólunk bővebben</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="company-goals">
            <div class="m-container">
                <div class="col-12">
                    <h2 class="text-highlight-darker">Cégadatok bővebben</h2>
                    <div class="row">
                        <div class="col-12 pl-0">
                            <h3 class="text-highlight-darker">Mestergerenda Faépítészeti Építő és Szolgáltató Korlátolt Felelősségű Társaság</h3>
                            <p>
                                A <a href="https://www.ceginformacio.hu/cr9311611684" target="_blank">Céginformáció.hu</a> adatbázisa szerint a(z) Mestergerenda Faépítészeti Építő és Szolgáltató Korlátolt Felelősségű Társaság Magyarországon bejegyzett vállalkozás.
                            </p>
                            <div class="company-details">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
                                        <h3 class="panel-title"><a class="text-white" href="https://www.ceginformacio.hu/cr9311611684" target="_blank">Céginformációk</a></h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover resp-table-horizontal">
                                            <tbody>
                                                <tr>
                                                    <th>Adószám</th>
                                                    <td>26667522241</td>
                                                </tr>
                                                <tr>
                                                    <th>Cégjegyzékszám</th>
                                                    <td>01 09 338173</td>
                                                </tr>
                                                <tr>
                                                    <th>Teljes név</th>
                                                    <td>Mestergerenda Faépítészeti Építő és Szolgáltató Korlátolt Felelősségű Társaság</td>
                                                </tr>
                                                <tr>
                                                    <th>Rövidített név</th>
                                                    <td>Mestergerenda Faépítészeti Kft.</td>
                                                </tr>
                                                <tr>
                                                    <th>Ország</th>
                                                    <td>Magyarország</td>
                                                </tr>
                                                <tr>
                                                    <th>Település</th>
                                                    <td><a href="http://hu.wikipedia.org/wiki/Budapest" target="blank">Budapest</a></td>
                                                </tr>
                                                <tr>
                                                    <th>Cím</th>
                                                    <td><a href="https://www.google.hu/maps/place/1027+Budapest+F%C5%91+utca+73.+1.+emelet+107.+" target="blank">1027  Budapest, Fő utca 73. 1. emelet 107. </a></td>
                                                </tr>
                                                <tr>
                                                    <th>Web cím</th>
                                                    <td>
                                                        <a href="http://mestergerenda.hu/" target="blank">http://mestergerenda.hu/</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Fő tevékenység</th>
                                                    <td>4120. Lakó- és nem lakó épület építése</td>
                                                </tr>
                                                <tr>
                                                    <th>Alapítás dátuma</th>
                                                    <td>2019.02.26</td>
                                                </tr>
                                                <tr>
                                                    <th>Jegyzett tőke</th>
                                                    <td>
                                                        5 000 000 HUF
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Utolsó pénzügyi beszámoló dátuma</th>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Nettó árbevétel</th>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Nettó árbevétel EUR-ban</th>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Utolsó létszám adat dátuma</th>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Utolsó létszám adat</th>
                                                    <td> fő</td>
                                                </tr>
                                                <tr>
                                                    <th>Tulajdonosok száma</th>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th>Vezetők száma</th>
                                                    <td>1 fő</td>
                                                </tr>
                                                <tr>
                                                    <th>Elérhető pénzügyi beszámolók</th>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12 pl-0 text-center">
                                        <p>Friss céginformációk itt érhetőek el:</p>
                                        <a class="btn btn-primary" href="https://www.ceginformacio.hu/cr9311611684" target="_blank">Tovább</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
