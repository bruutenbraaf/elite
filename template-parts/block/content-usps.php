<?php

/**
 * Block template file: 
 *
 * Usps Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'usps-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-usps';
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

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <?php if (have_rows('unique_selling_points')) : ?>
        <ul class="usps">
            <?php while (have_rows('unique_selling_points')) : the_row(); ?>
                <li>
                    <svg width="12px" height="12px" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="pakketten" transform="translate(-223.000000, -1842.000000)" fill="#FFFFFF">
                                <g id="Group-2" transform="translate(0.000000, 704.000000)">
                                    <g id="Group-4" transform="translate(160.000000, 1054.000000)">
                                        <g id="Group-3" transform="translate(63.000000, 74.000000)">
                                            <g id="Button" transform="translate(0.000000, 10.000000)">
                                                <polygon id="Rectangle" transform="translate(6.000000, 6.000000) scale(-1, 1) translate(-6.000000, -6.000000) " points="0 3.12180469 5.46481035 0 12 0 12 12 2.50369459e-13 12"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <?php the_sub_field('unique_selling_point'); ?></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>