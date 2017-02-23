<?php
/**
 * Content Template
 *
 * @package Simplicity
 */

?>

<article <?php post_class( 'pwps-post pwp-clear-float' ); ?>>

	<div class="pwps-post-title">
		<h1><?php the_title(); ?></h1>
	</div>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="pwps-post-thumbnail">
			<?php the_post_thumbnail( 'pwps-thumbnail', array( 'class' => 'premise-responsive' ) ); ?>
		</div>
	<?php endif; ?>

	<div class="pwps-post-content">
		<?php the_content(); ?>
		<div class="hero">
			<div class="hero-inner pwp-align-center">
				<!-- <img src="https://premisewp.com/wp-content/uploads/2015/11/premisewp-logo.png" alt="" width="583" height="145" class="aligncenter size-full wp-image-295 pwp-responsive" /> -->
				<div class="home-logo"><?php include 'img/svg/premise-logo.svg'; ?></div>
				<h5 style="text-align: center;">Build themes and plugins faster!</h5>
				&nbsp;
				<p style="text-align: center;"><a class="pwps-btn-primary pwps-btn-lg" href="https://github.com/PremiseWP/Premise-WP" target="_blank"><i class="fa fa-github"></i> GitHub</a></p>
				&nbsp;
				<p style="text-align: center;"><a style="font-size: 12px; text-decoration: underline;" href="http://premisewp.com/whats-so-special-about-premise-wp/">What's so special?</a></p>
			</div>
			<div id="video-bg"></div>
		</div>
		<div class="featured section">
			<div class="featured-inner section-container">
				<h2>How does Premise WP help you build projects faster?</h2>
				<div class="premise-row">
					<div class="col3 premise-align-center"><a href="#custom-options" class="scroll-to-section">
						<i class="fa fa-cogs"><!-- holds the icon --></i></a>
						<h5>Custom Options</h5>
						<p style="font-size: 1.1em; line-height: 1.4;">Create admin pages and meta boxes, or insert fields anywhere in the backend. Premise WP sets the right hooks and security nonces for you. It also retrieves the field's value automatically.</p>
					</div>
					<div class="col3 premise-align-center"><a href="#quicker-markup" class="scroll-to-section">
						<i class="fa fa-code"><!-- holds the icon --></i></a>
						<h5>Quicker Markup</h5>
						<p style="font-size: 1.1em; line-height: 1.4;">Build your project's front end in no time with Premise WP CSS library. Use classes to create grids and other layouts, make images responsive, or add comon styles like 'vertical-align'. No CSS!</p>
					</div>
					<div class="col3 premise-align-center"><a href="#extendable-js" class="scroll-to-section">
						<i class="fa fa-plug"><!-- holds the icon --></i></a>
						<h5>Extendable JS</h5>
						<p style="font-size: 1.1em; line-height: 1.4;">Insert Google Maps, YouTube videos, or bind animations on scroll. Premise WP comes with a number of jQuery plugins built-in that will help you add custom functionality to your projects easily.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="custom-options" class="section">
			<div class="section-container">
				<h2>Building options in the backend could not be easier</h2>
		&nbsp;

				<div class="pwp-row">
					<div class="span7"><?php echo premise_output_video( 'YtaJdn4gGy0' ); //do_shortcode( '[embed]https://www.youtube.com/watch?v=YtaJdn4gGy0[/embed]' ); ?></div>
					<div class="span5">
						<p>Being able to create options in the backend of Wordpress is key to every project. Being able to do it fast means staying under budget. Being able to do it fast while producing high quality code means happy customers. In a nutshell, we built Premise WP to help you keep your clients happy and cming back!</p>
						<!-- <p><a href="#">Learn more.</a></p> -->
					</div>
				</div>
			</div>
		</div>
		<div id="quicker-markup" class="section">
			<div class="section-container">
				<h2>Quickly create layouts and grids for the front end</h2>
		&nbsp;

				<div class="pwp-row float-right">
					<div class="span7"><!--?prettify linenums=true?--><pre class="prettyprint">&lt;div class="pwp-row"&gt;
	&lt;div class="col3 pwp-align-center"&gt;
		This will create 3 columns
	&lt;/div&gt;
	&lt;div class="col3 pwp-align-center"&gt;
		All with the same size (1/3 of the row)
	&lt;/div&gt;
	&lt;div class="col3 pwp-align-center"&gt;
		Using class 'pwp-align-center'
		centers the text
	&lt;/div&gt;
&lt;/div&gt;</pre>
					</div>
					<div class="span5">
						<p>With Premise WP CSS library you can build pretty much any layout very quickly. For example, this code snippet shows how to create a grid with 3 columns per row all with equal witdths. The text in each column will be aligned in the center too!</p>
					</div>
				</div>
			</div>
		</div>
		<div id="extendable-js" class="section">
			<div class="section-container">
				<h2>Built-in jQuery plugins let you do more!</h2>
		&nbsp;

				<div class="pwp-row">
					<div class="span7">
						<div id="gmap"></div>
					</div>
					<div class="span5">
						<p>Most of the JS functionality that gets added to Premise WP is added as a jQuery plugin. This gives us a lot of flexibility. We can set global defaults for our plugins or set options per instance. You can also extend the plugins to much more. New plugins are constatly added!</p>
						<p>Here's an example of a Google Map.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="split-view section">
			<div class="section-container">
				<h2 style="text-align: center;">Compare the difference</h2>
				<p style="text-align: center; max-width: 750px; margin-left: auto; margin-right: auto;">Check out how much quicker it is to build an options page in the backend of Wordpress using Premise WP.</p>
				<p style="text-align: left;"><?php echo do_shortcode( '[pwp_splitview id="153" height="578px"]' ); ?></p>
			</div>
		</div>
		<!-- End of content -->
	</div>

	<!-- The category -->
	<div class="pwpp-post-category">
		<?php echo ( '' !== (string) get_the_category_list( ', ', 'single', get_the_id() ) )
			 ? '<p>Categories: ' . get_the_category_list( ', ', 'single', get_the_id() ) . '</p>'
			 : ''; ?>
	</div>

	<!-- The tags -->
	<div class="pwpp-post-tags">
		<?php echo ( '' !== (string) get_the_tag_list( '', ', ', '', get_the_id() ) )
			 ? '<p>Tags: ' . get_the_tag_list( '', ', ', '', get_the_id() ) . '</p>'
			 : ''; ?>
	</div>

</article>