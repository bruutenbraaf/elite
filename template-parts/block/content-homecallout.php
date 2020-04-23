<?php

/**
 * Block template file: 
 *
 * Homecallout Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'homecallout-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-homecallout';
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
<?php if (have_rows('call_out')) : ?>
    <?php while (have_rows('call_out')) : the_row(); ?>
        <?php $achtergrond_afbeelding = get_sub_field('achtergrond_afbeelding'); ?>
        <section id="<?php echo esc_attr($id); ?>" class="call-out <?php echo esc_attr($classes); ?>">
            <div class="bg-i" <?php if ($achtergrond_afbeelding) { ?>style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['large']; ?>);" <?php } ?>></div>
            <div class="container">
                <div class="row d-flex align-content-between flex-wrap">
                    <div class="col-md-12 c-content">
                        <div class="b-g d-flex justify-content-between align-items-center">
                            <h2><?php the_sub_field('titel'); ?></h2>
                            <?php $knop = get_sub_field('knop'); ?>
                            <?php if ($knop) { ?>
                                <a class="w-btn" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12 c-branding text-right">
                        <svg width="237px" height="78px" viewBox="0 0 237 78" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="homepage" transform="translate(-1077.000000, -2185.000000)" fill="#FFFFFF">
                                    <g id="Footer-cover" transform="translate(0.000000, 1754.000000)">
                                        <g id="Group-5" transform="translate(1077.000000, 431.000000)">
                                            <polygon id="Fill-1" points="145 74 156 74 156 11 145 11"></polygon>
                                            <polygon id="Fill-2" points="120 74 120 63.6786116 89.3524286 63.6786116 89.3524286 11 79 11 79 73.9852078"></polygon>
                                            <polygon id="Fill-3" points="224.632523 14.9586803 208.607082 34.7449362 188.272835 10.0166007 180.653079 16.7416829 202.0811 42.8025298 185.372175 63.432368 178 66.7472462 181.626327 75.1717929 193.001473 70.0744245 208.635204 50.7724852 229.380244 76 237 69.2749177 215.160684 42.7154041 232.282411 21.5756241 235.384449 9.29806957 226.653845 7"></polygon>
                                            <polygon id="Fill-4" points="7.85103171 3.99119895 11.428126 11.3749681 11.428126 64.2422647 0 69.7438265 4.01018384 78 11.4250471 74.4424494 11.428126 74.445514 52 74.4475571 52 64.1115062 21.6580716 64.1115062 21.6580716 48.2570379 52 48.2570379 52 37.9199654 21.6580716 37.9199654 21.6580716 21.7283854 51.8830042 21.7283854 51.8830042 11.3918237 21.6719263 11.3749681 16.1454158 0"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>