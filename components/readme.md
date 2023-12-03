# components

## setup
1. install wp from `https://w.org`
2. install `lazy-blocks` & `advanced editior tools` plugins via marketplace
3. install `components` theme
4. import `block-controls.json` from the `wp-content/themes/components/blocks/` folder intp the lazy block plugin
5. 

## to do
- mobile header and mobile nav menu (toggle + design) (wip)
- videoplayer block
- hero block - bg image alignment -> center +  mobile image option
- text and heading element -> Selectbox Column Count 1-4
- 404 + search page styling

### styling

components provides a set of css-custom-properties to work with or overwrite

#### colors 

`--hsl-brightness`, `hsl-greyscale`, `--hsl-bright`, `--hsl-dark`, `--hsl-opacity`, `--hsl-opacity-transparent`

`--color-{name}`: `red`, `blue`, `green`, `sky`, `magenta`, `pink`, `purple`, `violet`, `lime`, `yellow`, `turquois`, `sky`, `orange`

`--color-{semantic-name}`: `text`, `background`, `primary`, `secondary`

`--color-{semantic-name}-{modifier}`: `dark`, `light`, `transparent`

#### spacings & sizes

`--spacing-{integer}`: `1-16`

`--spacing-{semantic-size}`: `0`, `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--size-{integer}`: `1-16`

`--size-{semantic-size}`: `0`, `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`, `full`

#### typography

`--font-size-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--font-size-fluid-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--font-family-{semantic-name}`: `sans`, `serif`, `mono`, `display`

`--letter-spacing-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--font-size-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--font-size-em-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--line-height-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--letter-spacing-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--font-weight-{semantic-name}`: `light`, `regular`, `semi`, `bold`, `black`

#### box

`--border-radius-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--border-radius-em-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

#### transform

`--scale-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--rotate-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

`--translate-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`

#### filter

`--blur-{semantic-name}`: `xxs`, `xs`, `sm`, `md`, `lg`, `xl`, `xxl`
