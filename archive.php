<?php get_header();
?>

    <div class="container py-5">
      Archive page
        <hr>

        <!--start row -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            if (have_posts()) :
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
    </div>


<?php get_footer(); ?>