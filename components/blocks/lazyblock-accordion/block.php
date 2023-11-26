<?php

/**
 * Accordion
 */
?>

<section class="[ block accordion ]" style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    ">
    <div class="[ container ]" data-accordion-group>
        <?php foreach ($attributes['accordion'] as $item): ?>
            <section data-accordion class="[ accordion-item ]">
                <button data-accordion-title class="[ title ]">
                    <section data-wysiwyg>
                            <?= $item['title']; ?>
                    </section>
                    <div class="[ collapse ]">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5 8.25L12 15.75L4.5 8.25" stroke="#0F172A" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
                <div data-accordion-content tabindex="-1" data-wysiwyg class="[ text ]">
                    <?= $item['text']; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</section>