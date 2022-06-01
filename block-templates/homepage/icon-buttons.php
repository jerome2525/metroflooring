<?php if( get_field('icon_buttons') ) : ?>
   <?php 
        $icon_buttons = get_field('icon_buttons');
        $headline = $icon_buttons['headline'];
        $subheadline = $icon_buttons['subheadline'];
        $buttons = $icon_buttons['buttons'];
   ?>
    <section class="fx-accordion fx-accordion js-accordion cards">
        <div class="container">
            <div class="text-center">
                <?php if( $headline ): ?>
                    <h2><?php echo $headline; ?></h2>
                <?php endif; ?>   
                <?php if( $subheadline ): ?> 
                    <p><?php echo $subheadline; ?></p>
                <?php endif; ?>
            </div>
            <?php if( $buttons ): ?>
                <div class="row fx-accordion__panels card-flex <?php echo ( count( $buttons ) > 3 ? ' js-card-slider' : ''); ?>">
                    <?php foreach( $buttons as $button ): ?>
                        <?php 
                            $link_url = $button['link']['url'] ?? ''; 
                            $link_title = $button['link']['title'] ?? ''; 
                            $link_target = $button['link']['target'] ?? '';
                            $title = $button['title'];
                            $icon = $button['icon'];
                            $text = $button['text'];

                        ?>
                        <div class="col-lg-4 col-xxs-12 card-item fx-accordion__panel js-accordion-item is-expanded" data-accordion-id="0">
                            <?php if( $title ): ?>
                                <button class="fx-accordion__panel__toggle js-accordion-headline hidden-sm-up" type="button" data-accordion-id="0"><?php echo $title; ?></button>
                            <?php endif; ?>
                            <div class="card card--static fx-accordion__panel__content">
                                <div class="card__top">
                                    <?php if( $icon ): ?>
                                        <div class="card__img-wrap hidden-xs-down">
                                            <?php echo fx_get_image_tag( $icon, 'card__roun-img', 'medium', true, [ 'alt' => $title ] ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card__details">
                                        <?php if( $title ): ?>
                                            <h4 class="card__title hidden-xs-down"><?php echo $title; ?></h4>
                                        <?php endif; ?>
                                        <?php if( $text ): ?>
                                            <div class="card__description"><?php echo $text; ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <?php if( $link_url && $link_title ): ?>
                                        <a class="card__cta" href="<?php echo $link_url; ?>"><?php echo $link_title; ?> <i class="icon-double-arrow-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>  
                </div>
            <?php endif; ?>    
        </div>
    </section>
<?php endif; ?>