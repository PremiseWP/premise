<?php 


?>
<!DOCTYPE html>
<html>
<head>

	<!-- HTML Head -->
	<title><?php wp_title(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<!-- Make Responsive -->
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<?php wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-36643420-3', 'auto');
	  ga('send', 'pageview');

	</script>
	
</head>

<body <?php body_class(); ?>>

<header id="header">
	<div class="container">
		
		<div class="logo">
			<a href="<?php echo get_site_url( 1, '/', 'http' ); ?>">
				<img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" class="premise-responsive premise-block">
			</a>
		</div>

		<div class="navigation">
			<a href="javascript:;" class="nav-toggle">
				<i class="fa fa-bars"></i>
			</a>

			<div class="nav-wrapper">
				<?php 
				$nav = array(
					'theme_location'  => 'primary',
					'container'       => 'nav',
					'echo'            => true,
					'fallback_cb'     => '',
				);

				wp_nav_menu( $nav ); ?>
			</div>
		</div>

	</div>
</header>


<div class="header-bump"></div>