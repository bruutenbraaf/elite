<footer>
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="col-4">
                <?php the_field('korte_over_ons', 'option'); ?>
                <div class="c-con">
                    <a href="tel:<?php the_field('telefoonnummer', 'option'); ?>">
                        <svg width="15px" height="25px" viewBox="0 0 15 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.699999988" stroke-linecap="round" stroke-linejoin="round">
                                <g id="homepage" transform="translate(-226.000000, -2586.000000)" stroke="#000000" stroke-width="1.008">
                                    <g id="Footer" transform="translate(221.000000, 2333.000000)">
                                        <g id="Col-1">
                                            <g id="Group-9" transform="translate(5.000000, 253.000000)">
                                                <path d="M11.5596432,0.5038992 L2.5521552,0.5038992 C1.4252112,0.5038992 0.5038992,1.4262192 0.5038992,2.5511472 L0.5038992,21.6759312 C0.5038992,22.8018672 1.4252112,23.7231792 2.5521552,23.7231792 L11.5596432,23.7231792 C12.6855792,23.7231792 13.6068912,22.8018672 13.6068912,21.6759312 L13.6068912,2.5511472 C13.6068912,1.4262192 12.6855792,0.5038992 11.5596432,0.5038992 Z" id="Stroke-1"></path>
                                                <path d="M7.0556976,22.0843728 C6.5799216,22.0843728 6.1948656,21.6993168 6.1948656,21.2245488 C6.1948656,20.7497808 6.5799216,20.3647248 7.0556976,20.3647248 C7.5314736,20.3647248 7.9165296,20.7497808 7.9165296,21.2245488 C7.9165296,21.6993168 7.5314736,22.0843728 7.0556976,22.0843728 Z" id="Stroke-3"></path>
                                                <polygon id="Stroke-5" points="0.512064 18.674208 13.616064 18.674208 13.616064 3.554208 0.512064 3.554208"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <?php the_field('telefoonnummer', 'option'); ?>
                    </a>
                    <a href="mailto:<?php the_field('e-mailadres', 'option'); ?>">
                        <svg width="22px" height="17px" viewBox="0 0 22 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.699999988" stroke-linecap="round" stroke-linejoin="round">
                                <g id="homepage" transform="translate(-222.000000, -2630.000000)" stroke="#000000" stroke-width="0.9025">
                                    <g id="Footer" transform="translate(221.000000, 2333.000000)">
                                        <g id="Col-1">
                                            <g id="Group-9" transform="translate(1.000000, 297.000000)">
                                                <path d="M18.8542178,2.581511 L11.7001003,9.014531 C11.1586002,9.5009785 10.3012252,9.5009785 9.75972525,9.014531 L2.60560775,2.581511" id="Stroke-1"></path>
                                                <line x1="14.0619428" y1="9.679854" x2="18.8542178" y2="13.6661965" id="Stroke-3"></line>
                                                <line x1="7.3985145" y1="9.679854" x2="2.605337" y2="13.6661965" id="Stroke-5"></line>
                                                <path d="M0.45125,2.5188775 L0.45125,13.72883 C0.45125,14.8704925 1.3763125,15.79375 2.564905,15.79375 L19.087875,15.79375 C20.2764675,15.79375 21.20875,14.8704925 21.20875,13.72883 L21.20875,2.5188775 C21.20875,1.377215 20.2764675,0.45125 19.087875,0.45125 L2.564905,0.45125 C1.3763125,0.45125 0.45125,1.377215 0.45125,2.5188775 Z" id="Stroke-7"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <?php the_field('e-mailadres', 'option'); ?>
                    </a>
                </div>
            </div>
            <div>
                <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
            </div>
            <div>
                <?php wp_nav_menu(array('theme_location' => 'extra_menu')); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>