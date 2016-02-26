<?php 
/**
 * Content template for tutorials section
 *
 * @package Premise Theme
 * @subpackage Content
 */

$img_url = '';

// if ( has_post_thumbnail() ) :
// 	$img_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
// endif;

?>

<div class="tutorial col3">
	<a href="javascript:;" class="go-to-video tutorial-trigger tutorial-trigger-<?php echo $post->ID; ?>" data-video="0" data-post-id="<?php echo $post->ID; ?>">
		<?php the_title(); ?>
	</a>
</div>