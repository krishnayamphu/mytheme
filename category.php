<?php
get_header();
?>

<main>
    <div class="container">
        <h4>category.php</h4>
        <?php while (have_posts()) : the_post(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <?php endwhile; ?>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>