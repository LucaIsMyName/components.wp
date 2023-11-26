<?php

/**
 * Slider
 * @todo: add more slider types/styles via JS object
 */
?>

<section class="[ block slider ]" style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    /* Slider */
    --swiper-theme-color:  var(--color-<?= $attributes['color'] ?>);
    --slider--align-y: <?= $attributes['slider-align-y'] ?>;
    ">
    <div class="[ container ]">
        <section class="[ slider--image-<?= $attributes['slider-style'] ?> ]" <?php if ($attributes['slider-autoplay']): ?>data-swiper-autoplay="2000" <?php endif; ?>>
            <div class="[ swiper-wrapper ]">
                <?php foreach ($attributes['slider'] as $slide): ?>
                    <figure class="[ swiper-slide ]" data-viewport title="<?= esc_attr($slide['image']['title']); ?>">
                        <picture>
                            <?php if (isset($slide['image-md']['url'])): ?>
                                <source media="(min-width:960px)" srcset="<?= esc_url($slide['image-md']['url']); ?>">
                            <?php endif; ?>
                            <?php if (isset($slide['image']['url'])): ?>
                                <img width="960" height="960" src="<?= esc_url($slide['image']['url']); ?>"
                                    alt="<?= esc_attr($slide['image']['alt']); ?>">
                            <?php endif; ?>
                        </picture>
                    </figure>
                <?php endforeach; ?>
            </div>
            <!-- If we need navigation buttons -->
            <section class="[ slider-controls ]">
                <?php if ($attributes['enable-arrows']): ?>
                    <div class="[ slider-button-next ]"></div>
                <?php endif; ?>
                <?php if ($attributes['enable-pagination']): ?>
                    <div class="[ slider-pagination ]"></div>
                <?php endif; ?>
                <?php if ($attributes['enable-arrows']): ?>
                    <div class="[ slider-button-prev ]"></div>
                <?php endif; ?>
            </section>
        </section>
    </div>
</section>