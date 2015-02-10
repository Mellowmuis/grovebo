<?php
/*
Template Name: Contactpage
*/
?>

<?php include 'includes/menu-header.php'; ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="u-gridCol9 main-content" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h3><?php the_title(); ?></h3>
				<div class="Content-text">

					<div class="u-gridRow">					
				
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Grovebo</p>
								<p>Noordstraat 6</p>
								<p>4503 AJ Groede</p>
								<p>Email: info@grovebo.nl</p>
								<p>Tel: 0117-372045</p>
							</div>
	
						</div>	
						<div class="u-gridCol8">					
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>	
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

