<?php get_header(); ?>

    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <ul class="list-group">
                    <?php
                    if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>
                        <li class="list-group-item">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>

                            <p><?php echo excerpt(30, "..."); ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>