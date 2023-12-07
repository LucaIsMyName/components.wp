<?php

/**
 * Table of Contents
 */
?>

<section class="[ block table-of-contents ]" style="
    /* Block */
    --block--max-width: var(--size-<?= $attributes['max-width'] ?>);
    --block--spacing-y: var(--spacing-<?= $attributes['spacing-vertical'] ?>);
    --block--spacing-x: var(--spacing-<?= $attributes['spacing-horizontal'] ?>);
    /* Slider */
    --swiper-theme-color:  var(--color-<?= $attributes['color'] ?>);
    --slider--align-y: <?= $attributes['slider-align-y'] ?>;
    ">
    <div class="[ container ]">
        <aside data-table-of-contents="<?= $attributes['toc-area'] ?>"
            data-table-of-contents-headlines="<?= $attributes['toc-headlines'] ?>"
            data-table-of-contents-link="<?= $attributes['toc-link'] ?>">
        </aside>
    </div>
</section>

<!-- That's the initial Content when DOM is loaded -->

<template>
    <aside class="" data-table-of-contents="#someId" table-of-contents-headlines="h1, h2, h3, h4, h5, h6">
        <!-- This Space is empty on DOMContentLoaded but will be filled by JS if the corresponding div (#someId) is findable has the correct headlines -->

    </aside>
    <article id="someId">
        <h1>Headline 1</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, repellat?</p>
        <h2>Headline 2</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, harum.</p>
        <h2>Headline 2</h2>
        <h3>Headline 3</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, autem.</p>
    </article>
    <script src="path/to/table-of-contents.js"></script>



    <!-- 
That's DOM after the TOC JS rendered it's part on the page 
- every toc list item get's wrapped in an <a> tag and given the href id if data-table-of-contents-link="true", otherwise only render the <li> items not the <a> item 
- every headline in the content element (#someId) get's an id attribute with the same slugified and randomized id as the list link (scrolls from the link to the Headline)
- only the html-element in the data-table-of-contents-headlines attribute get renderedd in the table-of-contents="#someId"element
-->

    <aside data-table-of-contents="#someId" data-table-of-contents-link="true"
        table-of-contents-headlines="h1, h2, h3, h4, h5, h6">
        <!-- This Space is empty on DOMContentLoaded but will be filled by JS if the corresponding div (#someId) is findable has the correct headlines -->
        <ul>
            <li>
                <!-- only render <a> if data-table-of-contents-link="true" -->
                <a href="#headline-1--6G4T71K">
                    Headline 1
                </a>
            </li>
            <ul>
                <li>
                    <a href="#headline-2--9L4TD1V">
                        Headline 2
                    </a>
                </li>
                <li>
                    <a href="#headline-2--J6GHKL9">
                        Headline 2
                    </a>
                </li>
                <ul>
                    <li>
                        <a href="#headline-3--TF4RD67">
                            Headline 3
                        </a>
                    </li>
                </ul>
                <li>
                    <a href="#headline-secondary--124JNL9">
                        Headline Secondary
                    </a>
                </li>
            </ul>
        </ul>
    </aside>
    <article id="someId">
        <h1 id="headline-1--6G4T71K">Headline 1</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, repellat?</p>
        <h2 id="headline-2--9L4TD1V">Headline 2</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, harum.</p>
        <h2 id="headline-2--J6GHKL9">Headline 2</h2>
        <h3 id="headline-3--TF4RD67">Headline 3</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, autem.</p>
        <h2 id="headline-secondary--124JNL9">Headline Secondary</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, assumenda?</p>
    </article>
    <script src="path/to/table-of-contents.js"></script>
</template>