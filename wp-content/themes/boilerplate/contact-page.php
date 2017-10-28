<?php
/*
 *  Template Name: Contact Page
 */
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title"><?php the_title();?></h1>

                    <?php
                    if ( has_post_thumbnail() ){
                        the_post_thumbnail( 'featured-1200x400', array(
                            'class' =>  'featured-image'
                        ) );
                    }
                    ?>
                    
                    <div class="page-content">
						<div class="well" id="contact-map">
							<img src="http://placehold.it/1140x400" alt="">
						</div>

                        <div class="row">
							<div class="col-sm-6">
								<?php the_content();?>
							</div>
							<div class="col-sm-6">
								<h3>Send Your Message</h3>

								<div class="contact-form">
									<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]');?>
		                        </div>
		                        <!-- /.contact-form -->
							</div>
						</div>
                    </div>
                    <!-- /.page-content -->
                </div>
            </div>
        </div>
    </section>
    <!-- #content ends -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>