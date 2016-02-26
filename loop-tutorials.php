<?php 
/**
 * Loop for tutorials
 *
 * @package PremiseTheme
 * @subpackage Loop
 */

switch_to_blog( 4 );

$tutorials = new WP_Query( array( 'post_type' => 'post', 'cat' => 13, 'posts_per_page' => 6 ) );

if ( $tutorials->have_posts() ) : ?>

	<div class="tutorials-wrapper">
		<div class="tutorials">
			<div class="premise-row">

				<?php 
				while( $tutorials->have_posts() ) : $tutorials->the_post();

					get_template_part( 'content', 'tutorials' );

				endwhile; ?>

				<div class="tutorial-post"></div>
		</div>
	</div>

<?php 
else :
echo 'no posts';
endif;

restore_current_blog();

?>