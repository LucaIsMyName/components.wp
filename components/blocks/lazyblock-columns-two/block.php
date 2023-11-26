<?php

/**
 * Columns - Two
 */
?>

<section 
    class="[ block columns-two ]"
    style="
     /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    /* Columns Two */
    --columns-two--gap: var(--spacing-<?= $attributes['columns-gap'] ?>);
    --columns-two--align: <?= $attributes['columns-align'] ?>;

    "
    data-viewport>
    <div class="[ container ]">
        <?= $attributes['inner-blocks'] ?>
    </div>
</section>