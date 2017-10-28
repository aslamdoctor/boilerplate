<div class="row">
			
	<?php while (have_posts()) : the_post(); ?>

	<div class="col-sm-4">
		<a href="<?php the_permalink();?>" class="the-post">
			<?php get_thumb('thumb-360x240', 'post-thumb', 'http://placehold.it/360x240');?>

			<span class="post-date"><?php the_time('F jS, Y') ?></span>
			<span class="post-title"><?php the_title();?></span>
		</a>
		<!-- /.the-post -->
	</div>

	<?php endwhile;?>

	<?php get_template_part("includes/_nav");?>

</div>