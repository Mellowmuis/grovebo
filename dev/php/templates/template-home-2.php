<?php
/*
Template Name: home2
*/
?>
<?php include 'includes/menu-header.php'; ?>

<main class="u-gridCol9 main-content">
	<div class="u-gridContainer">
		<div class="u-gridRow content-topbox">
			<article class=" u-girdContainer">
				<div class="u-gridCol4">
					<h4>Welkom op de website van</h4>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/grovebo-blok.png">
					<p>Specialisatie in <br>renovatie en bestrating</p>
				</div>
				<iframe class="u-gridCol8" width="560" height="315" src="//www.youtube.com/embed/1WXWjSBHqEI" frameborder="0" allowfullscreen></iframe>
			</article>
		</div>
		<article class="u-gridRow micheal">
			<div class="Content Content--home" id="post-<?php the_ID(); ?>">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				<?php endwhile; endif; ?>

			</div>

		</article>
	</div>

</main>

<!--close menu-header-->
</div>
</div>
<?php get_footer(); ?>
