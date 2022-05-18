<?php get_header();
    /*
        Template Name: Contact
    */
?>

<?php get_template_part( 'templates/content', 'breadcrumb' ); ?>


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <?php
                         $contact_us_title = get_field('contact_us_title','option'); 
                         $contact_us_sub_title = get_field('contact_us_sub_title','option'); 
                         $contact_us_description = get_field('contact_us_description','option'); 
                        ?>
                        <h6 class="text-primary"><?php echo $contact_us_sub_title; ?></h6>
                        <h1 class="mb-4"><?php echo $contact_us_title; ?></h1>
                        <p class="mb-4"><?php echo $contact_us_description; ?></p>

                        <?php echo do_shortcode('[contact-form-7 id="205" title="Contact Us"]');?>

                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <?php $map_location=get_field('map_location','option'); ?>
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="<?php echo $map_location;?>"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact End -->

<?php get_footer();?>
    