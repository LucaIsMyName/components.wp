<?php
// Get Custom Logo to insert in Page
function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    // var_dump( $custom_logo_id);
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    return $image[0];
}

// Get Bloginfo as simple Var
$blogInfo = esc_attr(get_bloginfo('name'));
// Get Blog URL as simple Var
$blogUrl = esc_url(home_url('/'));

?>
<!DOCTYPE html>
<html class="" <?php language_attributes(); ?> <?php template_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/js/aos/aos.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/js/swiper/swiper.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=inter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=jetbrains-mono:100,200,300,400,500,600,700" rel="stylesheet" />
    <script defer src="<?= get_template_directory_uri() ?>/js/rellax/rellax.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/rellax/rellax-modules.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/swiper/swiper.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/swiper/swiper-modules.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/aos/aos.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/aos/aos-modules.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/splash-screen.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/accordion.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/tables.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/viewport.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/scroll-state.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/audioplayer.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/tabs.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/tooltip.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/modal.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/marquee.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/js/accessibility.js"></script>

    <!-- <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script> -->

</head>

<body id="body" <?php body_class(); ?> data-scroll-state>
    <div data-splash-screen class="[ splash-screen ]">
        <div class="[ icon ]">Loading</div>
    </div>
    <!--  <div class="loadingIcon"></div>-->
    <?php wp_body_open(); ?>
    <div id="wrapper" class="">
        <header data-scroll-state class="[ header ]" role="banner">
            <div class="[ brand ]">
                <div class="" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

                    <?=
                        '<h1>
                    <a class="[ logo ]" href="' . $blogUrl . '" title="' . $blogInfo . '" rel="home" itemprop="url">
                        <img width="64" height="64" alt="' . $blogInfo . ' Logo" height="" src="' . get_custom_logo_url() . '" alt="' . $blogInfo . '">
                        <span class="[ blog-info ] vh">' . $blogInfo . '</span>
                    </a>
                    <h1>';
                    ?>

                </div>
                <section class="[ navigations ]">
                    <nav class="" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <div class="[ nav ]">
                            <?php
                            wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name" class="">', 'link_after' => '</span>'));
                            ?>
                            <div class="[ nav-action ]">
                                <?php
                                wp_nav_menu(array('theme_location' => 'action-menu', 'link_before' => '<div itemprop="name" class="">', 'link_after' => '</div>'));
                                ?>
                            </div>
                        </div>

                    </nav>
                    <section class="[ toggle-mobile-nav ]">
                        <button data-modal-toggle-open="mobile-nav" class="" title="Main Mobile Navigation Open">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </button>
                    </section>
                </section>
        </header>

        <!-- Mobile Nav Start -->
        <div id="mobile-nav" data-modal data-modal-active="false" class="[ mobile-nav-container ]">
            <nav class="[  ]">
                <section class="[ brand ]">
                    <a href="<?= $blogUrl ?>" class="[ logo ]">
                        <img data-logo height="" class="" src="<?= get_custom_logo_url() ?>" alt="<?= $blogInfo ?>">
                    </a>
                    <button data-modal-toggle-close="mobile-nav" class="[ close ]" title="Main Mobile Navigation Close">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </section>
                <div class="[ navigations ]">
                    <section class="[ mobile-main-nav ]">
                        <?php
                        wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span class="gradient-text"><span itemprop="name" >', 'link_after' => '</span></span>'));
                        ?>
                    </section>
                    <section class="[ mobile-footer-nav ]">
                        <?php
                        wp_nav_menu(array('theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name" class="">', 'link_after' => '</span>'));
                        ?>
                    </section>
                    <section class="[ mobile-action-nav ]">
                        <?php
                        wp_nav_menu(array('theme_location' => 'action-menu', 'link_before' => '<div class="">', 'link_after' => '</div>'));
                        ?>
                    </section>
                </div>
            </nav>
        </div>
        <!-- Mobile Nav End -->

        <div class="[ page-content ]" id="page-content">
            <main class="[ main-container ]" role="main">