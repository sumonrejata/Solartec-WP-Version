    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <?php $about_image =get_field('about_image','option'); ?>
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo $about_image['url'];?>" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <?php 
                        $about_title = get_field('about_title','option');
                        $about_sub_title = get_field('about_sub_title','option');
                        $about_description = get_field('about_description','option');
                        $about_button_text = get_field('about_button_text','option');
                        $about_btn_url = get_field(' about_btn_url','option');
                        ?>
                        <h6 class="text-primary"><?php echo $about_sub_title;?></h6>
                        <h1 class="mb-4"><?php echo $about_title;?></h1>
                        <p><?php echo $about_description;?></p>
                        <?php 
                        $about_list = get_field('about_info_list','option');
                        foreach($about_list as $about_lists){
                            ?>
                            <p><i class="<?php echo $about_lists['about_info_icon'];?> text-primary me-3"></i><?php echo $about_lists['about_info_title'];?></p>
                        <?php } ?>
                       <!--  <p><i class="fa fa-check-circle text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Tempor erat elitr rebum at clita</p> -->
                        <a href="<?php echo $about_btn_url;?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3"><?php echo $about_button_text;?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->