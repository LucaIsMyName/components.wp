<?php

/**
 * Blueprint
 */
?>

<section class="[ block card ]" style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    /* --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>); */
    /* Card */
    --card--border-color:var(--color-<?= $attributes['card-border-color'] ?>);
    --card--color:var(--color-<?= $attributes['card-color'] ?>);
    --card--background-color:var(--color-<?= $attributes['card-background-color'] ?>);
    --card--spacing:var(--spacing-<?= $attributes['card-spacing'] ?>);
    --card--border-width:calc(var(--px) * <?= $attributes['card-border-width'] ?>);
    --card--border-radius:var(--border-radius-<?= $attributes['card-border-radius'] ?>);
    ">
    <div class="[ container ]">
        <section class="[ card-item ]">
            <?= $attributes['inner-blocks'] ?>
        </section>
    </div>
</section>