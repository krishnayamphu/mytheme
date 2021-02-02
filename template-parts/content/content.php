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