<?php /* Template Name: Home */ ?>
<?php get_header();
?>


<!-- banner section -->
<section class="banner-section" id="contact">
    <?php getImage(get_field('banner_background_image'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-wrapper">
                    <?php the_field('banner_heading'); ?>
                    <div class="banner-contact-wrapper">
                        <h6><?php the_field('banner_contact1'); ?></h6>
                        <h6><?php the_field('banner_contact2'); ?></h6>
                    </div>                                                                                      
                </div>
            </div>           
        </div>
    </div>
</section>


<!-- about us section -->
<?php if (get_field('about_content')) : ?>
    <section class="about-section" id="welcome">
        <?php getImage(get_field('about_background_image'), 'full-image'); ?>
        <div class="container">
            <div class="content-wrapper"><?php the_field('about_content'); ?></div>
            <div class="link-btn">
                <a href="#"><?php getImage(get_field('arrow_aboutus')); ?><?php the_field('arrow_text_about'); ?></a>
            </div>
        </div>

    </section>
<?php endif; ?>


<!-- approach section  -->
<?php if (get_field('approach_content')) : ?>
    <section class="approach-section" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <?php getImage(get_field('approach_image')); ?>
                </div>
                <div class="col-lg-6">
                    <div class="squre-shape">
                        <div class="content-wrapper">
                            <?php the_field('approach_content'); ?>
                            <div class="link-btn">
                                <a href="#"><?php getImage(get_field('arrow_approach')); ?><?php the_field('see_more_text'); ?></a>
                            </div>
                        </div>
                        <?php while (have_rows('service_repeater')) : the_row(); ?>
                        <div class="ratings">                        
                            <div class="team-image">
                                <?php getImage(get_sub_field('rating')); ?>
                            </div>                   
                        </div>
                         <?php endwhile; ?>
                        <div class="content-wrapper"><?php the_field('approach_swiper'); ?></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>

<!--services section -->
<?php if (get_field('services_content')) : ?>
    <section class="services-section">
            <div class="content-wrapper">
                <?php the_field('services_content'); ?>
                <div class="row">
                <?php while (have_rows('service_repeater')) : the_row(); ?>
                    <div class="col-lg-4 team-detals">                        
                        <div class="team-image">
                            <?php getImage(get_sub_field('service_images')); ?>
                        </div>
                        <div class="team-img-description">
                            <?php the_sub_field('service_name'); ?>
                        </div>                     
                    </div>
                <?php endwhile; ?>
                    <div class="link-btn">
                        <a href="#"><?php getImage(get_field('service_link_image')); ?><?php the_field('service_link'); ?></a>
                    </div>


                </div>
            </div>
    </section>
<?php endif; ?>

<!--Contact Us  section -->
<?php if (get_field('contact_content')) : ?>
    <section class="contact-section" id="welcome">
        <div class="contact-bground">
        <?php getImage(get_field('contatct_us_image'), 'full-image'); ?>
        </div>
   
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <?php the_field('contact_content'); ?>

                        <div class="link-btn">
                            <a href="#"><?php getImage(get_field('arrow_contact')); ?><?php the_field('contact_link'); ?></a>
                        </div>
                    </div>
                    
                </div>           
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- location Section -->
<?php if (get_field('image_box')) : ?>
    <section class="location-section" id="welcome">
        <div>
        <?php the_field('location_title'); ?>
        </div>
        <div class="container">
            <div class="location-wrapper">
            <?php while (have_rows('image_box')) : the_row(); ?>
                <div class="location-image">                                      
                    <div class="location-img"><?php getImage(get_sub_field('image_1')); ?> </div>              
                    <div class="content-wrappr"><?php the_sub_field('image_1_location'); ?></div> 
                    
                    <div class="link-btn">
                            <a href="#"><?php getImage(get_field('location_arrow')); ?><?php the_field('location_text'); ?></a>
                        </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- appointment section -->

<?php if (get_field('appointment_content')) : ?>
    <section class="appointment-section" id="welcome">
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('appointment_content'); ?>
            
                <div class="link-btn">
                    <a href="#"><?php getImage(get_field('appointment_arrow')); ?><?php the_field('appointment_text'); ?></a>
                </div>
            </div>

            <?php if (have_rows('appointment_swiper')) : ?>
            <div class="swiper" id="partnersSwiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('appointment_swiper')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="swiper-img">
                                <?php getImage(get_sub_field('appointment_image'), 'full-image  bgs'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>    
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- galary section -->

<?php if (get_field('image_grid')) : ?>
    <section class="galary-section" id="welcome">
        <div class="galary-wrapper">
        <?php while (have_rows('image_grid')) : the_row(); ?>
            <div class="galary-image">                                      
                <?php getImage(get_sub_field('galary_image')); ?>               
                <?php the_sub_field('galary_text'); ?>                                 
            </div>
        <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>




<?php get_footer(); ?>