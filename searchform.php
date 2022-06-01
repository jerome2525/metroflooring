<?php
/**
 * If your form is generated using get_search_form() you do not need to do this,
 * as SearchWP Live Search does it automatically out of the box
 */
?>
<form action="" method="get">
        <input type="text"  placeholder="Search…" name="s" id="s" value="<?php the_search_query(); ?>" data-swplive="true" /> <!-- data-swplive="true" enables SearchWP Live Search -->
        <button type="submit"><i class="icon-search"></i></button>
    </p>
</form>
