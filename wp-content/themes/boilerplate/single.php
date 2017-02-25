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


    <?php related_posts();?>


    <section id="comments">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Comments</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">Comments will appear here</div><!-- delete this line later -->

                    <?php //comments_template(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- #comments ends -->


<?php endwhile; endif; ?>



<?php get_footer(); ?>