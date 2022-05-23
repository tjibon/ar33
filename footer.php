<footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="f-text">
                                <P>Arabika Coffee © 2022 All Rights Reserved</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
















        <!-- ============Js Links ===============-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.scrollUp.min.js"></script>
        <script src="./js/parallaxie.js"></script>
        <script src="./js/jquery-v1.8.2.js"></script>
        <script src="./js/jquery-events-frame.js"></script>
        <script src="./js/jparallax.js"></script>
        <script src="./js/custom.js"></script>

        <script>

            $(function () {
                if (jQuery('#parallax').length != 0) {
                    if (jQuery(window).width() > 980) {

                        //apply parallax effect
                        jQuery('#parallax .parallax-layer').parallax(
                            { mouseport: jQuery('#parallax') }
                        );

                        $(window).load(function () {
                            jQuery('#parallax .parallax-layer').css('display', 'block');

                        });
                    }
                }
            });
        </script>

</html>