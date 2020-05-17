<?php

/**
 * Block template file: 
 *
 * Carrousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'carrousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-carrousel';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?> {
        /* Add styles that use ACF values here */
    }
</style>


<?php if (have_rows('carrousel_blocks')) : ?>
    <div class="container carrousel-container">
        <div class="row">
            <div class="col-12">
                <div class="carrousel-items">
                    <?php while (have_rows('carrousel_blocks')) : the_row(); ?>
                        <div class="slide">
                            <div class="items d-flex flex-wrap">
                                <?php if (have_rows('dienst')) : ?>
                                    <?php while (have_rows('dienst')) : the_row(); ?>
                                        <div class="col-md-6 col-12 item">
                                            <?php the_sub_field('dienst_content'); ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="prev-slide">
            <svg width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="werk-met-ons" transform="translate(-130.000000, -1123.000000)" stroke="#425CC7" stroke-width="9">
                        <g id="Group" transform="translate(139.500000, 1140.500000) scale(-1, 1) translate(-139.500000, -1140.500000) translate(126.000000, 1123.000000)">
                            <polyline id="Path" points="3 -2 17 17.4221338 3 38"></polyline>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="next-slide">
            <svg width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="werk-met-ons" transform="translate(-1413.000000, -1123.000000)" stroke="#425CC7" stroke-width="9">
                        <g id="Group" transform="translate(1413.000000, 1123.000000)">
                            <polyline id="Path" points="3 -2 17 17.4221338 3 38"></polyline>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
<?php endif; ?>
<script>
    jQuery(document).ready(function() {
        jQuery('.carrousel-items').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoPlay: false,
            accessibility: false,
            adaptiveHeight: true,
            prevArrow: jQuery('.prev-slide'),
            nextArrow: jQuery('.next-slide'),
        });
    });
</script>