<?php

/**
 * 
 */

?>


<section class="[ block feed ]" style="
     /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    --block--color-background: var(--color-<?= $attributes['background-color'] ?>);
    --block--color-text: var(--color-<?= $attributes['color'] ?>);
    /* Divider */
    --feed--align: <?= $attributes['feed-align'] ?>; /* 'start', 'center' or 'end' */
    --feed--color:var(--color-<?= $attributes['feed-color'] ?>); 
    --feed--accent-color:var(--color-<?= $attributes['feed-accent-color'] ?>);
    ">
    <div class="[ container ]">
        <ul class="[ feed-list ]">
            <?php $aosType = "fade-up";
            $aosDuration = 800;
            $aosDelay = 100; ?>
            <?php foreach ($attributes['feed'] as $item): ?>
                <li class="[ feed-item ]" <?php if ($attributes['enable-onload']): ?>data-aos="fade-up"
                        data-aos-duration="<?= $aosDuration ?>" data-aos-delay="<?= $aosDelay; ?><?php endif; ?>">
                    <section class="[ content ]">
                        <?php if ($attributes['enable-img']): ?>
                            <figure class="[ image ]">
                                <img src="<?= esc_url($item['image']['url']) ?>" />
                            </figure>
                        <?php endif; ?>
                        <section class="[ text ]" data-wysiwyg  <?php if ($attributes['enable-onload']): ?>data-aos-duration="<?= $aosDuration ?>"<?php endif; ?>>
                            <?= $item['text'] ?>
                        </section>
                    </section>
                </li>
                <?php $aosDelay = $aosDelay + 50; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</section>