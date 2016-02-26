<?php 
/**
 * Single post
 */

get_header();

if ( have_posts() ) : ?>
	<?php 
	while ( have_posts() ) : the_post(); ?>
	 	<section id="single">
	 		<article <?php post_class(); ?>>
	 			<?php if( has_post_thumbnail() ) : ?>
	 				<div class="post-thumbnail" style="
	 				background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>);"
	 				></div>
	 			<?php endif; ?>
		 		<div class="container">
		 			<div class="the-content">
		 				<div class="the-title">
		 					<h2><?php the_title(); ?></h2>
		 				</div>
		 				<div class="the-excerpt">
		 					<?php the_content(); ?>
		 				</div>
		 			</div>
		 		</div>
	 		</article>
	 	</section>
	<?php 
	endwhile;
else : 
	get_template_part( 'content', 'none' );
endif;

get_footer(); ?>