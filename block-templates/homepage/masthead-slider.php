<?php if( have_rows( 'slides' ) ): ?>

    <section class="masthead masthead--homepage">
        <div class="js-masthead-homepage-slider fx-slider">
            <?php $skip_lazy = true; // skip lazy loading for first image to improve paint times
            while( have_rows( 'slides' ) ): the_row(); ?>
                <div class="masthead-slider-item fx-slide">
                    <div class="masthead-wrapper">
                        <div class="masthead-image"><?php echo fx_get_image_tag( get_sub_field( 'background_image' ), 'masthead-slide__img', 'masthead', $skip_lazy ); ?></div>
                        <div class="masthead-content">
                            <div class="container">
                                <div class="masthead-info">
                                    <?php if( get_sub_field( 'subheadline' )  ): ?>
                                        <h5><?php the_sub_field( 'subheadline' ); ?></h5>
                                    <?php endif; ?>     
                                    <?php if( get_sub_field( 'headline' )  ): ?>
                                        <h1><?php the_sub_field( 'headline' ); ?></h1>
                                    <?php endif; ?>      
                                    <?php if( $button = get_sub_field( 'button' )  ): ?>
                                        <a href="<?php echo esc_url( $button['url'] ); ?>" class="btn btn-secondary" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                    <?php endif; ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $skip_lazy = false;
            endwhile; ?>    
        </div>
        <div class="masthead-curve">
            <?php echo fx_get_image_tag( 278, '', 'full', true, [ 'alt' => '' ] ); ?>
        </div>
    </section>    
<?php endif; ?>
