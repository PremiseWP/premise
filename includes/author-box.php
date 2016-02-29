<?php
/**
 * Author box
 *
 * @package Premise WP Theme
 * @subpackage includes
 */


/**
 * Add Author box after post content
 *
 * @link https://www.tipsandtricks-hq.com/adding-an-author-image-and-bio-box-in-wordpress-5915
 *
 * @param  string $content Post content.
 *
 * @return string          Post content + author box.
 */
function uniqueprefix_author_box( $content ) {

	global $post;

	if ( ! is_single()
		|| ! isset( $post->post_author ) ) {

		return $content;
	}

	$display_name = get_the_author_meta( 'display_name' );

	if ( empty( $display_name ) ) {
		$display_name = get_the_author_meta( 'nickname' );
	}

	$user_description = get_the_author_meta( 'user_description' );

	if ( ! empty( $display_name ) ) {

		$twitter_username = get_the_author_meta( 'twitter' );

		if ( ! empty( $twitter_username ) ) {

			$display_name = '<a href="https://twitter.com/' . $twitter_username . '" target="_blank">' .
				$display_name . '</a>';
		}

		$author_details = '<p class="the-author-name">About ' .	$display_name . '</a></p>';
	}

	if ( ! empty( $user_description ) ) {
		$author_details .= '<div class="the-author-avatar">' .
			get_avatar( get_the_author_meta( 'user_email' ) , 90 ) . '</div>
			<p class="the-author-details">' . nl2br( $user_description ). '</p>';

		$content .= '<div class="the-author">' . $author_details . '</div>';
	}

	return $content;
}

// Executes the 'uniqueprefix_author_box' function below the post content.
add_action( 'the_content', 'uniqueprefix_author_box' );

// Allows HTML within user bio.
remove_filter( 'pre_user_description', 'wp_filter_kses' );
