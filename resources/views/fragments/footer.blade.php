<footer class="mega-footer">
    <div class="m-container">
        <div class="row">
            <div class="col">
                <h4 class="text-highlight">Rólunk</h4>
                <ul class="footer-list">
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li>
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                    <li>
                        <a href="#">Link 4</a>
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
                        <a href="#">LinkLinkLink 2</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 3</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 4</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight">Híreink</h4>
                <ul class="footer-list">
                    <li>
                        <a href="#">LinkLinkLink 1</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 2</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 3</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 4</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h4 class="text-highlight">Információk</h4>
                <ul class="footer-list">
                    <li>
                        <a href="#">LinkLinkLink 1</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 2</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 3</a>
                    </li>
                    <li>
                        <a href="#">LinkLinkLink 4</a>
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
<script src="{{ asset('assets/js/app.js') }}"></script>

@yield('js')