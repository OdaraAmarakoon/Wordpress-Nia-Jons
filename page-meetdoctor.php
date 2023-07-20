<?php /* Template Name: Meet Doctor */ ?>
<?php get_header();?>

<section class="subpage-banner-section" id="contact">
    <?php getImage(get_field('contact_banner_background'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="content-wrapper">
            <?php the_field('contact_banner_title'); ?>                                                                                       
        </div>
    </div>
</section>

<?php get_footer(); ?>