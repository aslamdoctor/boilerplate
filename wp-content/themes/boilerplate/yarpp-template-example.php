<?php 
/*
YARPP Template: Simple
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>

<?php if (have_posts()):?>
	<section id="related-posts">
		<div class="container">
			<div class="row">
                <div class="col-12 text-center">
                    <h2>You may also like</h2>
                </div>
            </div>

			<div class="row the-carousel">
			<?php while (have_posts()) : the_post(); ?>
				
				<div class="col-md-4">
					<?php get_template_part("includes/_the_post");?>
				</div>
				
			<?php endwhile; ?>
			</div>
			<!-- /.the-carousel -->
		</div>
	</section>
	<!-- #related-posts ends -->
<?php endif; ?>