<?php
/*
Template Name: App page
*/
?>

<?php include 'includes/menu-header.php'; ?>

	<div class="u-gridCol9 main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<h3><?php the_title(); ?></h3>
				<aside class="u-gridCol4">
					<a href="https://play.google.com/store/apps/details?id=com.wGrovebo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.jpg" class="App-iphone" /></a>
					<a href="https://play.google.com/store/apps/details?id=com.wGrovebo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/playstore.jpg" class="App-iphone" /></a>
				</aside>
				<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					<a href="https://play.google.com/store/apps/details?id=com.wGrovebo">Download de app hier</a>


					<br />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qrcodefinal.png" />

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


