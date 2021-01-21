<!-- STYLE SWITCHER
============================================= -->

    @if($message = Session::get('success'))

         <div class="b-settings-panel active ">
    @else
         <div class="b-settings-panel ">
    @endif
         @include('home.message')
         <div class="settings-section">


            <span>
        Boxed
        </span>
                    <div class="b-switch">
                        <div class="switch-handle"></div>
                    </div>
                    <span>
        Wide
        </span>
                </div>
                <hr class="dashed" style="margin: 15px 0px;">
                <h5>Main Background</h5>
                <div class="settings-section bg-list">
                    <div class="bg-wood_pattern"></div>
                    <div class="bg-shattered"></div>
                    <div class="bg-vichy"></div>
                    <div class="bg-random-grey-variations"></div>
                    <div class="bg-irongrip"></div>
                    <div class="bg-gplaypattern"></div>
                    <div class="bg-diamond_upholstery"></div>
                    <div class="bg-denim"></div>
                    <div class="bg-crissXcross"></div>
                    <div class="bg-climpek"></div>
                </div>
                <hr class="dashed" style="margin: 15px 0px;">
                <h5>Color Scheme</h5>
                <div class="settings-section color-list">
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/blue.css"
                         style="background: #45b5f5"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/brown.css"
                         style="background: #dc8068"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/cyan.css"
                         style="background: #00becc"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/green.css"
                         style="background: #5bb75b"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/orange.css"
                         style="background: #ff7149"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/pink.css"
                         style="background: #fba1a1"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/red.css" style="background: #dc3522"></div>
                    <div data-src="{{asset('assets')}}/restaurant/css/themes/yellow.css"
                         style="background: #fdb813"></div>
                </div>

                <a data-src="css/style.css" class="reset"><span class="bg-wood_pattern">Reset</span></a>

                <div class="btn-settings"></div>
            </div>
            <!-- END STYLE SWITCHER
            ============================================= -->

            <!-- Javascript -->
            <script src="{{asset('assets')}}/restaurant/js/vendor/jquery-1.11.2.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/bootstrap.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/jquery.flexslider-min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/spectragram.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/owl.carousel.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/velocity.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/velocity.ui.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/bootstrap-datepicker.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/bootstrap-clockpicker.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/jquery.magnific-popup.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/isotope.pkgd.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/slick.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/wow.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/animation.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/vegas/vegas.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/jquery.mb.YTPlayer.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/jquery.stellar.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/mc/jquery.ketchup.all.min.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/mc/main.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/vendor/validate.js"></script>
            <script src="{{asset('assets')}}/restaurant/js/reservation.js"></script>
            <!-- Main JS -->
            <script src="{{asset('assets')}}/restaurant/js/main.js"></script>

