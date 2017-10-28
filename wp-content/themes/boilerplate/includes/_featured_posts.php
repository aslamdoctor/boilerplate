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

			<div class="col-sm-4">
				<a href="<?php the_permalink();?>" class="the-post">
					<?php
					get_thumb('thumb-360x240', 'post-thumb', 'http://placehold.it/360x240');
					?>
					<span class="post-title"><?php the_title();?></span>
				</a>
				<!-- /.the-post -->
			</div>
			
		<?php endwhile; ?>
		</div>
		<!-- /.the-carousel -->
	</div>
</section>
<!-- #featured-posts ends -->

<?php endif; ?>
		 
<?php wp_reset_query(); ?>