<?php get_header(); ?>

	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1 class="page-title"><?php single_cat_title(); ?></h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1 class="page-title"><?php single_tag_title(); ?></h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1 class="page-title">Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1 class="page-title">Archive for <?php the_time('F, Y'); ?></h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1 class="page-title">Archive for <?php the_time('Y'); ?></h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h1 class="page-title">Author Archive</h1>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1 class="page-title">Blog Archives</h1>
				<?php } ?>
				</div>
			</div>
			
			<?php 	if (have_posts()) :?>
			<?php 	$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<div class="row">

			<?php 	while (have_posts()) : the_post(); ?>

				<div class="col-sm-4" id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink();?>" class="the-post">
						<?
		                if ( has_post_thumbnail() ){
		                	the_post_thumbnail( 'thumb-360x240', array('class' => 'post-thumb' ) );
		                }
		                else{
		                	echo '<img src="http://placehold.it/360x240" class="post-thumb" alt="">';
		                }?>
						<span class="post-date"><?php the_time('F jS, Y') ?></span>
						<span class="post-title"><?php the_title();?></span>
					</a>
					<!-- /.the-post -->
				</div>

			<?php 	endwhile;?>

			</div>

			<?php include (TEMPLATEPATH . '/includes/front/nav.php' ); ?>

			<?php 	else: ?>

			<div class="row">
				<div class="col-sm-12">
					<h2>Nothing found</h2>
				</div>
			</div>

			<?php 	endif; ?>
		</div>
	</section>
	<!-- #posts ends -->

<?php get_footer(); ?>
