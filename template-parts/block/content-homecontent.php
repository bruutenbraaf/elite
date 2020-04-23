<?php

/**
 * Block template file: 
 *
 * Homecontent Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'homecontent-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-homecontent';
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

<section id="<?php echo esc_attr($id); ?>" class="h-content <?php echo esc_attr($classes); ?>">
    <div class="container">
        <div class="row">
            <?php if (have_rows('intro_tekst')) : ?>
                <div class="col-md-6">
                    <?php while (have_rows('intro_tekst')) : the_row(); ?>
                        <?php the_sub_field('intro_tekst'); ?>
                        <?php if (have_rows('call_to_actions')) : ?>
                            <?php while (have_rows('call_to_actions')) : the_row(); ?>
                                <?php $knop = get_sub_field('knop'); ?>
                                <?php if ($knop) { ?>
                                    <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>"href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if (have_rows('qoute__team_tekst')) : ?>
                <div class="col-md-5 offset-md-1 h-qoute d-flex align-content-between flex-wrap text-center">
                    <?php while (have_rows('qoute__team_tekst')) : the_row(); ?>
                        <div class="content">
                            <?php the_sub_field('content'); ?>
                        </div>
                        <?php $afbeelding = get_sub_field('afbeelding'); ?>
                        <?php if ($afbeelding) { ?>
                            <img src="<?php echo $afbeelding['url']; ?>" alt="<?php echo $afbeelding['alt']; ?>" />
                        <?php } ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>