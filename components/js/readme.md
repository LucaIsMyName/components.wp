# theme js

## html api's

### `viewport.js`

```html
<body>
    <section data-viewport>
        Element will get viewport=true if top or bottom are inside the offsets default (0)
    </section>
    <section data-viewport data-viewport-offset="100px">
        Element will get viewport=true if top or bottom are inside the offsets
    </section>
</body>
```

### `accordion.js`

```html
<div data-accordion-group>
    <section data-accordion>
        <div data-accordion-title>Accordion Title</div>
        <div data-accordion-content> Lorem ispum dolor sit amet </div>
    </section>
     <section data-accordion>
        <div data-accordion-title>Accordion Title</div>
        <div data-accordion-content> Lorem ispum dolor sit amet </div>
    </section>
</div>
```

### `modal.js`

```html
<button data-modal-toggle="myModal">Toggle Modal</button>
<button data-modal-toggle-open="myModal">Open Modal</button>
<section data-modal id="myModal">
    <button data-modal-toggle-close="myModal">Close Modal</button>
    <p>My Modal Content</p>
</section>

```
### `tabs.js`

<section data-tabs>
    <nav>
        <button data-tabs-toggle="1">Tab 1</button>
        <button data-tabs-toggle="2">Tab 2</button>
    </nav>
    <section>
        <div data-tabs-content="1">
            Lorem Ipsum 1
        </div>
          <div data-tabs-content="2">
            Lorem Ipsum 2
        </div>
    </section>
</section>

### `tooltip.js`
```html
<section data-tooltip>
    <p>Lorem ipsum <span data-tooltip="dolor">dolor</span> ...</p>
</section>
<div data-tooltip-content="dolor">My Tooltip Content for the Word 'dolor'</div>
```

### `scroll-state.js`
```html
<header data-scroll-state>
    My Header ..
</header>
```

### `splash-screen.js`
```html
<div data-splash-screen>
    Loading ...
</div>
```

### `audioplayer.js`
```html
<div data-audioplayer>
    <section class="currently-playing">
        <img data-audioplayer-current-cover src="path/to/placeholder.jpg" />
        <p data-audioplayer-current-track>
             <!-- String get's dynamically inserted via JS on the basis of the currently playing snd in the playlist -->
        </p>
        <p data-audioplayer-current-artist>
              <!-- String get's dynamically inserted via JS on the basis of the currently playing snd in the playlist -->
        </p>
    </section>
    <section data-audioplayer-controls class="controls">
        <p data-audioplayer-repeat-playlist>Repeat Playlist</p>
        <p data-audioplayer-prev>Previous Track</p>
        <p data-audioplayer-play-pause>Play/Pause</p>
        <p data-audioplayer-next>Next Track</p>
        <p data-audioplayer-mute-unmute>Mute/Unmute Track</p>
    </section>
    <section class="playlist">
        <ul data-audioplayer-playlist>
            <li data-audioplayer-track data-audioplayer-track-url="path/to/track-1.mp3">
                <img data-audioplayer-track-image src="path/to/cover-1.jpg"/>
                <p data-audioplayer-track-title>Track 1</p>
                <p data-audioplayer-track-artist>Artist 1</p>
            </li>
            <li data-audioplayer-track data-audioplayer-track-url="path/to/track-2.webm">
                <img data-audioplayer-track-image src="path/to/cover-2.jpg"/>
                <p data-audioplayer-track-title>Track 2</p>
                <p data-audioplayer-track-artist>Artist 2</p>
            </li>
            <li data-audioplayer-track data-audioplayer-track-url="path/to/track-3.wav">
                ...
            </li>
        </ul>
    </section>
   ...
</div>
```