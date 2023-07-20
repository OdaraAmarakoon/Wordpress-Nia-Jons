<?php /* Template Name: Team */ ?>
<?php get_header();?>

<section class="subpage-banner-section">
    <?php getImage(get_field('background_banner'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="content-wrapper">
            <?php the_field('banner_content'); ?>                                                                                       
        </div>
    </div>
</section>

<?php if (get_field('team_gallery')) : ?>
    <section class="contact-content-section">
        <div class="container">
            <div class="content-class">
            <?php the_field('team_content'); ?>
            </div>

            <div class="gallery-wrapper">
            <?php while (have_rows('team_gallery')) : the_row(); ?>
                <div class="image-gallery">                                      
                    <div class="location-img"><?php getImage(get_sub_field('team_img')); ?> </div>              
                    <div class="content-wrappr"><?php the_sub_field('team_content'); ?></div> 
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>