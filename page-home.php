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








<?php if (have_rows('areas')) : ?>
    <section class="areas-section">
        <div class="container">
            <?php if (get_field('areas_title')) : ?>
                <div class="content-wrapper"><?php the_field('areas_title'); ?></div>
            <?php endif; ?>
            <div class="row">
                <?php while (have_rows('areas')) : the_row(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="item">
                            <div class="image">
                                <?php getImage(get_sub_field('image'), 'full-image'); ?>
                            </div>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php if (get_sub_field('link')) : ?>
                                <a href="<?php the_field('link'); ?>" target="_blank" class="full-link"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>