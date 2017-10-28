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
                <div class="col-sm-12 text-center">
                    <h2>You may also like</h2>
                </div>
            </div>

			<div class="row the-carousel">
			<?php while (have_posts()) : the_post(); ?>
				
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
	<!-- #related-posts ends -->
<?php endif; ?>