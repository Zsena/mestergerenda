<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="color: #fff; height: 80px;">
    <!--
    <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img
                src="{{ asset('img/Raiffeisen_Logo.svg') }}"></a> -->
    <div class="container">

        <button id="navbar-toggler-button"
                class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger {{ request()->is('/') ? 'active' : '' }}" href="/">Hírek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger {{ request()->is('hely*') ? 'active' : '' }}" href="/hely">Rólunk</a>
                </li>
                <li class="nav-item" id="qr_reader_page">
                    <a class="nav-link js-scroll-trigger" href="#">Kapcsolat</a>
                </li>

            </ul>
        </div>
    </div>
</nav>