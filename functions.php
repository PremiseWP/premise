<?php
/**
 * Functions file
 *
 * @package Premise WP Theme
 * @subpackage functions
 */

/**
 * Includes.
 */
require_once 'includes/author-box.php';


if ( class_exists( 'PremiseCPT' ) ) {

	$team_cpt = new PremiseCPT(
		array(
			'post_type_name' => 'premise_team_member',
			'singular' => 'Team Member',
			'plural' => 'Team Members',
			'slug' => 'premise-team-member',
		),
		array(
			'supports' => array( 'thumbnail', 'editor', 'title', 'author' ),
		)
	);
}



if ( ! function_exists( 'premise_theme_scripts' ) ) {
	/**
	 * Enqueue theme's styles and script.
	 */
	function premise_theme_scripts() {
		wp_enqueue_style( 'premise-theme-css', get_template_directory_uri() . '/css/style.min.css' );
		wp_enqueue_script( 'premise-theme-js', get_template_directory_uri() . '/js/script.min.js', array( 'jquery' ) );
	}
	add_action( 'wp_enqueue_scripts', 'premise_theme_scripts' );
}




if ( ! function_exists( 'premise_theme_support' ) ) {
	/**
	 * Premise theme support
	 *
	 * @return void add theme needed support
	 */
	function premise_theme_support() {
		add_theme_support( 'post-thumbnails' );


		add_image_size( 'premise-theme-thumbnail', 1600, 400 );

		/**
		 * Infinite scroll
		 *
		 * @see Dashboard > Jetpack > Settings > Scroll Infinitely setting
		 *
		 * @link http://jetpack.me/support/infinite-scroll/.
		 */
		add_theme_support( 'infinite-scroll', array(
			'container' => 'the-loop-content', // ID of the HTML element to which Infinite Scroll should add additional posts to.
			'footer' => 'blog', // footer parameter helps blend this footer with your theme design. By passing another ID, the infinite scroll footer will match its width so that it fits perfectly in your design. If you pass a false value instead, no new footer would be added.
			'posts_per_page' => 8,
		) );
	}
	add_action( 'after_setup_theme', 'premise_theme_support' );
}





if ( ! function_exists( 'premise_nav_menus' ) ) {
	/**
	 * Register nav manus
	 *
	 * @return void registers our nav menus
	 */
	function premise_nav_menus() {

		register_nav_menus( array(
			'primary' => 'Menu',
		) );
	}
	add_action( 'init', 'premise_nav_menus' );
}



function premise_more_link( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return '<div class="premise-clear-float">'.$link.'</div>';
}
add_filter( 'the_content_more_link', 'premise_more_link' );



/**
 * Add Contact methods to Profile page
 *
 * @param array $profile_fields Profile fields.
 */
function add_contact_methods( $profile_fields ) {

	// Add Twitter field.
	$profile_fields['twitter'] = 'Twitter Username';

	return $profile_fields;
}

add_filter( 'user_contactmethods', 'add_contact_methods' );



function show_post_content( $post_id ) {
	if ( empty( $post_id ) ) {
		return false;
	}

	switch_to_blog( 4 );
	$content = apply_filters( 'the_content', get_post_field( 'post_content', $post_id ) );
	restore_current_blog();
	echo $content;
}

function load_post_content_callback() {
	$post_id = $_POST['post_id'];
	show_post_content( $post_id );
	die();
}

add_action( 'wp_ajax_load_post_content', 'load_post_content_callback' );
add_action( 'wp_ajax_nopriv_load_post_content', 'load_post_content_callback' );







/*
=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=
  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =	  =
 */






/**
 * Calls the class on the post edit screen.
 */
function premise_team_memeber_class() {
	new premise_TM();
}

if ( is_admin() ) {
	add_action( 'load-post.php', 'premise_team_memeber_class' );
	add_action( 'load-post-new.php', 'premise_team_memeber_class' );
}

/**
 * The Class.
 */
class premise_TM {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
	}

	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
		$post_types = array( 'premise_team_member' ); // Limit meta box to certain post types.
		if ( in_array( $post_type, $post_types ) ) {
			add_meta_box(
				'premise_team_member_info'
				,__( 'Team Member Information', '' )
				,array( $this, 'render_meta_box' )
				,$post_type
				,'advanced'
				,'high'
			);
		}
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {

		/**
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['premise_team_member_nonce'] ) ) {
			return $post_id;
		}

		$nonce = $_POST['premise_team_member_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'premise_team_member_box' ) ) {
			return $post_id;
		}

		// If this is an autosave, our form has not been submitted,
		// so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		// Check the user's permissions.
		if ( 'premise_team_member' !== $_POST['post_type'] ) {
			return $post_id;
		}

		/* OK, its safe for us to save the data now. */

		// Sanitize the user input.
		$mydata = $_POST['premise_team_member_meta'];

		// Update the meta field.
		update_post_meta( $post_id, 'premise_team_member_meta', $mydata );
	}


	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'premise_team_member_box', 'premise_team_member_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta( $post->ID, 'premise_team_member_meta', true );

		// Display the form, using the current value.
		echo '<label for="premise_team_member_meta">';
		esc_html_e( 'Description for this field', 'myplugin_textdomain' );
		echo '</label> ';
		echo '<input type="text" id="premise_team_member_meta" name="premise_team_member_meta"';
		echo ' value="' . esc_attr( $value ) . '" size="25" />';
	}
}





































































?>