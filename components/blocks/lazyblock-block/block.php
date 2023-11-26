<?php

/**
 * Block
 */
?>

<section id="<?= $attributes['custom-id'] ?>" class="[ block wrapper ] <?= $attributes['custom-class'] ?>" style="
    /* Block */
    --block--display: <?= $attributes['display'] ?>;
    --block--display-sm: <?= $attributes['display-sm'] ?>;
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--spacing-y--sm: var(--spacing-<?= $attributes['spacing-vertical--sm'] ?>, var(--spacing-<?= $attributes['spacing-vertical'] ?>));
    --block--spacing-x--sm: var(--spacing-<?= $attributes['spacing-horizontal--sm'] ?>, var(--spacing-<?= $attributes['spacing-horizontal'] ?>));
    --block--spacing-y--md: var(--spacing-<?= $attributes['spacing-vertical--md'] ?>, var(--spacing-<?= $attributes['spacing-vertical-sm'] ?>));
    --block--spacing-x--md: var(--spacing-<?= $attributes['spacing-horizontal--md'] ?>, var(--spacing-<?= $attributes['spacing-vertical-sm'] ?>));
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    --block--z-index: <?= $attributes['z-index'] ?>;
    /* Wrapper */
    <?php if (isset($attributes['background-image']['url'])): ?>
        --wrapper--background-image: url('<?= esc_url($attributes['background-image']['url']); ?>');
        --wrapper--background-size: url('<?= $attributes['background-position'] ?>');
    <?php endif; ?>
    <?php if ($attributes['enable-gradient']): ?>
        --wrapper--gradient: <?= $attributes['gradient-type'] ?>-gradient(
            <?php if ($attributes['gradient-type'] == 'linear'): ?>
                to bottom, 
            <?php endif; ?>
            <?= $attributes['gradient-color-1'] ?>, <?= $attributes['gradient-color-2'] ?>)
    <?php else: ?>
        /* Reset the Gradient */
        --wrapper--gradient: none;
    <?php endif; ?>
    ">
    <div class="[ container ]">

        <?php if ($attributes['enable-parallax']): ?>
            <div class="[ parallax parallax-<?= $attributes['parallax-speed']; ?> ]">
            <?php endif; ?>


            <?php if ($attributes['enable-onload']): ?>
                <div class="[ onload ]" data-aos="<?= $attributes['onload-style'] ?>"
                    data-aos-duration="<?= $attributes['onload-duration'] ?>"
                    data-aos-delay="<?= $attributes['onload-delay'] ?>"
                    data-aos-duration="<?= $attributes['onload-easing'] ?>">
                <?php endif; ?>


                <?= $attributes['inner-blocks'] ?>

                <?php if ($attributes['enable-onload']): ?>
                </div>
            <?php endif; ?>

            <?php if ($attributes['enable-parallax']): ?>
            </div>
        <?php endif; ?>
    </div>
</section>