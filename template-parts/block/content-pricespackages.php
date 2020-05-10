<?php

/**
 * Block template file: 
 *
 * Pricespackages Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pricespackages-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-pricespackages';
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

<div class="<?php echo esc_attr($classes); ?> d-flex align-items-start flex-column mb-3">
	<?php if (have_rows('pakket')) : ?>
		<?php while (have_rows('pakket')) : the_row(); ?>
			<div class="title"><?php the_sub_field('titel'); ?></div>
			<?php if (have_rows('unique_selling_points')) : ?>
				<ul class="usp text-center mb-auto">
					<?php while (have_rows('unique_selling_points')) : the_row(); ?>
						<li>
							<svg width="12px" height="10px" viewBox="0 0 12 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									<g id="pakketten" transform="translate(-241.000000, -1085.000000)" stroke="#000000">
										<g id="Onze-pakketten-2" transform="translate(160.000000, 850.000000)">
											<g id="Group-9" transform="translate(0.000000, 125.000000)">
												<g id="Group-5" transform="translate(75.000000, 103.000000)">
													<polyline id="Stroke-3" points="6.9437 12.2249 10.2617 16.3729 17.4077 7.4399"></polyline>
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
							<?php the_sub_field('unique_selling_point'); ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<div class="inf">
				<?php if (have_rows('price')) : ?>
					<div class="price text-center">
						<?php while (have_rows('price')) : the_row(); ?>
							<?php the_sub_field('kosten'); ?>
							<?php the_sub_field('kosten_per:'); ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if (have_rows('in_package')) : ?>
					<div class="in text-center">
						<span class="in-title">
							<svg width="25px" height="23px" viewBox="0 0 25 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.5" stroke-linecap="round" stroke-linejoin="round">
									<g id="pakketten" transform="translate(-334.000000, -1315.000000)" stroke="#000000">
										<g id="Onze-pakketten-2" transform="translate(160.000000, 850.000000)">
											<g id="Group-9" transform="translate(0.000000, 125.000000)">
												<g id="Group-11" transform="translate(174.000000, 340.000000)">
													<path d="M23.5795,20.3658 C23.5795,21.5408 22.6275,22.4928 21.4525,22.4928 L2.6275,22.4928 C1.4525,22.4928 0.4995,21.5408 0.4995,20.3658 L0.4995,7.6178 C0.4995,6.4438 1.4525,5.4908 2.6275,5.4908 L21.4525,5.4908 C22.6275,5.4908 23.5795,6.4438 23.5795,7.6178 L23.5795,20.3658 Z" id="Stroke-1"></path>
													<path d="M7.5472,3.4903 L7.5472,2.9503 C7.5472,1.5973 8.7082,0.5003 10.1402,0.5003 L13.9272,0.5003 C15.3592,0.5003 16.5202,1.5973 16.5202,2.9503 L16.5202,3.4903" id="Stroke-3"></path>
													<line x1="13.5228" y1="11.5196" x2="23.5798" y2="11.5196" id="Stroke-5"></line>
													<line x1="0.4999" y1="11.5196" x2="10.5069" y2="11.5196" id="Stroke-7"></line>
													<path d="M13.5228,13.003 C13.5228,13.269 13.3078,13.484 13.0418,13.484 L10.9888,13.484 C10.7228,13.484 10.5068,13.269 10.5068,13.003 L10.5068,10.95 C10.5068,10.684 10.7228,10.469 10.9888,10.469 L13.0418,10.469 C13.3078,10.469 13.5228,10.684 13.5228,10.95 L13.5228,13.003 Z" id="Stroke-9"></path>
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
							<?php _e('in het pakket:', 'elix'); ?>
						</span>
						<ul class="items">
							<?php while (have_rows('in_package')) : the_row(); ?>
								<li class="item">
									<span><?php the_sub_field('pakket_inhoud_item'); ?></span>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>