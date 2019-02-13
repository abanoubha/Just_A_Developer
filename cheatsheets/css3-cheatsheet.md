# CSS3 Cheat Sheet

## CSS3 Selectors

| selector              | Meaning                                                      |
| --------------------- | ------------------------------------------------------------ |
| E[att^="val"]         | any E element whose att attribute value begins with "val"    |
| E[att$="val"]         | any E element whose att attribute value ends with "val"      |
| E[att*="val"]         | any E element whose att attribute value contains the substring "val" |
| E:root                | the document's root element. In HTML, the root element is always the HTML element. |
| E:nth-child(n)        | any E element that is the n-th child of its parent.          |
| E:nth-last-child(n)   | any E element that is the n-th child of its parent, counting from the last child. |
| E:nth-of-type(n)      | any E element that is the n-th sibling of its type.          |
| E:nth-last-of-type(n) | any E element that is the n-th sibling of its type, counting from the last sibling. |
| E:last-child          | any E element that is the last child of its parent.          |
| E:first-of-type       | any E element that is the first sibling of its type.         |
| E:last-of-type        | any E element that is the last sibling of its type.          |
| E:only-child          | any E element that is the only child of its parent.          |
| E:only-of-type        | any E element that is the only sibling of its type.          |
| E:empty               | any E element that has no children (including text nodes)    |
| E:target              | an E element that is the target of the referring URL         |
| E:enabled             | any user interface element (from control) E that is enabled  |
| E:disabled            | any user interface element (from control) E that is disabled |
| E:checked             | any user interface element (from control) E that is checked  |
| E::selection          | the portion of an element E that is currently selected or highlighted by the user |
| E:not(s)              | any E element that does not match the simple selector s      |
| E~F                   | any F element that is preceded by an E element               |

## CSS3 RGBA

```css
background-color: rgba(R, G, B, A);
color: rgba(R, G, B, A);
```

**Syntax**:
|rgba(|R,|G,|B,|A)|
|---|---|---|---|---|
|colors|Red, |Green, |Blue,| Opacity|
|max|255|255|255|1|

## CSS3 Equally Rounded Corners

|webkit|-webkit-border-radius|
|---|---|
|firefox|-moz-border-radius|
|standard|-border-radius|

## CSS3 Individually Rounded Corners

**Webkit**

`-webkit- border-top-left-radius`

`-webkit-border-top-right-radius`

`-webkit-border-bottom-left-radius`

`-webkit-border-bottom-right-radius`

**Moz**

`-moz- border-top-left-radius`

`-moz-border-top-right-radius`

`-moz-border-bottom-left-radius`

`-moz-border-bottom-right-radius`

**Standard**

`border-top-left-radius`

`border-top-right-radius`

`border-bottom-left-radius`

`border-bottom-right-radius`

## CSS3 Shadow

**Webkit**: `-webkit-box-shadow`

**Firefox**: `-moz-box-shadow`

**Standard**: `box-shadow` & `text-shadow`

_Syntax_: x-offset, y-offset, blur, color. For example: `5px 5px 5px #000000`

## CSS3 Font Face

```css
@font-face {
    font-family: '';
    src: url('url_of_font_file');
    src: local(''), url('url_of_font.woff'), format('woff'), url('url_of_font.ttf'), format('truetype');
}
```

## CSS3 Multiple Columns

**Webkit**: `-webkit-column-count` & `-webkit-column-gap`

**Firefox**: `-moz-column-count` & `-moz-column-gap`

**Standard**: `column-count` & `column-gap`

## CSS3 Box Sizing

```css
box-sizing: content-box;
-moz-box-sizing: content-box;
-webkit-box-sizing: content-box;
-ms-box-sizing: content-box;
-o-box-sizing: content-box;
-icab-box-sizing: content-box;
-khtml-box-sizing: content-box;
```

_Syntax_: `content-box` acts like a standard box-model element, while `border-box` renders padding and border inside the box.

## CSS3 Box Resize

`min-height` `min-width` `resize` `overflow: auto`

## CSS3 Outline

`outline: 5px dashed #000000;`

_Syntax_: thickness, style, color;

## CSS3 Gradients

`-webkit-gradient`

`-moz-linear-gradient`


***
You can download [_this android app_](https://play.google.com/store/apps/details?id=com.abanoubhanna.cheatsheets "Coding Cheat Sheets Android app") to read this cheatsheet offline without Internet connection.
