<?php

/**
 * Image
 */
?>

<section class="[ block image ]" style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    /* Image */
    --image--blur: var(--blur-<?= $attributes['image-blur'] ?>);
    --image--saturate: <?= $attributes['image-saturate'] ?>%;
    --image--contrast: <?= $attributes['image-contrast'] ?>%;
    --image--hue: <?= $attributes['image-hue'] ?>deg;
    --image--invert: <?= $attributes['image-invert'] ?>;
    --image--greyscale: <?= $attributes['image-greyscale'] ?>%;
    --image--brightness: <?= $attributes['image-brightness'] ?>%;
    --image--border-radius: var(--border-radius-<?= $attributes['image-border-radius'] ?>);

    "
    data-viewport>
    <div class="[ container ]">
        <figure title="">
            <picture>
                <?php if (isset($attributes['image-desktop']['url'])): ?>
                    <source media="(min-width:960px)" srcset="<?= esc_url($attributes['image-desktop']['url']); ?>">
                <?php endif; ?>
                <?php if (isset($attributes['image-tablet']['url'])): ?>
                    <source media="(min-width:560px)" srcset="<?= esc_url($attributes['image-tablet']['url']); ?>">
                <?php endif; ?>
                <?php if (isset($attributes['image']['url'])): ?>
                    <!--<img width="1920" src="<?= esc_url($attributes['image']['url']); ?>" alt="<?= esc_attr($attributes['image']['alt']); ?>">-->
                    <?= wp_get_attachment_image($attributes['image']['id'], 'large'); ?>
                <?php endif; ?>
            </picture>
            <figcaption class="vh"></figcaption>
        </figure>
    </div>
</section>