<?php get_header(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-9">
            <?php $catquery = new WP_Query('category=3&posts_per_page=1&offset=0'); ?>
            <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

                <div class="card">
                    <div class="card-body">
                        <h1><a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>

                        <?php the_post_thumbnail('full', array('class' => 'card-img-top post-img'));
                        ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div class="col-3">
            <?php if (is_active_sidebar('recent-post')) : ?>
                <?php dynamic_sidebar('recent-post'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>