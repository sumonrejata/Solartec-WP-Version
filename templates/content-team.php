<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <?php 
            $team_title = get_field('team_title','option'); 
            $team_sub_title = get_field('team_sub_title','option'); 
            ?>
            <h6 class="text-primary"><?php echo $team_sub_title;?></h6>
            <h1 class="mb-4"><?php echo $team_title;?></h1>
        </div>
        <div class="row g-4">
            <?php
            $team_member = null;
            $team_member = new WP_query(array(
                'post_type' => 'team_member',
                'posts_per_page' => 3,
                'order'         =>'ASC',
            ));
            if( $team_member->have_posts() ){
                while ($team_member->have_posts() ){
                    $team_member->the_post();
                    $team_designation = get_field('team_designation');
                    ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="d-flex">
                                <img class="img-fluid w-75" src="<?php the_post_thumbnail_url('team_mem'); ?>" alt="">
                                <div class="team-social w-25">
                                    <?php
                                    $team_social_info = get_field('team_social_info');
                                    foreach($team_social_info as $team_infos){
                                        ?>
                                        <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="<?php echo $team_infos['team_url'];?>">
                                            <i class="<?php echo $team_infos['team_social_icon'];?>"></i>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5><?php the_title();?></h5>
                                <span><?php echo $team_designation;?></span>
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
<!-- Team End -->