<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row py-5">
            <div class="col col-lg-8">
                <article class="post-single">
                    <?php while (have_posts()) : the_post(); ?>
                        <h1 class="mb-4"><?php the_title(); ?></h1>
                        <?php the_post_thumbnail('large', array('class' => 'w-100')); ?>
                        <?php the_content() ?>
                    <?php endwhile; ?>
                </article>
            </div>
            <div class="col col-lg-4">

            </div>
        </div>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>