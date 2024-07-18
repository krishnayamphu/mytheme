<?php
get_header();
?>

<main>
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content() ?>
        <?php endwhile; ?>


        <?php
        //echo do_shortcode('[contact-form-7 id="0e82fbe" title="Contact form 1"]');
        ?>
    </div>

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28265.880309098193!2d85.3180416!3d27.6791296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1720612070543!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>