<?php /* Template Name: Contact */ ?>
<?php get_header();?>


<section class="subpage-banner-section" id="contact">
    <?php getImage(get_field('contact_banner_background'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="content-wrapper">
            <?php the_field('contact_banner_title'); ?>                                                                                       
        </div>
    </div>
</section>
<?php if (get_field('contact_form_description')) : ?>
    <section class="contact-page-content">
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('contact_form_description'); ?>                                                                                      
            </div>
            <div class="row"> 
                <div class="col-lg-6 img-column">
                <?php getImage(get_field('contact_form_img')); ?>
                <div class="image-text">
                <?php the_field('contact_from_imgtxt'); ?>                                                                                      
            </div>
                </div>
                <div class="col-lg-6">
                        <?php if ($formID = get_field('contact_form')) : ?>                
                        <div class="contactus-form">
                            <?php if (get_field('contact_form')) : ?>
                            <div class="content-wrapper"></div>
                            <?php endif; ?>

                                <?php echo do_shortcode('[forminator_form id="' . $formID . '"]'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>           
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>