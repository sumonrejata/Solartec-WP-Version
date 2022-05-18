<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri();?>/img/favicon.ico" rel="icon">

 
    <?php wp_head();?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <?php 
                $header_right =get_field('header_right_info','option');
                foreach($header_right as $header_rights){
                    //print_r($header_rights);
                ?>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="<?php echo $header_rights['header_icon'];?> text-primary me-2"></small>
                    <small><?php echo $header_rights['header_text'];?></small>
                </div>
            <?php } ?>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <?php 
                $phone_number = get_field('phone_number','option');
                $phone_icon = get_field('phone_icon','option');
                //print_r($phone_icon);
                ?>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="<?php echo $phone_icon;?> text-primary me-2"></small>
                    <small>+880<?php echo $phone_number;?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <?php 
                    $header_social =get_field('header_social_info','option');
                    foreach($header_social as $header_socials){
                    ?>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?php echo $header_socials['header_social_url'];?>">
                        <i class="<?php echo $header_socials['header_social_icon'];?>"></i>
                    </a>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <?php $logo_text=get_field('logo_text','option'); ?>
        <a href="<?php echo get_home_url();?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary"><?php echo $logo_text;?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
           <?php
           wp_nav_menu( array(
                    'menu'              => 'header', // match name to yours
                    'theme_location'    => 'main_menu',
                    'container'         => 'div', // no need to wrap wp_nav_menu manually
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => false,
                    'walker'            => new WP_Bootstrap_Navwalker() // Use different Walker
                ));
                ?>

            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->