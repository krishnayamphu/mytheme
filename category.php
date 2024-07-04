<?php
get_header();
?>

<main>
    <div class="container">
        <h4>category.php</h4>
        <div class="row row-cols-1 row-cols-lg-4 gy-4">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col">
                    <div class="card category h-100">
                        <?php the_post_thumbnail('small', array('class' => 'w-100 rounded-top')); ?>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</main>

<?php get_footer() ?>