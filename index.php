<?php get_header(); ?>

    <div class="container py-5">
        <div class="row">
            <div class="col-9">
                <section id="business">
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


                    <!--start row -->
                    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                        <?php $catquery = new WP_Query('category=3&posts_per_page=3&offset=1'); ?>
                        <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                            <div class="col">
                                <div class="card h-100">
                                    <?php the_post_thumbnail('full', array('class' => 'card-img-top cat-img'));
                                    ?>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
                                        </h5>
                                        <p class="card-text"><?php echo excerpt(15, "..."); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div><!-- end row -->
                </section>

                <section id="life-style">
                    <div class="cat-bar">
                        <h5>Life Style</h5>
                    </div>
                    <!--start row -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <?php $catquery = new WP_Query('category=5&posts_per_page=1&offset=0'); ?>
                            <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                                <div class="col">
                                    <div class="card h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'card-img-top cat-img'));
                                        ?>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
                                            </h5>
                                            <p class="card-text"><?php echo excerpt(60, "..."); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <div class="col-md-6">
 <ul class="list-group list-group-flush">
                            <?php $catquery = new WP_Query('category=5&posts_per_page=3&offset=1'); ?>
                            <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                               
                                    <li class="list-group-item">
                                        <div class="card mb-3 border-0" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <?php the_post_thumbnail('full', array('class' => 'card-img-top post-list-img'));
                                                    ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                        <a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
                                                    </h5>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                               
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                             </ul>  
                        </div>
                    </div><!-- end row -->
                </section>

            </div><!--end col-9 -->

            <div class="col-3">
                <?php if (is_active_sidebar('recent-post')) : ?>
                    <?php dynamic_sidebar('recent-post'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>