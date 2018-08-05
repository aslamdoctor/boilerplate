<div class="row">
			
	<?php while (have_posts()) : the_post(); ?>

	<div class="col-md-4">
		<?php get_template_part("includes/_the_post");?>
	</div>

	<?php endwhile;?>

	<?php get_template_part("includes/_nav");?>

</div>