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
                        <?php the_content();?>
                    </div>
                    <!-- /.page-content -->
                </div>
            </div>
        </div>
    </section>
    <!-- #content ends -->

<?php endwhile; endif; ?>



<?php get_footer(); ?>