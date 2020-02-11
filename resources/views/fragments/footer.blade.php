<footer class="mega-footer">
    <div class="m-container">
        <div class="row mega-footer-row">
            <div class="col">
                <h4 class="text-highlight">Főbb oldalak</h4>
                <ul class="footer-list">
                    <li>
                        <a href="/arajanlat">Árajánlatkérés</a>
                    </li>
                    <li>
                        <a href="/költsegek">Költségek</a>
                    </li>
                    <li>
                        <a href="/referenciak">Referenciáink</a>
                    </li>
                    <li>
                        <a href="/kisteres-projektek">Kisteres projektjeink</a>
                    </li>
                    <li>
                        <a href="/rolunk">Kik vagyunk?</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight">Elérhetőségeink</h4>
                <ul class="footer-list">
                    <li>
                        <a href="/kapcsolat">Kapcsolat</a>
                    </li>
                    <li>
                        <a href="mailto:info@mestergerenda.hu">info@mestergerenda.hu</a>
                    </li>
                    <li>
                        <a href="mailto:info@mestergerenda.hu">hello@mestergerenda.hu</a>
                    </li>
                    <li>
                        <a href="tel:06-20-9999-99-99">06-20-9999-99-99</a>
                    </li>
                    <li>
                        <a href="tel:06-20-9999-99-99">06-20-9999-99-88</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight">Híreink</h4>
                <ul class="footer-list">
                    @foreach($footer_news as $l)
                    <li>
                        <a href="/hirek/{{ $l->getId() }}/{{ $l->getSlug() }}">{{ $l->getTitle() }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight">Információk</h4>
                <ul class="footer-list">
                    <li>
                        <a href="/cookie">Cookie szabályzat</a>
                    </li>
                    <li>
                        <a href="/adatkezelesi-szabalyzat">Adatkezelési szabályzat</a>
                    </li>
                    <li>
                        <a href="/cegadatok">Cégadatok</a>
                    </li>
                    <li>
                        <a href="/"><img class="footer-logo" src="{{ asset('assets/img/homepage/logo-cropped.png') }}" alt="Mestergerenda logó"></a>
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
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

@yield('js')