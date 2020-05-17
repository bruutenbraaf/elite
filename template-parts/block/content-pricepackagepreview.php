<?php

/**
 * Block template file: 
 *
 * Pricespackagespreview Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pricespackagespreview-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-pricespackagespreview';
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

<div class="<?php echo esc_attr($classes); ?>">
	<div class="container">
		<div class="row">
			<div class="d-flex pr">
				<?php if (have_rows('pakketten')) : ?>
					<?php while (have_rows('pakketten')) : the_row(); ?>
						<div class="block-pricespackages d-flex align-items-start flex-column mb-3">
							<div class="title"><?php the_sub_field('titel'); ?></div>
							<?php if (have_rows('usps')) : ?>
								<ul class="usp text-center mb-auto">
									<?php while (have_rows('usps')) : the_row(); ?>
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
								<div class="price text-center">
									<?php the_sub_field('price'); ?>
									<?php $kost_per = get_sub_field('per'); ?>
									<?php if ($kost_per != 'Vast bedrag') { ?>
										<span><?php the_sub_field('per'); ?></span>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="text-center">
			<?php $call_to_action_packagepreview = get_field('call_to_action_packagepreview'); ?>
			<?php if ($call_to_action_packagepreview) { ?>
				<a class="btn" href="<?php echo $call_to_action_packagepreview['url']; ?>" target="<?php echo $call_to_action_packagepreview['target']; ?>"><?php echo $call_to_action_packagepreview['title']; ?></a>
			<?php } ?>
		</div>
	</div>
</div>