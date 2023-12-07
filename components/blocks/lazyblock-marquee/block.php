<?php

/**
 * Marquee
 */
?>

<section 
    class="[ block marquee ]"
    style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    /* --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>); */
    ">
    <div class="[ container ]" data-marquee data-marquee-speed="<?= $attributes['marquee-speed'] ?>" <?php if($attributes['marquee-direction']) : ?>data-marquee-reverse="true"<?php endif; ?>>
        <?= $attributes['inner-blocks'] ?>
    </div>
</section>