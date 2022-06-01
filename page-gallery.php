<?php
// Template Name: Gallery
get_header(); ?>

<?php get_template_part('partials/masthead'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="category-gallery">

            <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                <div class="choices__inner">
                    <select class="choices__input" hidden="" tabindex="-1" data-choice="active">
                        <option value="">All</option>
                        <option value="carpet-carpet-tile">Carpet & Carpet Tile</option>
                        <option value="hardwood-flooring">Hardwood Flooring</option>
                        <option value="vinyl-flooring">Vinyl Flooring</option>
                    </select>
                    <div class="choices__list choices__list--single">
                        <div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="null" aria-selected="true">All</div>
                    </div>
                </div>
                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                    <input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Please select…" placeholder="">
                    <div class="choices__list" role="listbox">
                        <div id="choices--z3z5-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">All</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); 