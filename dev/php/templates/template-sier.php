<?php
/*
Template Name: sier
*/
?>
<?php include 'includes/menu-header.php'; ?>

<main class="u-gridCol9 main-content">
	<div class="u-gridContainer">
		
		<article class="u-gridRow">
			<div class="u-gridCol8">
				<div id="post-<?php the_ID(); ?>">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					<?php endwhile; endif; ?>

				</div>
			</div>
			<div class="u-gridCol4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/grond.png">
			</div>
		</article>
	</div>

</main>

<!--close menu-header-->
</div>
</div>
<?php get_footer(); ?>
