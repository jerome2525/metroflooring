<section class="masthead masthead--innerpage">
    <div class="masthead--innerpage-wrapper">
       <div class="container">
            <?php if ( is_search() ): ?>
                <h1>Search Results</h1><?php /* different heading type for SEO benefit */ ?>
            <?php elseif ( is_home() ): ?>
                <h1>Blogs</h1><?php /* different heading type for SEO benefit */ ?>
            <?php elseif ( is_404() ) : ?>
                <h1>404: Oops! We can't find the page you're looking for.</h1>
            <?php else : ?>
                <h1><?php the_title(); ?></h1>
            <?php endif; ?>
            <?php
                if( function_exists( 'yoast_breadcrumb' ) ) {
                    yoast_breadcrumb( '<div class="breadcrumbs hidden-sm-down"><p class="hidden-lg"><a href="#">Back</a></p><ul class="hidden-md-down clearfix">', '</ul></div>' );
                }
            ?>
            <!--
          <div class="breadcrumbs">
             <p class="hidden-lg"><a href="#">Back to Hardwood Flooring</a></p>
             <ul class="hidden-md-down clearfix">
                <li><a href="#">Home</a></li>
                <li><a href="#">Hardwood Flooring</a></li>
                <li>Solid Hardwood</li>
             </ul>
          </div>
      -->
       </div>
    </div>
    <div class="inner-masterhead-curve">
        <?php echo fx_get_image_tag( 49 ); ?>
    </div>
</section>

