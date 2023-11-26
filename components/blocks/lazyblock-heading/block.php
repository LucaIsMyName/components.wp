<?php

/**
 * Heading
 */
?>

<section class="[ block heading ]" style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);  
    /* Heading */
    --heading--text-align: <?= $attributes['heading-text-align'] ?>;  
    --heading--text-align-sm: <?= $attributes['heading-text-align-sm'] ?>;  
    --heading--text-align-md: <?= $attributes['heading-text-align-md'] ?>;
    --heading--font-size:var(--font-size-<?= $attributes['headline-font-size'] ?>);
    --heading--font-weight:var(--font-weight-<?= $attributes['heading-font-weight'] ?>);
    --heading--line-height:var(--line-height-<?= $attributes['heading-line-height'] ?>);

    ">
    <div class="[ container ]">
        <<?= $attributes['headline-type'] ?>
            <?php if ($attributes['headline-font-size'] != 'inherit'): ?>class="custom"<?php endif; ?>>

            <?= $attributes['headline'] ?>

        </<?= $attributes['headline-type'] ?>>
    </div>
</section>