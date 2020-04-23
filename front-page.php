<?php
get_header(); ?>
<main>
    <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    else : ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>