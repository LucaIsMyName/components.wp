<?php

/**
 * Columns - Three
 */
?>

<section 
    class="[ block columns-three ]"
    style="
     /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    /* --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>); */
    /* Columns Three */
    --columns-three--gap: var(--spacing-<?= $attributes['columns-gap'] ?>);
    --columns-three--align: <?= $attributes['columns-align'] ?>;
    
    ">
    <div class="[ container ]">
        <?= $attributes['inner-blocks'] ?>
    </div>
</section>