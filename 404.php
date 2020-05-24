<?php
get_header(); ?>

<?php $standaard_hoofdafbeelding = get_field('standaard_hoofdafbeelding', 'option'); ?>
<header class="p-header d-flex align-items-end justify-content-end<?php echo esc_attr($classes); ?>" style="background-image:url(<?php if (get_the_post_thumbnail_url($post, 'full_img')) { ?><?php echo get_the_post_thumbnail_url($post, 'large'); ?><?php } else { ?><?php echo $standaard_hoofdafbeelding['sizes']['large']; ?><?php } ?>);">
</header>

<main class="p-main">
    <div class="container">
        <div class="d-flex row">
            <div class="t-block">
                <h1>404</h1>
                <span class="breadcrumbs">
                    <?php _e('Pagina niet gevonden.', 'elix'); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="wp-block-content-section undefined positive container has-shadow nomark nopadding b-n">
        <p><?php _e('Deze pagina is niet gevonden. Keer terug naar homepagina.'); ?></p>
        <a class="btn" href="<?php echo get_home_url(); ?>"><?php _e('Terug naar homepagina', 'elix'); ?></a>
    </div>
</main>

<?php get_footer(); ?>