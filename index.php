<?php 
/**
 * 
 */

get_header();

?>

<section id="content">
	<?php 
	if ( have_posts() ) : ?>
	<div class="the-loop">
		<div class="premise-row">
			<?php 
			while ( have_posts() ) : the_post(); ?>
		 		<article <?php post_class( 'col4 premise-flip' ); ?>>

		 				<div class="the-post-content">
				 			<a href="<?php the_permalink(); ?>" class="the-permalink premise-block">
					 			<?php 
					 			if( has_post_thumbnail() ) : ?>
					 				<div class="post-thumbnail">
					 					<?php the_post_thumbnail( 'full', array( 'class' => 'premise-responsive' ) ); ?>
					 				</div>
					 			<?php endif; ?>
				 				<div class="the-post-title">
					 				<h2><?php the_title(); ?></h2>
					 			</div>
				 			</a>
				 			<span class="the-post-excerpt">
				 				<?php the_content('Read More'); ?>
				 			</span>
				 		</div>

		 		</article>
			<?php 
			endwhile; ?>
		</div>
	</div>
	<?php 
	else : ?>

	<?php 
	endif; ?>
</section>

<?php get_footer(); ?>