<?php 
/**
 * Template Name: Home
 */

get_header();

the_post();

?>

<section id="hero">
	<div class="container">
		
		<div class="hero-text">
			<h1>Your next project starts with this framework.</h1>
			<div class="hero-cta-wrapper">
				<a href="https://github.com/PremiseWP/Premise-WP/archive/master.zip" target="_blank" class="hero-cta" onclick="ga('send', 'event', 'Buttons', 'play', 'Fall Campaign');">
					NEED IT NOW!
				</a>
			</div>
		</div>

		<div class="hero-image-wrapper">
			<img src="<?php echo get_template_directory_uri() . '/img/iphone.png'; ?>" class="hero-image iphone">
			<img src="<?php echo get_template_directory_uri() . '/img/yellow_layer.png'; ?>" class="hero-image yellow-layer">
			<img src="<?php echo get_template_directory_uri() . '/img/red_layer.png'; ?>" class="hero-image red-layer">
			<img src="<?php echo get_template_directory_uri() . '/img/blue_layer.png'; ?>" class="hero-image blue-layer">
		</div>

	</div>
</section>

<div class="hero-bottom-wrapper">
	<div class="container">
		<p class="triangle-center-down">or learn about it if you must.</p>
	</div>
</div>

<section id="home-content">
	<div><?php the_content(); ?></div>
</section>

<?php get_footer(); ?>