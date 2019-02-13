# CSS Cheat Sheet

## Adding CSS

External `link` (good DRY way):
```
<head>
  <link rel="stylesheet" href="styles.css" />
</head>
```

In the `head`:
```
<head>
  <style>
    h1 {color: red; }
  </style
</head>
```

Inline `style` attribute: `<h1 style="color: red;">Learning CSS</h1>`


## Applying  and priority

1. External `link`
2. In the `head`
3. Inline `style` attribute
4. Using `!important` (ex `background: #e0e2e6 !important;`)

If we have same selectors:
```
.intro { 
  width: 900px;
  color: black; 
}
.intro { 
  color: red;          /* last definition overrides previous */
  margin-bottom: 5px;  /* non-conflicting properties will be combined */
}
```

Result:
```
  width: 900px;
  color: red;
  margin-bottom: 5px;
```

## Selectors

Sample: `<h1 id="main" class="article home"></h1>`

element `h1 { ... }`
class `.article { ... }`
ID `#main { ... }`
combined `h1#main.article.home { ... }`
grouping `h1, h2, p { ... }`
universal selector `*`: `*.warning` and `.warning` are equal

Attribute selector:

- `[attr]`
- `[attr=value]`
- `span[lang~="en-us"]` `<span lang="en-us en-gb en-au en-nz">`
- `span[lang|="zh"]` `<span lang="zh-CN">世界您好</span>`
- `a[href^="#"]` all internal links
- `a[href$=".cn"]` `<a href="http://example.cn">Chinese</a>`
- `a[href*="example"]` all links to with "example" in the url

Combinations:

- adjacent sibling `li:first-of-type + li`
- general sibling `p ~ span`
- direct children `div > span`
- descendant `div span` matches `<div><p><span>...</span></p></div>`

Pseudo-elements: `::after`, `::before`, `::first-letter`, `::first-line`, `::selection`

Pseudo-classes: 

- a `:link`, `:visited`, `:hover`, `:active`
- `:not` ex: `div:not(.outer)`


## @-rules

`@charset`, `@import`, `@media`, `@supports`


## Counters

https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Counters

## Properties

- `float: left | right | none`

### Visibility & Display

- `visibility: hidden`
- `display: inline | block | none | ...`

### Box model

content  - padding - border - margin

- `width`, `height`, `padding`, `border`, `margin`, `outline`
- `overflow`

### Positioning

- `position: `
  - `static` - by default - normal flow of the page
  - `fixed` - positioned relative to the browser window
  - `relative` to its normal position
  - `absolute` relative to the first parent element that has a position other than static
- `top`, `bottom`, `left`, `right`

### Floating

- `float: right | left`
- `clear: none | left | right | both`

## Basic Selectors
```css
#name /* <div id='name'> */
.name{} /* <div class='name'> */
.parent.name{} /* <div class='parent name'> */
.parent .child{} /* Child Element <div class='parent'> <div class='child'> */
.parent > .child{} /* Direct Child Element ONLY (grandchildren will be ignored) */
.one + .two{} /* Directly Adjoining Elements <div class='one'></div> <div class='two'></div>  */
.one ~ .two{} /* Any Following Elements */
```

## dynamic selectors
```css
.element:first-of-type{}
.element:last-of-type{}
.element:rifst-child{}
.element:last-child{}
.element:nth-child(1){}
.element:nth-child(2n){}
.element:nth-child(2n-3){}
.element:nth-last-child(2){}
ul:nth-of-type(3)
```

## Pseudo Elements
```css
.element:before{}
.element:after{}
.element::first-letter{}
.element::first-line{}
```

## Element selectors

**Element** -- selects all `h2` elements on the page

``` CSS
h2 {
    foo: bar;
}
```

**Group** -- selects all `h1`, `h2` and `h3` elements on the page

``` CSS
h1, h2, h3 {
    foo: bar;
}
```


## Class and ID selectors

**Class** -- selects all elements with class attribute containing `foo` or only `p` elements with that class

``` CSS
.foo {
    bar: fum;
}
p.foo {
    bar: fum;
}
```

**ID** -- selects the element with 'baz' id attribute value

``` CSS
#foo {
    bar: fum;
}
```


## Contextual selectors

