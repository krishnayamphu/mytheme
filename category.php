<?php get_header();
$category = get_queried_object();
$category_id = $category->term_id;
//echo $category->term_id;
?>
<section>
    <div class="container">

        <div class="row mt-4">
            <div class="col-lg-9">
                <h4 class="py-3"><?php echo $category->name ?></h4>
                <div class="row row-cols-1 row-cols-lg-4">
                    <?php
                    if (have_posts()) : $catquery = getCategoryPosts($category_id);
                        while (have_posts()) : the_post(); ?>
                            <div class="col mb-4">
                                <div class="card category h-100">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('small', array('class' => 'card-img-top')); ?>
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    else : _e('Sorry, no posts were found.', 'textdomain');
                    endif; ?>
                </div>


                <div class="row my-3">
                    <div class="col">
                        <?php
                        if (function_exists("bootstrap_pagination")) {
                            bootstrap_pagination();
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>