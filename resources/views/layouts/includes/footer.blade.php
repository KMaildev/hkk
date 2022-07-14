<footer>

    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <div class="footer-logo"><img src="https://preview.uideck.com/items/nexusplus/assets/img/logo.png"
                                alt=""></div>
                        <div class="textwidget">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur,
                                adipisci velit.</p>
                        </div>
                        <ul class="mt-3 footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Quick Link</h3>
                        <ul class="menu">
                            <li><a href="#">- About Us</a></li>
                            <li><a href="#">- Blog</a></li>
                            <li><a href="#">- Events</a></li>
                            <li><a href="#">- Shop</a></li>
                            <li><a href="#">- FAQ's</a></li>
                            <li><a href="#">- About Us</a></li>
                            <li><a href="#">- Blog</a></li>
                            <li><a href="#">- Events</a></li>
                            <li><a href="#">- Shop</a></li>
                            <li><a href="#">- FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Contact Info</h3>
                        <ul class="contact-footer">
                            <li>
                                <strong>
                                    <i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444
                                    66647</span>
                            </li>
                            <li>
                                <strong><i class="lni-envelope"></i></strong><span><a href="/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="9bf8f4f5effaf8efdbf6faf2f7b5f8f4f6">[email&#160;protected]</a>
                                    <br> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="5d2e282d2d322f291d303c3431733e3230">[email&#160;protected]</a></span>
                            </li>
                            <li>
                                <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St
                                        Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<script src="{{ asset('assets/js/jquery-min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/color-switcher.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>
<script src="{{ asset('assets/js/summernote.js') }}"></script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>


<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>

@yield('script')
</body>

</html>
