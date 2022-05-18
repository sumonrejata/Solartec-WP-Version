
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <?php
                    $testimonial_title = get_field('testimonial_title','option');
                    $testimonial_sub_title = get_field('testimonial_sub_title','option');
                 ?>
                <h6 class="text-primary"><?php echo $testimonial_sub_title;?></h6>
                <h1 class="mb-4"><?php echo $testimonial_title;?></h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                  $testimonial = null;
                  $testimonial = new WP_query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                  ));
                  if( $testimonial->have_posts() ){
                    while ($testimonial->have_posts() ){
                        $testimonial->the_post();
                        $testimonial_image = get_field('testimonial_image');
                        $testimonial_desig = get_field('testimonial_desig');
                        $testimonial_content = get_field('testimonial_content');
                        $testimonial_icon = get_field('testimonial_icon');
                        ?>

                        <div class="testimonial-item text-center">
                            <div class="testimonial-img position-relative">
                                <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php echo $testimonial_image['url'];?>">
                                <div class="btn-square bg-primary rounded-circle">
                                    <i class="fa fa-quote-left text-white"></i>
                                </div>
                            </div>
                            <div class="testimonial-text text-center rounded p-4">
                                <p><?php echo $testimonial_content;?></p>
                                <h5 class="mb-1"><?php the_title();?></h5>
                                <span class="fst-italic"><?php echo $testimonial_desig;?></span>
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
    </div>
    <!-- Testimonial End -->