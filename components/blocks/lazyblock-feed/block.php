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
    --feed--image-size: calc(var(--size-1) * <?= $attributes['feed-image-size'] ?>);
    --feed--accent-color:var(--color-<?= $attributes['feed-accent-color'] ?>);
    --feed--bullet-radius: var(--border-radius-<?= $attributes['feed-bullet-radius'] ?>);
    --feed--bullet-size: calc(var(--size-1) * <?= $attributes['feed-bullet-size'] ?>);
    --feed--line-style: <?= $attributes['feed-line-style'] ?>;

    ">
    <div class="[ container ]">
        <ul class="[ feed-list ]">
            <?php $aosType = "fade-up";
            $aosDuration = 400;
            $aosDelay = 100; ?>
            <?php foreach ($attributes['feed'] as $item): ?>
                <li class="[ feed-item ] <?php if ($attributes['enable-feed-bullets']): ?><?php else: ?>no-bullets<?php endif; ?>"
                    <?php if ($attributes['enable-onload']): ?>data-aos="fade" data-aos-duration="<?= $aosDuration ?>"
                        data-aos-delay="<?= $aosDelay; ?><?php endif; ?>">
                    <section class="[ content ]">
                        <?php if ($attributes['enable-img']): ?>
                            <figure class="[ image ]">
                                <img width="96px" height="96px" src="<?= esc_url($item['image']['url']) ?>" />
                            </figure>
                        <?php endif; ?>
                        <section class="[ text ]" data-wysiwyg <?php if ($attributes['enable-onload']): ?>data-aos-duration="<?= $aosDuration ?>" <?php endif; ?>>
                            <?= $item['text'] ?>
                        </section>
                    </section>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>