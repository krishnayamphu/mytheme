<form action="<?php echo home_url('/'); ?>" method="get">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="s" id="search" value="<?php the_search_query(); ?>">
        <button class="btn btn-outline-secondary" type="submit">
            <i class="bi bi-search"></i>
        </button>
    </div>
</form>