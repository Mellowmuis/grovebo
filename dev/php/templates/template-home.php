<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div>
	<div class="u-gridContainer">
			<aside class="u-gridCol3 side-menu">
				<nav>
					<?php include 'includes/navigation.php'; ?>
				</nav>
				<div class="aside-content">
					<h6>Diensten</h6>
					<div class="aside-icon u-gridCol6">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/huis.png"></a>
						<br><a href="#">Bestrating</a>
					</div>
					<div class="aside-icon u-gridCol6">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tegels.png"></a>
						<br><a href="#">Renovatie</a>
					</div>
				</div>
				<div class="aside-content">
					<h6 class="no-padding">Grovebo</h6>
					<p>Noordstraat 6</p>
					<p>4503 AJ Goerde</p>
					<b>Kantoor</b>
					<p>0117-372045 </p>
					<b>Bestrating / grondverzet</b>
					<p>06-13804276</p>
					<b>Renovatie</b>
					<p>06-12399522</p>
				</div>
			</aside>
	
				<?php include 'includes/<?php the_title(); ?>.php'; ?>

	</div>
</div>
<?php get_footer(); ?>
