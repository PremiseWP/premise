<?php
/**
 * Index template
 *
 * @package Premise WP Theme
 */

get_header();

?>

<section id="content">
	<?php
	if ( have_posts() ) : ?>
	<div class="the-loop">
		<div class="premise-row" id="the-loop-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php echo get_template_part( 'content' ); ?>
			<?php endwhile; ?>
		</div>
	</div>
	<?php
	else : ?>

	<?php
	endif; ?>
</section>

<?php get_footer(); ?>
