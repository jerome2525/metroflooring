<?php get_header(); ?>
<?php echo get_template_part('partials/masthead') ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="blog-single-container section-margins">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-post-image">
                  <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                </div>
                <?php the_content(); ?>
                <?php get_template_part( 'partials/social-share' ); ?>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <?php get_sidebar(); ?>
            </div>
        </div>  
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer();