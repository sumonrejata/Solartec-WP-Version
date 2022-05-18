<!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                    <?php 
                    $footer_title = get_field('footer_title','option');
                    ?>
                    <h5 class="text-white mb-4"><?php echo $footer_title;?></h5>
                    <?php $footer_info = get_field('footer_info','option');
                    foreach($footer_info as $footer_infos){
                    ?>
                    <p class="mb-2">
                        <i class="<?php echo $footer_infos['footer_icon'];?> me-3"></i>
                        <?php echo $footer_infos['footer_information'];?>
                    </p>
                    <?php } ?>
                    <div class="d-flex pt-2">
                        <?php 
                        $footer_social = get_field('footer_social','option');
                        foreach($footer_social as $footer_socials){
                        ?>
                        <a class="btn btn-square btn-outline-light btn-social" href="<?php echo $footer_socials['footer_url'];?>"><i class="<?php echo $footer_socials['footer_social_icon'];?>"></i>
                        </a>
                        <?php } ?>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <?php
                   wp_nav_menu( array(
                            //'menu'              => 'header', // match name to yours
                            'theme_location'    => 'footer_menu',
                            // 'container'         => 'div', // no need to wrap wp_nav_menu manually
                            // 'container_class'   => 'collapse navbar-collapse',
                            // 'container_id'      => 'collapse-1',
                            // 'menu_class'        => 'nav navbar-nav',
                            // 'fallback_cb'       => false,
                            // 'walker'            => new WP_Bootstrap_Navwalker() // Use different Walker
                        ));
                     ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Project Gallery</h5>
                    <div class="row g-2">
                        <?php $footer_gallery = get_field('footer_gallery','option');
                        foreach($footer_gallery as $footer_gallerys){
                        ?>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="<?php echo $footer_gallerys['url'];?>" alt="">
                        </div>

                    <?php } ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <?php 
                    $newsletter_title = get_field('newsletter_title','option');
                    $newsletter_description = get_field('newsletter_description','option');
                    ?>
                    <h5 class="text-white mb-4"><?php echo $newsletter_title;?></h5>
                    <p><?php echo $newsletter_description;?></p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <?php
                            echo do_shortcode('[contact-form-7 id="189" title="Footer SingUp"]');
                         ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <?php 
                    $footer_right_text = get_field('footer_right_text','option');
                    $footer_right_url = get_field('footer_right_url','option');
                    ?>
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="<?php echo $footer_right_url;?>"><?php echo $footer_right_text;?></a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <?php 
                        $designed_by =get_field('designed_by','option');
                        $designed_by_url =get_field('designed_by_url','option');
                        $distributed_by =get_field('distributed_by','option');
                        $distributed_by_url =get_field('distributed_by_url','option');
                        ?>
                        Designed By : <a href="<?php echo $designed_by_url;?>"><?php echo $designed_by;?></a>
                        <br>Distributed By: <a href="<?php echo $distributed_by_url;?>" target="_blank"><?php echo $distributed_by;?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php wp_footer();?>
</body>

</html>