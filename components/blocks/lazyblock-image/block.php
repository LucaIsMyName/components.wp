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
    --image--border-color: var(--color-<?= $attributes['image-border-color'] ?>);

    " data-viewport>
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
                    <img width="1920" src="<?= esc_url($attributes['image']['url']); ?>"
                        alt="<?= esc_attr($attributes['image']['alt']); ?>">
                    <!-- <?= wp_get_attachment_image($attributes['image']['id'], 'large'); ?> -->
                <?php endif; ?>
            </picture>
            <?php if ($attributes['image']['title'] || $attributes['image']['title']): ?>
                <figcaption class="[ caption ] <?php if ($attributes['enable-caption']): ?><?php else: ?>vh<?php endif; ?>">
                    <p class="small">
                        <?= esc_html($attributes['image']['title']); ?>
                    </p>
                    <small class="small">
                        <?= esc_html($attributes['image']['description']); ?>
                    </small>
                </figcaption>
            <?php endif; ?>
        </figure>
    </div>
</section>