<?php
/**
 * Front Page
 *
 * @package Simplicity
 */

get_header();

?>

<section id="pwps-front-page">

	<div class="premise-align-center home-hero">
		<h1>A Wordpress framework built for developers.</h1>
		<h3>Build fully custom themes and plugins faster.</h3>
		<a class="hero-cta pwps-btn pwps-btn-lg" href="https://github.com/PremiseWP/Premise-WP/archive/master.zip" target="_blank">
			<i class="fa fa-github"></i> GitHub
		</a>
	</div>

	<div class="whats-special">
		<h2>What's so special about Premise WP?</h2>
		<div class="premise-row">
			<div class="span4" style="height: 300px;width: 300px;margin-bottom: 30px;">
				<?php echo premise_output_video( 'YtaJdn4gGy0' ); ?>
			</div>
			<p>Aside form being Open Source, Premise WP is maintained by a group of developers that 
			build beautiful things for the web every day leveraging the power of Wordpress. Put quite
			literally, it helps us build s**t faster and we thought we should share it.</p>
			<p><b>Full disclosure -</b> There is no user interface. When you install Premise WP on your Wordpress site you <b>will not</b> see 
			a UI, settings page, or any sort of <a href="https://en.wikipedia.org/wiki/Graphical_user_interface" target="_blank">GUI</a>.
			That's because Premise WP has no settings, it is merely a library of functions and classes that make your live easier as a developer.</p>
		</div>
	</div>

	<?php get_template_part( 'loop' ); ?>

</section>

<?php get_footer(); ?>