**Descendant** -- selects all `p` elements within the infinite-level hierarchy of element `#foo` descendants

``` CSS
#foo p {
    bar: fum;
}
```

**Adjacent sibling** -- selects the sibling element `p` that is immediately next to `h2` element

``` CSS
h2 + p {
    foo: bar;
}
```

**Child** -- selects all `p` elements that are immediate children of `#foo` element

``` CSS
#foo > p {
    bar: fum;
}
```

**General sibling** -- selects all elements `p` that are siblings to the `h2` element

``` CSS
h2 ~ p {
    foo: bar;
}
```


## Pseudo-class selectors


### Pseudo-class selectors for link and user states

**Unvisited link** -- applies to link elements that have not been visited

``` CSS
a:link {
    foo: bar;
}
```

**Visited link** -- applies to link elements that have been visited

``` CSS
a:visited {
    foo: bar;
}
```

**Focus state** -- applies to selected `.foo` element that is ready for input 

``` CSS
.foo:focus {
    bar: fum;
}
```

**Hover state** -- applies when mouse pointer is over the `.foo` element

``` CSS
.foo:hover {
    bar: fum;
}
```

**Active state** -- applies when `.foo` element is in process of being clicked

``` CSS
.foo:active {
    bar: fum;
}
```


### Pseudo-class selectors that apply to siblings

**First child** -- selects the specified `.foo` element when it is the first child of its parent

``` CSS
.foo:first-child {
    bar: fum;
}
```

**Last child** -- selects the specified `.foo` element when it is the last child of its parent

``` CSS
.foo:last-child {
    bar: fum;
}
```

**Only child** -- selects the specified `.foo` element when it is the only child of its parent

``` CSS
.foo:only-child {
    bar: fum;
}
```

**First of type** -- selects the `h2` element when it is the first element of its type within its parent element

``` CSS
h2:first-of-type {
    foo: bar;
}
```

**Last of type** -- selects the `h2` element when it is the last element of its type within its parent element

``` CSS
h2:last-of-type {
    foo: bar;
}
```

**Only of type** -- selects the `h2` element when it is the only element of its type within its parent element

``` CSS
h2:only-of-type {
    foo: bar;
}
```

**Nth child** -- selects the `n`th `.foo` child element

``` CSS
.foo:nth-child(n) {
    bar: fum;
}
```

**Nth last child** -- selects the `n`th `.foo` child element counting backwards

``` CSS
.foo:nth-last-child(n) {
    bar: fum;
}
```

**Nth of type** -- selects the `n`th `h2` child element of its type

``` CSS
h2:nth-of-type(n) {
    foo: bar;
}
```

**Nth last of type** -- selects the `n`th `h2` child element of its type counting backwards

``` CSS
h2:nth-last-of-type(n) {
    foo: bar;
}
```

Useful `n` values:

- `odd` or `2n+1` -- every odd child or element
- `even` or `2n` -- every even child or element
- `n` -- every nth child or element
- `3n` -- every third child or element (3, 6, 9, ...)
- `3n+1` -- every third child or element starting with `1` (1, 4, 7, ...)
- `n+6` -- all but first five children or elements (6, 7, 8, ...)
- `-n+5` -- only first five children or elements (1, 2, ..., 5)


### Pseudo-element selectors

**First letter** -- selects the first letter of the specified `.foo` element, commonly used with `:first-child` to target first paragraph

``` CSS
.foo::first-letter {
    bar: fum;
}
```

**First line** -- selects the first line of the specified `.foo` element, commonly used with `:first-child` to target first paragraph

``` CSS
.foo::first-line {
    bar: fum;
}
```

**Before** -- adds generated content before the `.foo` element when used with `content` property

``` CSS
.foo::before {
    bar: fum;
    content: 'baz';
}
```

**After** -- adds generated content after the `.foo` element when used with `content` property

``` CSS
.foo::after {
    bar: fum;
    content: 'baz';
}
```


## Attribute selectors

**Present** -- selects `.foo` elements with `bar` attribute present, regardless of its value

``` CSS
.foo[bar] {
    fum: baz;
}
```

**Exact** -- selects `.foo` elements where the `bar` attribute has the exact value of `fum`

``` CSS
.foo[bar="fum"] {
    baz: qux;
}
```

