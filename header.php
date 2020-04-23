<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="branding">
                    <a href="<?php echo get_home_url(); ?>">
                        <svg class="elix" width="171px" height="106px" viewBox="0 0 171 106" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="homepage" transform="translate(-222.000000, -119.000000)" fill="#FFFFFF">
                                    <g id="Header" transform="translate(-4.000000, 36.000000)">
                                        <g id="Logo" transform="translate(226.000000, 83.000000)">
                                            <text class="running-your-energy" font-family="Karmilla-Bold, Karmilla" font-size="15.68" font-weight="bold" line-spacing="21.28" letter-spacing="-0.0627200007">
                                                <tspan x="0" y="81.2">running your energy </tspan>
                                                <tspan x="0" y="102.48">like a business</tspan>
                                            </text>
                                            <g id="Group-5">
                                                <polygon id="Fill-1" points="104.16 52.64 112 52.64 112 7.84 104.16 7.84"></polygon>
                                                <polygon id="Fill-2" points="86.24 52.64 86.24 45.300346 64.4727493 45.300346 64.4727493 7.84 57.12 7.84 57.12 52.6294811"></polygon>
                                                <polygon id="Fill-3" points="161.318647 11.2841125 149.7586 25.4155139 135.09037 7.75446495 129.593814 12.5575382 145.051044 31.1702706 132.997962 45.9041608 127.68 48.2716564 130.295872 54.2884921 138.501401 50.6479368 149.778886 36.8624358 164.743444 54.88 170.24 50.0769268 154.48608 31.1080451 166.836939 16.009953 169.074613 7.24128795 162.77674 5.6"></polygon>
                                                <polygon id="Fill-4" points="5.58027177 2.86547617 8.12276029 8.16664375 8.12276029 46.1226516 0 50.0724908 2.85031528 56 8.12057195 53.4458611 8.12276029 53.4480613 36.96 53.4495282 36.96 46.0287737 15.3938909 46.0287737 15.3938909 34.6460785 36.96 34.6460785 36.96 27.2245906 15.3938909 27.2245906 15.3938909 15.5998664 36.876843 15.5998664 36.876843 8.1787452 15.4037384 8.16664375 11.4756648 0"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="main-navigation ml-auto">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                </div>
            </div>
        </div>
    </nav>