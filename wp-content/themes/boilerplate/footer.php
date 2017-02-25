	<section id="footer" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'menu_id' => 'footer-menu',
                        'menu_class' => 'footer-menu',
                        'container' => false
                    ) );
                    ?>
                </div>
                <div class="col-sm-6">
                    <ul class="social-media-menu">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 copyright text-center">
                    &copy; Boilerplate. All rights reserved.
                </div>
            </div>
        </div>
    </section>
    <!-- #footer ends -->

    </main>
    <!-- #panel ends -->

	<?php wp_footer(); ?>

	<!-- Don't forget analytics -->

</body>

</html>
