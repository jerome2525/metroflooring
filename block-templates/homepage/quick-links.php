<?php if( get_field('quicklinks') ) : ?>
   <?php 
        $quicklinks = get_field('quicklinks');
        $links = $quicklinks['quicklinks'];
   ?>
    <section class="quick-links">
        <div class="container">
            <?php if( $links ): ?> 
                <div class="quick-links-wrapper">
                    <?php foreach( $links as $link ): ?>
                        <div class="quick-links-column">
                            <div class="quick-links-icon">
                                <div class="quick-links-col">
                                    <?php if( $link['icon'] ): ?>
                                        <div><?php echo fx_get_image_tag( $link['icon'], 'hidden-xs-down', 'medium', true, [ 'alt' => '' ] ); ?></div>
                                    <?php endif; ?>      
                                    <div class="links-check"><i class="icon-Icon-Name--10"></i></div>
                                </div>
                            </div>
                            <?php if( $link['text'] ): ?>
                                <div class="quick-links-info"><?php echo $link['text']; ?></div>
                            <?php endif; ?>    
                        </div>
                    <?php endforeach; ?>  
                </div>
            <?php endif; ?>    
        </div>
    </section>
<?php endif; ?>