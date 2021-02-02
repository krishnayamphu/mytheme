<?php get_header(); ?>

    <div class="container p-5">
        <div class="row">
            <div class="col-8">
                <?php
                if (have_posts()) :while (have_posts()) : the_post();
                    ?>
                    <div class="card">

                        <div class="card-body">
                            <h1 class="card-title">
                                <?php the_title(); ?>
                            </h1>
                            <?php the_post_thumbnail('full', array('class' => 'card-img-top post-img'));
                            ?>
                            <p class="card-text">
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                <?php
                endwhile;
                endif;
                ?>
            </div>
            <div class="col-4">
                <?php if (is_active_sidebar('recent-post')) : ?>
                    <?php dynamic_sidebar('recent-post'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>