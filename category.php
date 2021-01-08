<?php get_header();
$category = get_queried_object();
?>
    <!-- container start -->
    <div class="container py-5">

        <!--start row -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            if (have_posts()) :
                $catquery = new WP_Query('cat=' . $category->term_id);
                while (have_posts()) : the_post();
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <?php the_post_thumbnail('full', array('class' => 'card-img-top cat-img'));
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
                                </h5>
                                <p class="card-text"><?php echo excerpt(30, "..."); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div><!-- end row -->


        <!-- Add the pagination functions here. -->
        <div class="row mt-5">
            <div class="col">
                <?php
                if (function_exists("bootstrap_pagination")) {
                    bootstrap_pagination();
                }
                ?>
            </div>
        </div>

    </div><!-- end container -->


<?php get_footer(); ?>