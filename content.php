<?php
/**
 * Content template
 *
 * @package Premise WP Theme
 */

?>
<article <?php post_class( 'col4 premise-flip' ); ?>>

	<div class="the-post-content">
		<a href="<?php the_permalink(); ?>" class="the-permalink premise-block">
			<?php
			if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail( 'full', array( 'class' => 'premise-responsive' ) ); ?>
				</div>
			<?php endif; ?>
			<div class="the-post-title">
				<h2><?php the_title(); ?></h2>
			</div>
		</a>
		<span class="the-post-excerpt">
			<?php echo apply_filters( 'the_content_more_link', get_the_content( 'Read more' ) );  ?>
		</span>
	</div>

</article>
