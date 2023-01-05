<form action="<?php echo esc_url(home_url('/')) ?>" method="GET">
    <div>
        <label for="search">Search</label>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>">
    </div>
</form>