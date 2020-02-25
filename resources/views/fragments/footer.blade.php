<footer class="mega-footer">
    <div class="m-container">
        <div class="row mega-footer-row">
            <div class="col">
                <h4 class="text-highlight-darker">Főbb oldalak</h4>
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
                <h4 class="text-highlight-darker">Elérhetőségeink</h4>
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
                <h4 class="text-highlight-darker">Híreink</h4>
                <ul class="footer-list">
                    @foreach($footer_news as $l)
                    <li>
                        <a href="/hirek/{{ $l->getId() }}/{{ $l->getSlug() }}">{{ $l->getTitle() }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight-darker">Információk</h4>
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
                        <a href="/">
                            <object class="footer-logo" type="image/svg+xml" width="200" data="{{ asset('assets/img/svg/mestergerenda_logo.svg') }}">
                                Your browser does not support SVG.
                            </object>
                            {{--<img  src="{{ asset('assets/img/homepage/logo-cropped.png') }}" alt="Mestergerenda logó">--}}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight-darker">Hírlevél</h4>
                <p>Iratkozzon fel és kérjen új információkat álmai házára!</p>
                <form action="#" id="newsLetterForm">
                    {{--<ul id="errorContainer" class="error-container"></ul>--}}
                    <ul class="flex-outer styled-input--square">
                        <li>
                            <input type="text" id="newsLetterName" name="newsLetterName" placeholder="*Név:" required>
                        </li>
                        <li class="">
                            <input type="email" id="newsLetterEmail" name="newsLetterEmail" placeholder="*E-mail" required>
                        </li>
                        <li class="sel sel-box--basic">
                            <select id="newsLetterSubject">
                                <option value="">Válasszon</option>
                                <option value="1">Akciók</option>
                                <option value="2">Információk</option>
                                <option value="3">Ajánlatok</option>
                                <option value="4">Ajánlatok</option>
                                <option value="5">Ajánlatok</option>
                            </select>
                        </li>
                        <li class="styled-input-single">
                            <input type="checkbox" id="newsLetterAgree" name="newsLetterAgree" required>
                            <label for="newsLetterAgree">Elfogadom  az adatvédelmi nyilatkozatot</label>
                        </li>
                        <li id="newsLetterAgreeError"></li>
                        <li>
                            <button type="submit" id="newsLetterSubmit" class="btn-primary btn">Feliratkozok</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</footer>
<footer class="sticky-footer">
    <div class="footer-social-links">
        <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="#" title="Google+" target="_blank"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" title="LinkedIn+" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="call-to-action-box">
        <div class="row">
            <div class="col">
               <span class="call-to-action-text">Hívjon minket:</span>
            </div>
            <img class="sticky-footer-line" src="{{ asset('assets/img/homepage/design-elements/vertical-line-bfooter.png') }}" alt="Design elem">
            <div class="col">
                <span><a href="tel:4444">01 0101 0101</a></span>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>


@yield('js')