**Whitespace separated** -- selects `.foo` elements with `bar` attribute values contain specified partial value of `fum` (whitespace separated)

``` CSS
.foo[bar~="fum"] {
    baz: qux;
}
```

**Hyphen separated** -- selects `.foo` elements with `bar` attribute values contain specified partial value of `fum` immediately followed by hyphen (`-`) character

``` CSS
.foo[bar|="fum"] {
    baz: qux;
}
```

**Begins with** -- selects `.foo` elements where the `bar` attribute begins with `fum`

``` CSS
.foo[bar^="fum"] {
    baz: qux;
}
```

**Ends with** -- selects `.foo` elements where the `bar` attribute ends with `fum`

``` CSS
.foo[bar$="fum"] {
    baz: qux;
}
```

**Containts** -- selects `.foo` elements where the `bar` attribute contains string `fum` followed and preceded by any number of other characters

``` CSS
.foo[bar*="fum"] {
    baz: qux;
}
```


## Misc selectors

**Not** -- selects `.foo` elements that are NOT `.bar` elements

``` CSS
.foo:not(.bar) {
    fum: baz;
}
```

**Root** -- selects the highest level parent element in the DOM

``` CSS
:root {
    foo: bar;
}
```

**Empty** -- selects `.foo` elements that have no children or whitespace inside

``` CSS
.foo:empty {
    bar: fum;
}
```

**In-range** and **Out-of-range** -- selects `.foo` elements that have values in or out of range

``` CSS
.foo:in-range {
    bar: fum;
}
.foo:out-of-range {
    bar: fum;
}
```

## CSS Media Queries

Responsive Grid Media Queries - 1280, 1024, 768, 480
1280-1024   - desktop (default grid)
1024-768    - tablet landscape
768-480     - tablet 
480-less    - phone landscape & smaller

```css
@media all and (min-width: 1024px) and (max-width: 1280px) { }

@media all and (min-width: 768px) and (max-width: 1024px) { }

@media all and (min-width: 480px) and (max-width: 768px) { }

@media all and (max-width: 480px) { }
```

Small screens - MOBILE

```css
@media only screen { } /* Define mobile styles - Mobile First */

@media only screen and (max-width: 40em) { } /* max-width 640px, mobile-only styles, use when QAing mobile issues */

/* Medium screens - TABLET */
@media only screen and (min-width: 40.063em) { } /* min-width 641px, medium screens */

@media only screen and (min-width: 40.063em) and (max-width: 64em) { } /* min-width 641px and max-width 1024px, use when QAing tablet-only issues */

/* Large screens - DESKTOP */
@media only screen and (min-width: 64.063em) { } /* min-width 1025px, large screens */

@media only screen and (min-width: 64.063em) and (max-width: 90em) { } /* min-width 1024px and max-width 1440px, use when QAing large screen-only issues */

/* XLarge screens */
@media only screen and (min-width: 90.063em) { } /* min-width 1441px, xlarge screens */

@media only screen and (min-width: 90.063em) and (max-width: 120em) { } /* min-width 1441px and max-width 1920px, use when QAing xlarge screen-only issues */

/* XXLarge screens */
@media only screen and (min-width: 120.063em) { } /* min-width 1921px, xlarge screens */

/*------------------------------------------*/

 

/* Portrait */
@media screen and (orientation:portrait) { /* Portrait styles here */ }
/* Landscape */
@media screen and (orientation:landscape) { /* Landscape styles here */ }

/* CSS for iPhone, iPad, and Retina Displays */

/* Non-Retina */
@media screen and (-webkit-max-device-pixel-ratio: 1) {
}

/* Retina */
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (min--moz-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5) {
}

/* iPhone Portrait */
@media screen and (max-device-width: 480px) and (orientation:portrait) {
} 

/* iPhone Landscape */
@media screen and (max-device-width: 480px) and (orientation:landscape) {
}

/* iPad Portrait */
@media screen and (min-device-width: 481px) and (orientation:portrait) {
}

/* iPad Landscape */
@media screen and (min-device-width: 481px) and (orientation:landscape) {
}
```



```html
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
```


***
You can download [_this android app_](https://play.google.com/store/apps/details?id=com.abanoubhanna.cheatsheets "Coding Cheat Sheets Android app") to read this cheatsheet offline without Internet connection.
