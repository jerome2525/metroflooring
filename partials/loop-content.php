<?php
	$thumb_id = get_post_thumbnail_id();

	// if no thumb ID, check for placeholder image (from ACF options page)
	if( empty( $thumb_id ) ) {
		$thumb_id = get_field( 'placeholder_image', 'option' );
	}

	$img_tag 	= fx_get_image_tag( $thumb_id, 'blog__img', 'medium' );
	$permalink 	= get_permalink();
	$terms 		= wp_get_object_terms( get_the_ID(), 'category' );
	$excerpt 	= wp_trim_words( get_the_excerpt(), 20, ' &hellip;' );
?>


<div class="col-xxs-12 col-sm-6 col-lg-4 blog-item hidden-md-down">
    <a href="<?php echo esc_url( $permalink ); ?>" class="blog blog--link">
        <div class="blog__top">
            <div class="blog__img-wrap">
            	<?php echo $img_tag; ?>
            </div>
            <div class="blog__details">
                <h4 class="blog__title"><?php the_title(); ?></h4>
                <div class="blog__date"><?php echo get_the_date( 'j F Y' ); ?></div>
                <div class="blog__description">
                    <?php echo $excerpt; ?>
                </div>
            </div>
        </div>
        <div class="blog__bottom">
            <span class="blog__cta">Read more <i class="icon-double-arrow-right"></i></span>
        </div>
    </a>
</div>
