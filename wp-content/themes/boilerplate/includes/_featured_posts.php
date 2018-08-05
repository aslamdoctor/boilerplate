<?php 			 
// args
$args = array(
	'numberposts' => 6,
	'post_type' => 'post',
	'tag' => 'featured'
);
// get results
$the_query = new WP_Query( $args );	 
?>

<?php if( $the_query->have_posts() ): ?>

<section id="featured-posts">
	<div class="container">
		<div class="row the-carousel">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-md-4 the-slide">
				<?php get_template_part("includes/_the_post");?>
			</div>
			
		<?php endwhile; ?>
		</div>
		<!-- /.the-carousel -->
	</div>
</section>
<!-- #featured-posts ends -->

<?php endif; ?>
		 
<?php wp_reset_query(); ?>