<?php
/*
Template Name: project-single
*/
?>

<?php include 'includes/menu-header.php'; ?>

	<div class="u-gridCol9 main-content">
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

<?php get_footer(); ?>


