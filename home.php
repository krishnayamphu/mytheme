<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php get_header() ?>
    <main>
        <section id="tech" class="pt-4">
            <div class="container">
                <h3 class="border-bottom py-3 mb-3">Technology</h3>
                <div class="row row-cols-1 row-cols-lg-4 gy-4">
                    <?php
                    $catquery = getPostsByCategoryName('tech', 4, 0);
                    if ($catquery->have_posts()) :
                        while ($catquery->have_posts()) : $catquery->the_post(); ?>
                            <div class="col">
                                <div class="card post-list h-100">
                                    <?php the_post_thumbnail('small', array('class' => 'w-100 rounded-top')); ?>

                                    <div class="card-body">
                                        <a class="text-decoration-none" href="<?php the_permalink() ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    else : __('No Content');
                    endif; ?>
                </div>
            </div>
        </section>
        <section id="lifestyle" class="pt-4">
            <div class="container">
                <h3 class="border-bottom py-3 mb-3">Life Style</h3>
                <div class="row row-cols-1 row-cols-lg-4 gy-4">
                    <?php
                    $catquery = getPostsByCategoryName('lifestyle', 4, 0);
                    if ($catquery->have_posts()) :
                        while ($catquery->have_posts()) : $catquery->the_post(); ?>
                            <div class="col">
                                <div class="card post-list h-100">
                                    <?php the_post_thumbnail('small', array('class' => 'w-100 rounded-top')); ?>

                                    <div class="card-body">
                                        <a class="text-decoration-none" href="<?php the_permalink() ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    else : __('No Content');
                    endif; ?>
                </div>
            </div>
        </section>
        <section id="sports" class="pt-4">
            <div class="container">
                <h3 class="border-bottom py-3 mb-3">Sports</h3>
                <div class="row row-cols-1 row-cols-lg-4 gy-4">
                    <?php
                    $catquery = getPostsByCategoryName('sports', 4, 0);
                    if ($catquery->have_posts()) :
                        while ($catquery->have_posts()) : $catquery->the_post(); ?>
                            <div class="col">
                                <div class="card post-list h-100">
                                    <?php the_post_thumbnail('small', array('class' => 'w-100 rounded-top')); ?>

                                    <div class="card-body">
                                        <a class="text-decoration-none" href="<?php the_permalink() ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    else : __('No Content');
                    endif; ?>
                </div>
            </div>
        </section>
        <section id="sports" class="py-4">
            <div class="container">
                <h3 class="border-bottom py-3 mb-3">Travels</h3>
                <div class="row row-cols-1 row-cols-lg-4 gy-4">
                    <?php
                    $catquery = getPostsByCategoryName('travels', 4, 0);
                    if ($catquery->have_posts()) :
                        while ($catquery->have_posts()) : $catquery->the_post(); ?>
                            <div class="col">
                                <div class="card post-list h-100">
                                    <?php the_post_thumbnail('small', array('class' => 'w-100 rounded-top')); ?>

                                    <div class="card-body">
                                        <a class="text-decoration-none" href="<?php the_permalink() ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    else : __('No Content');
                    endif; ?>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer() ?>