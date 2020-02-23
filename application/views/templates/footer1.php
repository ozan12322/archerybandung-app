<footer class="footer">
            <div class="conainer text-center wow zoomIn">
                <div class="social-icons clearfix">
                    <a class="facebook" href="">
                        <i class="icon-facebook"></i> 
                    </a>

                    <a class="googleplus" href="">
                        <i class="icon-googleplus"></i>
                    </a>

                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    
                    <a href="">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    
                </div> 

                <div class="copyright">
                    <p>Copyright:<a href="http://www.themefisher.com">Themefisher</a>, All Rights Reserved.</p>
                </div>
            </div>
        </footer>


        <!--JavaScripts========================== -->
        
        <script type="text/javascript">
            // event pada saat link
            $('.page-scroll').on('click', function(e){

                // ambil isi href

                var tujuan = $(this).attr('href');

                console.log('ok');

                // tangkap elemen bersangkutan

                var tujuan = $(tujuan);

                // pindahkan scrollnya
                $('html,body').animate({
                    scrollTop: tujuan.offset().top - 50
                }, 1200, 'easeInOutExpo');



                e.preventDefault();
            });
        </script>

        <!-- jQuery -->
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/mdb.min.js"></script>

        <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.11.1.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/owl.carousel.js"></script>
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.justifiedGallery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/main.js"></script>
    </body>
</html>
