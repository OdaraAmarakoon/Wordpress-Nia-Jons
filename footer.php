<footer class="main-footer" id="footer">
	<div class="container">
		
		<div class="logo-wrapper">
			<?php if ($logo = get_field('footer_logo', 'option')) : ?>
			<a href="<?php echo site_url(); ?>">
				<?php getImage($logo, 'footer_logo', get_bloginfo('name'), ''); ?>
			</a>
			<?php endif; ?>
		</div>

		<div class="row">
			<div class="col-lg-3 col">
				<?php if (get_field('sub_topic_1', 'option')) : ?>
					<div class="sub-topics"><?php the_field('sub_topic_1', 'option'); ?></div>
				<?php endif; ?>
				<div class="footer-menu">
                    <div class="menu-wrapper">
                        <nav class="navbar navbar-expand-md p-0" id="menu">
                            <div id="navbarCollapse">
                                <?php
                                $defaults = array(
                                    'menu'            => 'Footer menu',
                                    'container'       => false,
                                    'menu_class'      => 'menu',
                                    'echo'            => true,
                                    'fallback_cb'     => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
                                    'depth'           => 0
                                );
                                wp_nav_menu($defaults);
                                ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

			<div class="col-lg-3 col">
				<?php if (get_field('sub_topic_2', 'option')) : ?>
				<div class="sub-topics"><?php the_field('sub_topic_2', 'option'); ?></div>
				<?php endif; ?>	

				
				<div class="column-wrapper">
				<?php if ($telephone = get_field('telephone_1', 'option')) : ?>
					<div class="contact-row">
					<i class=" fa-solid fa-light fa-phone-volume icon" style="color: #BD08FA;"></i><br>						<a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($email = get_field('email_1', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-regular fa-envelope" style="color: #BD08FA;"></i><br>
						<a href="mailto:<?php echo $email; ?>" class="email"><?php echo $email; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($address = get_field('address_1', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-solid fa-location-dot" style="color: #BD08FA;"></i>
						<p><?php echo nl2br($address); ?></p>
					</div>
				<?php endif; ?>
				</div>
			
			</div>

			<div class="col-lg-3 col">

				<?php if (get_field('sub_topic_3', 'option')) : ?>
				<div class="sub-topics"><?php the_field('sub_topic_3', 'option'); ?></div>
				<?php endif; ?>	
				
				<div class="column-wrapper">
					<?php if ($telephone = get_field('telephone_2', 'option')) : ?>
					<div class="contact-row">
					<i class=" fa-solid fa-light fa-phone-volume icon" style="color: #BD08FA;"></i><br>						<a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($email = get_field('email_2', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-regular fa-envelope" style="color: #BD08FA;"></i><br>
						<a href="mailto:<?php echo $email; ?>" class="email"><?php echo $email; ?></a>
					</div>
				<?php endif; ?>
				<?php if ($address = get_field('address_2', 'option')) : ?>
					<div class="contact-row">
						<i class="fa-solid fa-location-dot" style="color: #BD08FA;"></i>
						<p><?php echo nl2br($address); ?></p>
					</div>
				<?php endif; ?>
				</div>
				
			</div>

			

			<div class="col-lg-3 col">
				<?php if (get_field('sub_topic_4', 'option')) : ?>
				<div class="sub-topics"><?php the_field('sub_topic_4', 'option'); ?></div>
				<?php endif; ?>	

				<?php while (have_rows('office_hours_column', 'option')) : the_row(); ?>
				<?php if (get_sub_field('day') && get_sub_field('time')) : ?>
					<div class="content-wrapper">
						<div class="date_time_column"><?php the_sub_field('day'); ?> 
						<span><?php the_sub_field('time'); ?></span>
					</div>
					</div>
				<?php endif; ?>
				<?php endwhile; ?>
			</div>	
		</div>

		<div class="footer-bottom">
			<?php get_template_part('templates/social', 'media'); ?>

			<div class="copyrights">
				<p class="copyrights-text"><?php echo str_replace('[year]', date('Y'), get_field('copyrights_text', 'option')); ?></p>
				<p class="maya-wrapper"><a href="https://www.maya.lk/" target="_blank">Website By <img src="<?php echo THEME_IMAGES; ?>logo2.png" alt="Maya.lk"></a></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>