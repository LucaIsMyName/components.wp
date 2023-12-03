<?php
$blogInfo = esc_attr(get_bloginfo('name'));
$blogUrl = esc_url(home_url('/'));
?>
</main>
</div>
<footer data-scroll-state class="[ footer ]" role="contentinfo">
    <div data-footer-copyright class="[ brand ]">
        <a href="<?= $blogUrl ?>" class="[ logo ]">
            <img width="64px" height="64px" alt="<?php bloginfo('title'); ?> Logo" class="" src="<?= get_custom_logo_url() ?>">
            <span class="vh">
                <?php bloginfo('title'); ?>:
                <?php bloginfo('description'); ?>
            </span>
        </a>

    </div>
    <!-- <nav data-main-nav class="[ nav-main ]">
        <?php
        wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<div class=" " itemprop="name">', 'link_after' => '</div>'));
        ?>
    </nav> -->
    <nav data-secondary-nav class="[ nav-wrapper ]">
        <div class="[ nav-action ]">
            <?php
            wp_nav_menu(array('theme_location' => 'action-menu', 'link_before' => '<div class="" itemprop="name">', 'link_after' => '</div>'));
            ?>
        </div>
        <div class="[ nav-footer ]">
            <?php
            wp_nav_menu(array('theme_location' => 'footer-menu', 'link_before' => '<div class="" itemprop="name">', 'link_after' => '</div>'));
            ?>
        </div>
    </nav>
</footer>
</div>
<script>
    const accessibilityJs = {
        nearestParent: '.block',
    }
    // console.log(accessibilityJs.nearestParent);
</script>

<script src="<?= get_template_directory_uri() ?>/js/accessibility.js">

</script>
<?php wp_footer(); ?>

</body>

</html>