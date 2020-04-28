<?php

/**
 * Block template file: 
 *
 * Pageelixwaarden Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pageelixwaarden-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-pageelixwaarden';
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
<?php if (have_rows('elix_waarden')) : ?>
    <?php while (have_rows('elix_waarden')) : the_row(); ?>
        </div>
        </div>
        <?php $achtergrond = get_sub_field('achtergrond'); ?>
        <section class="waarden<?php if (get_sub_field('negatieve_margin') == 1) { ?> negativeMargin<?php } ?> <?php echo esc_attr($classes); ?>" <?php if ($achtergrond) { ?>style="background-image:url(<?php echo $achtergrond['sizes']['large']; ?>);" <?php } ?>>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap text-center justify-content-center w-title">
                        <?php the_sub_field('titel'); ?>
                    </div>
                </div>
            </div>
            <?php if (have_rows('elix_waardes')) : ?>
                <?php while (have_rows('elix_waardes')) : the_row(); ?>
                    <?php the_sub_field('waarde'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <div class="container">
                <div class="row">
        <?php endwhile; ?>
    <?php endif; ?>