<?php /* Template Name: First Visit */ ?>
<?php get_header();?>

<section class="subpage-banner-section" >
    <?php getImage(get_field('banner_background'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="content-wrapper">
            <?php the_field('banner_title'); ?>                                                                                       
        </div>
    </div>
</section>

<?php if (get_field('visit_content_1')) : ?>
    <section class="firstvisit-page-content section-1">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-5 img-column visit-img1">
                    <?php getImage(get_field('visit_image1')); ?>
                </div>
                <div class="col-lg-7">
                    <div class="content-wrapper section-1-col">
                        <?php the_field('visit_content_1'); ?>                                                                                      
                    </div>            
                </div>
            </div>           
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('visit_content_2')) : ?>
    <section class="firstvisit-page-content section-2">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-7">
                    <div class="content-wrapper section-2-col">
                        <?php the_field('visit_content_2'); ?>                                                                                      
                    </div>            
                </div>
                <div class="col-lg-5 img-column visit-img2">
                    <?php getImage(get_field('visit_image2')); ?>
                </div>
            </div>           
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>
