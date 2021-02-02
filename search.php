<?php get_header(); ?>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9">
                <?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
                ?>

                <p>Total results found: <?php echo $total_results; ?> items.</p>
                <hr>

                <?php
                global $query_string;
                wp_parse_str($query_string, $search_query);
                $search = new WP_Query($search_query);
                while ($search->have_posts()) : $search->the_post(); ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5><a href="<?php the_permalink() ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h5>
                            <p class="card-text"><?php echo excerpt(15, "..."); ?></p>
                        </div>
                    </div>


                <?php endwhile; ?>
            </div>
            <div class="col-lg-3">
                <?php if (is_active_sidebar('recent-post')) : ?>
                    <?php dynamic_sidebar('recent-post'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>