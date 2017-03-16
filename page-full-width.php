<?php
/*
	Template Name: Full Width Template
 */
 get_header();
 ?>
  <div class="container">
	[Full Width Template]
	<div class="row">
	  <div class="col-md-12">
		<h2>About Us</h2>
	</div>
	</div>

<div class="row">

		<div class="col-md-4">

		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		</div>


		<div class="col-md-4">
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		</div>


		<div class="col-md-4">
			<?php if ( dynamic_sidebar( 'front-ad' ) ); ?>

		</div>
</div>

<?php get_footer(); ?>
