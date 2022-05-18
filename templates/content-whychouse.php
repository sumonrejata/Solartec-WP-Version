
    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <?php
                         $why_choose_sub_title =get_field('why_choose_sub_title','option');
                         $why_choose_title =get_field('why_choose_title','option');
                         $why_choose_deac =get_field('why_choose_deac','option');
                         $why_choose_image =get_field('why_choose_image','option');
                        ?>
                        <h6 class="text-primary"><?php echo $why_choose_sub_title;?></h6>
                        <h1 class="mb-4"><?php echo $why_choose_title;?></h1>
                        <p class="mb-4 pb-2"><?php echo $why_choose_deac;?></p>
                        <div class="row g-4">
                            <?php
                             $why_choose_quality = get_field('why_choose_quality','option');
                             foreach($why_choose_quality as $why_choose){

                             ?>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="<?php echo $why_choose['quality_icon'];?> text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0"><?php echo $why_choose['quality_desc'];?></p>
                                        <h5 class="mb-0"><?php echo $why_choose['quality_title'];?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo $why_choose_image['url'];?>" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
