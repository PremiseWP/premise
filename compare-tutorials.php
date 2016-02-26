<?php  ?>
<!-- The main "learn more" section -->
<section id="learn-more">
	<!-- Begin compare slider -->
	<div class="compare-wrapper">
		<div class="compare-inner">
			
			<div class="compare-it compare-left" style="background-image: url(<?php echo get_template_directory_uri() . '/img/code.jpg'; ?>);">
				<div class="youtubeVideo-wrapper premise-relative">
					<div class="youtubeVideo premise-absolute">
						<!-- The video goes here -->
						<div id="youtubeVideo"></div>
					</div>
				</div>
			</div>
			<div class="compare-it compare-right compare-front" style="background: #FFFFFF;">
				<div class="compare-handle">
					<a href="javascript:;" class="slide-left"><i class="fa fa-caret-left"></i></a>
					<a href="javascript:;" class="slide-right"><i class="fa fa-caret-right"></i></a>
				</div>
				
				<?php get_template_part( 'loop', 'tutorials' ); ?>
				
			</div>

		</div>
	</div>
</section>