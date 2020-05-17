<?php

/**
 * Block template file: 
 *
 * Werkwijze Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'werkwijze-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-werkwijze';
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
    <div class="d-flex stappen flex-wrap flex-md-nowrap">
        <?php if (have_rows('werkwijze')) : ?>
            <?php while (have_rows('werkwijze')) : the_row(); ?>
                <?php if (have_rows('stap')) : ?>
                    <?php while (have_rows('stap')) : the_row(); ?>
                        <div class="col  stap">
                            <div class="inner">
                                <?php $icoon = get_sub_field('icoon'); ?>
                                <?php if ($icoon) { ?>
                                    <img class="icon" src="<?php echo $icoon['url']; ?>" alt="<?php echo $icoon['alt']; ?>" />
                                <?php } ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>