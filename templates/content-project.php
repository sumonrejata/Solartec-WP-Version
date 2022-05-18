
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <?php 
            $protfolio_title = get_field('protfolio_title','option');
            $protfolio_sub_title = get_field('protfolio_sub_title','option');

            ?>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary"><?php echo $protfolio_sub_title;?></h6>
                <h1 class="mb-4"><?php echo $protfolio_title;?></h1>
            </div>

            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <?php $port_cata = get_terms('portfolios');
                          if (!empty($port_cata)) : foreach($port_cata as $port_catagorys) : ?>
                        
                          <li class="mx-2" data-filter=".<?php echo $port_catagorys->slug;?>"><?php echo $port_catagorys->name;?></li>
                          <?php endforeach; endif;?>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <?php
                  $basicpost = null;
                  $basicpost = new WP_query(array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1,
                  ));
                  if( $basicpost->have_posts() ){
                    while ($basicpost->have_posts() ){
                        $basicpost->the_post();
                        $port_cata = get_terms('portfolios');
                        // $categories = get_the_category();
                        
                        ?>

                        <div class="col-lg-4 col-md-6 portfolio-item <?php 
                          $filter_item = get_the_terms(get_the_ID(), 'portfolios');
                          if (!empty($filter_item)) : foreach ($filter_item as $filter_itesho) :
                          echo $filter_itesho->slug.' ';
                          endforeach; endif;
                        ?>">
                            <div class="portfolio-img rounded overflow-hidden">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="pt-3">
                                <p class="text-primary mb-0">
                                    <pre><?php //print_r($port_cata);?></pre>
                                   
                                        <?php 
                                             echo the_terms($post->ID, 'portfolios');
                                        ?>
                                </p>
                                <hr class="text-primary w-25 my-2">
                                <h5 class="lh-base"><?php the_title();?></h5>
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
    <!-- Projects End -->
