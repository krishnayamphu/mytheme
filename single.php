<?php get_header(); ?>

    <div class="container p-5">
        <div class="row">
            <div class="col-8">
                <?php
                if (has_post_format('gallery')) {
                    get_template_part('template-parts/content/gallery');
                }else {
                    get_template_part('template-parts/content/content');
                    }
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