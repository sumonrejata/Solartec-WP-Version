<?php get_header();
    /*
        Template Name: Home
    */
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">

            <?php
              $basicpost = null;
              $basicpost = new WP_query(array(
                'post_type' => 'slider',
                'posts_per_page' => -1,
              ));
              if( $basicpost->have_posts() ){
                while ($basicpost->have_posts() ){
                    $basicpost->the_post();
                    $slider_dec = get_post_meta(get_the_ID(),'_moderna_prefix_slider_desc', true);
                     // the_field('slider_btn_url');
                    ?>

                     <div class="owl-carousel-item position-relative" data-dot="<img src='<?php the_post_thumbnail_url(); ?>'>">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="owl-carousel-inner">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h1 class="display-2 text-white animated slideInDown"><?php the_title();?></h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                            <?php the_field('slider_content');?></p>
                                        <a href="<?php the_permalink();?>" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><?php the_field('slider_button_text');?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
              }
              else{
                echo "No Post";
              }
              wp_reset_postdata();
              ?>
        </div>
    </div>
    <!-- Carousel End -->

    <?php get_template_part( 'templates/content', 'counter' ); ?>
    <?php get_template_part( 'templates/content', 'about' ); ?>
    <?php get_template_part( 'templates/content', 'service' ); ?>
    <?php get_template_part( 'templates/content', 'project' ); ?>
    <?php get_template_part( 'templates/content', 'whychouse' ); ?>
    <?php get_template_part( 'templates/content', 'quote' ); ?>
    <?php get_template_part( 'templates/content', 'team' ); ?>
    <?php get_template_part( 'templates/content', 'testimonial' ); ?>




<?php get_footer();?>
    