
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="footer-brand" href="#"><img src="{{ asset('img/Raiffeisen_Logo.svg') }}"><br></a>
                <div class="inner-links">
                    <a target="_blank"
                       href="https://www.raiffeisen.hu/raiffeisen-csoport/raiffeisen-bank-zrt/jogi-nyilatkozatok/adatkezelesi-tajekoztato">Adatkezelési tájékoztató</a>
                    <a target="_blank"
                       href="https://www.raiffeisen.hu/documents/10423/161876/varosi_seta_jatekszabalyzat.pdf">Játékszabályzat</a>
                    <a href="/faq">Gyakran Ismételt Kérdések</a>
                </div>
                <div class="copyright-text">Copyright 2019 &copy; Minden jog fenntartva.</div>

                <div class="icons">
                    <a target="_blank"
                       href="https://www.facebook.com/raiffeisenbankHU"><img src="{{ asset('img/Facebook_black.svg') }}"></a><br class="br_mobile">
                    <a target="_blank"
                       href="https://www.youtube.com/user/RaiffeisenBankHUN"><img src="{{ asset('img/Youtube_black.svg') }}"></a><br class="br_mobile">
                    <a target="_blank"
                       href="https://www.linkedin.com/company/raiffeisen-bank-hungary/"><img src="{{ asset('img/LinkedIN_black.svg') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>


<!-- Bootstrap core JavaScript
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>

<script src="{{ asset('js/app.js?v=2') }}"></script>-->
@yield('js')