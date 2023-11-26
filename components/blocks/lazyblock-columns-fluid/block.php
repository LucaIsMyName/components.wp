<?php

/**
 * Columns - Fluid
 */
?>

<section 
    class="[ block columns-fluid ]"
    style="
     /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    /* Columns Fluid */
    --columns-fluid--column-min-width: var(--size-<?= $attributes['column-min-width'] ?>);
    --columns-fluid--gap: var(--spacing-<?= $attributes['gap'] ?>);
    --columns-fluid--align: var(--spacing-<?= $attributes['columns-align'] ?>);
    "
    data-viewport>
    <div class="[ container ]">
        <?= $attributes['inner-blocks'] ?>
    </div>
</section>