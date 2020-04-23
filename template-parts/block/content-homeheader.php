<?php

/**
 * Block template file: 
 *
 * Home Header Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-header-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-home-header';
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

<?php $achtergrond_afbeelding = get_field('achtergrond_afbeelding'); ?>
<section id="<?php echo esc_attr($id); ?>" class="h-header d-flex align-items-end justify-content-end<?php echo esc_attr($classes); ?>" style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['large']; ?>);">
    <?php if (have_rows('intro_tekst')) : ?>
        <?php while (have_rows('intro_tekst')) : the_row(); ?>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="int-block">
                        <h1><?php the_sub_field('titel'); ?></h1>
                        <span class="h-sub"><?php the_sub_field('subtitel'); ?></span>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>