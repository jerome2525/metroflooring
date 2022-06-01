<?php if( get_field('sales_image_buttons') ) : ?>
   <?php 
        $sales_image_buttons = get_field('sales_image_buttons');
        $headline = $sales_image_buttons['headline'];
        $subheadline = $sales_image_buttons['subheadline'];
        $description = $sales_image_buttons['description'];
        
        $big_image_box_primary = $sales_image_buttons['big_image_box_primary'];
        $big_image_box_primary_title = $big_image_box_primary['title'];
        $big_image_box_primary_content = $big_image_box_primary['content'];
        $big_image_box_primary_background_image = $big_image_box_primary['background_image'];
        $big_image_box_primary_link_url = $big_image_box_primary['link']['url'] ?? '';
        $big_image_box_primary_link_title = $big_image_box_primary['link']['title'] ?? '';
        $big_image_box_primary_link_target = $big_image_box_primary['link']['target'] ?? '';

        $big_image_box_secondary = $sales_image_buttons['big_image_box_secondary'];
        $big_image_box_secondary_title = $big_image_box_secondary['title'];
        $big_image_box_secondary_content = $big_image_box_secondary['content'];
        $big_image_box_secondary_background_image = $big_image_box_secondary['background_image'];
        $big_image_box_secondary_link_url = $big_image_box_secondary['link']['url'] ?? '';
        $big_image_box_secondary_link_title = $big_image_box_secondary['link']['title'] ?? '';
        $big_image_box_secondary_link_target = $big_image_box_secondary['link']['target'] ?? '';


        $small_image_boxes = $sales_image_buttons['small_image_boxes'];
   ?>
    <section class="half-box-image-text">
        <div class="container">
            <div class="half-box-image-text__heading">
                <?php if( $headline ): ?>
                    <h2><?php echo $headline; ?></h2>
                <?php endif; ?>   
                <?php if( $subheadline ): ?> 
                    <h4><?php echo $subheadline; ?></h4>
                <?php endif; ?>
            </div>
            <div class="row half-box-flex">
                <div class="col-lg-6 half-box-image-text__half half-box-text">
                    <div class="read-more__box container-style">
                        <div class="read-more__content js-read-more more-text" style="-webkit-line-clamp:2">
                            <div class="read-more__wrapper">
                                <?php if( $description ): ?> 
                                    <p><?php echo $description; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <a class="expand js-read-more-expand hidden-sm-up" href="javascript:;">READ MORE</a>
                    </div>
                    <?php if( $big_image_box_primary ): ?>
                        <div class="big-image-box hidden-md-down">
                            <?php if( $big_image_box_primary_link_url ): ?>
                                <a href="<?php echo $big_image_box_primary_link_url; ?>" class="big-image-link" target="<?php echo $big_image_box_primary_link_target; ?>">
                            <?php endif; ?>        
                                <?php if( $big_image_box_primary_background_image ): ?>
                                    <?php echo fx_get_image_tag( $big_image_box_primary_background_image, '', 'large', true, [ 'alt' => $big_image_box_primary_title ] ); ?>
                                <?php endif; ?>       
                                <div class="big-image-box__text">
                                    <?php if( $big_image_box_primary_title ): ?>
                                        <h4><?php echo $big_image_box_primary_title; ?></h4>
                                    <?php endif; ?>   
                                    <?php if( $big_image_box_primary_content ): ?> 
                                        <?php echo $big_image_box_primary_content; ?>
                                    <?php endif; ?> 
                                    <?php if( $big_image_box_primary_link_title ): ?>
                                        <span class="btn btn-secondary"><?php echo $big_image_box_primary_link_title; ?></span>
                                    <?php endif; ?>      
                                </div>
                            <?php if( $big_image_box_primary_link_url ): ?>    
                                </a>
                            <?php endif; ?>    
                        </div>
                    <?php endif; ?>     
                </div>
                <div class="col-lg-6 half-box-image-text__half half-box-img">
                    <div class="row box-flex">
                        <?php if( $big_image_box_primary ): ?>
                            <div class="col-sm-6 col-lg-12 hidden-lg">
                                <div class="big-image-box">
                                    <?php if( $big_image_box_primary_link_url ): ?>
                                        <a href="<?php echo $big_image_box_primary_link_url; ?>" class="big-image-link" target="<?php echo $big_image_box_primary_link_target; ?>">
                                    <?php endif; ?> 
                                        <?php if( $big_image_box_primary_background_image ): ?>
                                            <?php echo fx_get_image_tag( $big_image_box_primary_background_image, '', 'large', true, [ 'alt' => $big_image_box_primary_title ] ); ?>
                                        <?php endif; ?>
                                        <div class="big-image-box__text">
                                            <?php if( $big_image_box_primary_title ): ?>
                                                <h4><?php echo $big_image_box_primary_title; ?></h4>
                                            <?php endif; ?>   
                                            <?php if( $big_image_box_primary_content ): ?> 
                                                <?php echo $big_image_box_primary_content; ?>
                                            <?php endif; ?> 
                                            <?php if( $big_image_box_primary_link_title ): ?>
                                                <span class="btn btn-secondary"><?php echo $big_image_box_primary_link_title; ?></span>
                                            <?php endif; ?> 
                                        </div>
                                    <?php if( $big_image_box_primary_link_url ): ?>    
                                        </a>
                                    <?php endif; ?> 
                                </div>
                            </div>
                        <?php endif; ?>   
                        <?php if( $big_image_box_secondary ): ?> 
                            <div class="col-sm-6 col-lg-12">
                                <div class="big-image-box">
                                    <?php if( $big_image_box_secondary_link_url ): ?>
                                        <a href="<?php echo $big_image_box_secondary_link_url; ?>" class="big-image-link" target="<?php echo $big_image_box_secondary_link_target; ?>">
                                    <?php endif; ?> 
                                        <?php if( $big_image_box_secondary_background_image ): ?>
                                            <?php echo fx_get_image_tag( $big_image_box_secondary_background_image, '', 'large', true, [ 'alt' => $big_image_box_secondary_title ] ); ?>
                                        <?php endif; ?>
                                        <div class="big-image-box__text">
                                            <?php if( $big_image_box_secondary_title ): ?>
                                                <h4><?php echo $big_image_box_secondary_title; ?></h4>
                                            <?php endif; ?>   
                                            <?php if( $big_image_box_secondary_content ): ?> 
                                                <?php echo $big_image_box_secondary_content; ?>
                                            <?php endif; ?> 
                                            <?php if( $big_image_box_secondary_link_title ): ?>
                                                <span class="btn btn-secondary"><?php echo $big_image_box_secondary_link_title; ?></span>
                                            <?php endif; ?> 
                                        </div>
                                    <?php if( $big_image_box_secondary_link_url ): ?>    
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?> 
                    </div>
                    
                    <?php if( $small_image_boxes ): ?>
                        <div class="small-box">
                            <div class="row">
                                <?php foreach( $small_image_boxes as $small_image_box ): ?>
                                    <?php
                                        $title = $small_image_box['title'];
                                        $content = $small_image_box['content'];
                                        $background_image = $small_image_box['background_image'];
                                        $link_url = $small_image_box['link']['url'] ?? ''; 
                                        $link_title = $small_image_box['link']['title'] ?? ''; 
                                        $link_target = $small_image_box['link']['target'] ?? ''; 
                                    ?>
                                    <div class="col-sm-4">
                                        <div class="small-image-box">
                                            <?php if( $link_url ): ?>
                                                <a href="<?php echo $link_url; ?>" class="small-image-link">
                                            <?php endif; ?>        
                                                <?php if( $background_image ): ?>
                                                    <?php echo fx_get_image_tag( $background_image, '', 'medium', true, [ 'alt' => $title ] ); ?>
                                                <?php endif; ?>
                                                <div class="small-image-box__text">
                                                    <?php if( $title ): ?>
                                                        <h4><?php echo $title; ?></h4>
                                                    <?php endif; ?>  
                                                    <?php if( $content ): ?>  
                                                        <p><?php echo $content; ?></p>
                                                    <?php endif; ?>
                                                    <?php if( $link_title ): ?>
                                                        <span class="btn btn-secondary"><?php echo $link_title; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php if( $link_url ): ?>    
                                                </a>
                                            <?php endif; ?>  
                                        </div>
                                    </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>
                    <?php endif; ?>    
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>