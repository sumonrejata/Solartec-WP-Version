
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <?php
            $service_title = get_field('service_title','option'); 
            $service_sub_title = get_field('service_sub_title','option'); 
            ?>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary"><?php echo $service_sub_title;?></h6>
                <h1 class="mb-4"><?php echo $service_title;?></h1>
            </div>
            <div class="row g-4">
                <?php
                  $our_service = null;
                  $our_service = new WP_query(array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'order'          =>'ASC',
                  ));
                  if( $our_service->have_posts() ){
                    while ($our_service->have_posts() ){
                        $our_service->the_post();
                        $service_button_text = get_field('service_button_text');
                        $service_url = get_field('service_url');
                        $service_icon = get_field('service_icon');
                        ?>

                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded overflow-hidden">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
                                <div class="position-relative p-4 pt-0">
                                    <div class="service-icon">
                                        <i class="<?php echo $service_icon; ?> fa-3x"></i>
                                    </div>
                                    <h4 class="mb-3"><?php the_title();?></h4>
                                    <p><?php echo wp_trim_words(get_the_content(),'15','......');?></p>
                                    <a class="small fw-medium" href="<?php echo  $service_url;?>"><?php echo  $service_button_text;?><i class="fa fa-arrow-right ms-2"></i></a>
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
    </div>
    <!-- Service End -->