<?php

/**
 * Columns - Four
 */
?>

<section 
    class="[ block columns-four ]"
    style="
     /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    /* --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>); */
    /* Columns Four */
    --columns-four--gap: var(--spacing-<?= $attributes['columns-gap'] ?>);
    --columns-four--align: <?= $attributes['columns-align'] ?>;

    ">
    <div class="[ container ]">
        <?= $attributes['inner-blocks'] ?>
    </div>
</section>