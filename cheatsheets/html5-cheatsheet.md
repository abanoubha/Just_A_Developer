# HTML5 Cheat Sheet

## Standard Structure

`<html></html>` these tags are used at the beginning and end of an HTML document. This is known as the **root element**. Using these tags tells the website that the web page is being written in HTML5, and that all the other tags within these are HTML formatted.

`<title></title>` This is used for the title tag of the page. Here you'll place a title that is useful to both search engines and users.

### Here's what a typical layout looks like:

```html
<html>
    <head>
        <title>HTML5 Cheat Sheet</title>
    </head>
    <body>
        Your content
    </body>
</html>
```

***

`<meta/>` includes additional information about the page. This includes descriptions, author, publish date, keywords, and other _off-page_ information.

`<style>..</style>` used to include document style information which is usually CSS.

`<head></head>` use these to group information specific to the page. This includes title tags, meta descriptions, and links to both script and style sheets.

`<body></body>` between these tags is where you'll plcae all the content for users. This includes text, images, and graphic elements.

`<base />` signifies the *Base URL* and specifies all relative links in the document.

`<link />` creates association with external page like style sheets.

`<script>..</script>` all the information of links to external scripts.

### Web Page Example

```html
<html>
    <head>
        <meta charset="utf-8"/>
        <base href="https://www.abanoubhanna.com" target="_blank"/>
        <title>Abanoub Hanna Website</title>
        <link rel="stylesheet" href="/css/master.css"/>
        <script type="text/javascript">
        var myVariable = 0;
        </script>
    </head>
    <body>
        Your content
    </body>
</html>
```

## Formating Text

`<strong></strong>` places strong emphasis on something (displays in **bold** on browsers)

`<em></em>` the emphasis tag. Turns text into _italics_ on browser.

`<cite></cite>` This highlights references information. Good for quotes and statements.

`<del></del>` labels a previously deleted portion of text.

`<blockquote></blockquote>` these are used for long paragraphs of quotation which are commonly cited as well.

`<br/>` this creates a line break used for writing blocks of text on different lines.

`<sub></sub>` subscript text that is smaller and placed a half-line lower than previous text. like the **2** in H<sub>2</sub>O

`<b></b>` displays **bold** text, but you should use `<strong>` tag instead.

`<i></i>` displays *italic* text, but you should use `<em>` tag instead. It mainly used for _thoughts_ or _names_.

`<pre></pre>` monospace text laid out with the whitespace inside the element intact.

`<ins></ins>` shows a section that has been inserted into the content.

`<q></q>` used for shorter quotations.

`<hr/>` creates horizontal rule or sectional break.

`<sup></sup>` superscript text in half a line higher than previous text. It shows like **2** in X<sup>2</sup>

`<h1></h1>` to `<h6></h6>` : These are the six levels of headings on a page. `<h1>` is the most important and largest heading, and `<h6>` is the smallest and the least important heading.

`<span></span>` it is _inline label_ used to group style elements.

`<div></div>` containers used to label a page section or the placement of an element.

`<p></p>` used to organize paragraphs of text.

## HTML5 Implementing Images

`<img />` this tag is used to display image files.

`alt="text"` alternative text; used to explain image content to both search engines and users.

`width=""` specify width in pixels or percentages.

`border=""` specifies border thickness (if any).

`hspace=""`spacing on the top or bottom of the image.

`<map name=""></map>` the name of the map between the image and the map itself.

`src="url"` the url of file name of the image being displayed.

`height=""` used to specific image height in either pixels or percentages.

`align=""` where to align the image relative to other elements on the page.

`vspace=""` denote spacing on the left or right of the image.

`<map></map>` informs users that an interactive image is present with clickable areas.

`<area />` the image area of an image map.

### Example of a simple image

```html
<img src="https://www.abanoubhanna.com/logo.png" alt="website logo" width="140" height="140" />
```

## HTML5 Creating Lists

`<ol></ol>` numbered lists in sequential order.

`<ul></ul>` bullet point list (no particular order).

`<li></li>` specify each item to be bulleted or numbered.

`<dl></dl>` list item definitions.

`<dt></dt>` defines a single term inline with body content.

`<dd></dd>` a description for a defined term.

### Example of numbered list

```html
<ol>
    <li>first item</li>
    <li>second item</li>
    <li>third item</li>
</ol>
```

and the result is:

1. first item
2. second item
3. third item

### Example of pullet point list

```html
<ul>
    <li>item</li>
    <li>another item</li>
    <li>one more item</li>
</ul>
```

and the result is:

* item
* another item
* one more item

## HTML5 Document Structure

`<a href=""></a>` creates a hyperlink with defines anchor text.

`<a href="tel:xxxxxx"></a>` a link that makes numbers clickable. Great for mobile users.

`<a href="#name"></a>` anchor text used to bring users to a div element.

`<a href="mailto:sample@gmail.com">..</a>` a link that pulls up an outgoing messages to a specific email address.

`<a name=""></a>` anchor text used to bring users to a specific place in a document.

#### For example

```html
<a href="https://www.abanoubhanna.com">My Tech Blog</a>
```

## HTML5 Adding Forms & Tables

`<form></form>` tags used to create a form. Combined with _attributes_ to show how the form will operate.

`method=""` refers to the HTTP method and how to send the form data.

`autocomplete` turns autocomplete on or off on the form.

`accept-charsets` identifies character encoding on the form submission.

`<fieldset></fieldset>`  identifies the group of all fields on the form.

`action="url"` shows where data is sent when a visitor submits the form.

`enctype=""` dictates how the form data is supposed to be encoded when submitting information to the web server. Only used with `method="post"`.

`Novalidate` defines whether the form should be validated when submitted.

`target` used to show where the form response should be displayed after being submitted. Used with __blank_ , *_self* , *_parent* or *_top*.

`<label></label>` a label telling the user what to enter in each field.

`<input />` the input attribute shows what type of field information to receive from users.

## HTML5 Input Type Attributes

`type=""` specifies field input type, including text, password, date-time, checkbox,.. etc.

`name=""` the name of the form

`value=""` the value of input field information.

`size=""` the input element width in characters.

`maxlength=""` maximum input element characters allowed.

`required` tag used to ensure the `<input>` element is completed before submitting the form.

`step=""` the number intervals for an input field.

`width=""` width in pixels of an `<input>` element.

`height=""` height in pixels of an `<input>` element.

`placeholder=""` a hint for users showing what the `<input>` element value should be.

`pattern=""` checks the input against a defined value to ensure the information is correct.

`min=""` the minimum value of an `<input>` element.

`max=""` the maximum value of an `<input>` element.

`autofocus` ensures the `<input>` element comes into focus once a page loads.

`disabled` disables an `<input>` element on the form.

`<textarea></textarea>` spcifies a large text input for longer messages.

## HTML5 Select Attributes

`<select></select>` drop down box / menu for users to select from options.

`name=""` the title for a drop-down combination box.

`size=""` the number of options in a drop down box.

`multiple` allows multiple sections to be made at one time.

`required` requires a value to be selected before a user can submit a form.

`<optgroup></optgroup>` specifies the entire grouping of available options.

`<option></option>` defines one of the available options in the drop down list/menu.

### Option Attributes

`value=""` explains an option's value available for selection.

`selected` shows the default selection option for users.

`<button></button>` shows the clickable button for users to submit options.

#### Example of form

```html
<form action"action_page.php" method="post">
    <fieldset>
        <legend>Basic Information:</legend>
        First name: <br/>
        <input type="text" name="firstname" value="Abanoub" placeholder="First Name"/><br/>
        <input type="text" name="lastname" value="Hanna" placeholder="Last Name"/><br/><br/>
        Blog topic:<br/>
        <select>
            <option value"cooking">Cooking</option>
            <option value="SEO">SEO</option>
            <option value="Fashion">Fashion</option>
        </select>
        <textarea name="description"></textarea>
        <input type="submit" value="Submit"/>
    </fieldset>
</form>
```

## HTML5 Table Formatting

`<table></table>` these tags define all the content related to a table.

`<caption></caption>` a description of the table's purpose and the information it contains.

`<thead></thead>` the headers that label the content in each column.

`<tbody></tbody>` the body of the table data or information.

`<tfoot></tfoot>` describes all footer content.

`<tr></tr>` content within a single row.

`<th></th>` the data in a single header item.

`<td></td>` content within a single table cell.

`<colgroup></colgroup>` groups columns for formatting purposes.

`<col />` a single column of information within a table.

### Example of Table Formatting

```html
<table>
    <colgroup>
        <col span="2" style="background-color: #f2f"/>
        <col style="background-color:#999"/>
    </colgroup>
    <tr>
    	<th>Blog title</th>
        <th>URL</th>
        <th>DA</th>
    </tr>
    <tr>
        <td>Abanoub Hanna for Tech</td>
        <td>www.AbanoubHanna.com</td>
        <td>58</td>
    </tr>
</table>
```

## HTML5 Objects & Iframes

`<object></object>` describes a file type to be embedded (audio, vidoe, PDF, .. etc)

`height=""` the height of the object

`width=""` width of the object

`usemap=""` the name of the client-side image map within the `<object>` tag

`type=""` the type of media the object contains

---

### iFrames formatting

`<iframe></iframe>` an inline frame that allows external information to be embedded into a document

`name=""` the name of the `<iframe>` 

`src=""` the source URL for the object within the `<iframe>`

`srcdoc=""` the HTML content within the frame

`width=""` the width of the `<iframe>`

`<param />` adds extra parameters to help customize the iframe's content.

`<embed></embed>` a container for another external application of plug-in. Embed can also be used with height, width, src, and type tags above.

### Example of object & iframe & embed

```html
<object width="450" height="25"></object>
<iframe src="blogging.html" width="360" height="640">
</iframe>
<embed src="blogging.swf" width="400" height="800"></embed>
```

## New HTML5 Tags

`<header></header>` the header block for a document.

`<main></main>` the main content of a document.

`<footer></footer>` the footer block for a document or section.

`<article></article>` identifies an article within a document.

`<aside></aside>` for content contained in a sidebar.

`<section></section>` a section block in a document.

`<details></details>` additional facts or information that users can view/hide.

`<dialog></dialog>` a box or window for dialog.

`<figcaption></figcaption>` a `<figure>` element caption that describes the figure.

`<figure></figure>` a content block featuring diagrams, photos, illustrations, and more.

`<mark></mark>` displays highlighted text within the content.

`<nav></nav>` navigation links for users.

`<menuitem></menuitem>` the menu item a user can raise from a popup menu.

`<meter></meter>` the scalar measurement with known array.

`<progress></progress>` the progress of a task, usually used for a progress bar.

`<rp></rp>` display text in browsers that don't support ruby annotations.

`<rt></rt>` display east Asian typography character details.

`<ruby></ruby>` a ruby annotation for east Asian typography.

`<summary></summary>` contains a heading for a `<details>` element.

`<bdi></bdi>` format part of text in a different direction from other text.

`<time></time>` identifies time and date.

`<wbr>` a line break within content.

## Character Objects

`&#34;` or `&quot;` Quotation Marks (")

`&#38;` or `&amp;` Ampersand (&)

`&#60;` or `&lt;` Less Than (<)

`&#62;` or `&gt;` Greater Than (>)

`&#160;` or `&nbsp;`Non-breaking Space

`&#169;` or `&copy;` Copyright Symbol (&copy;)

`&#64;` or `&Uuml;` "at" symbol (&#64;)

`&#149;` or `&ouml;` Small bullet (&#149;)

`&#153;` or `&ucirc;` Trademark Symbol (&#153;)

## Unsupported Tags in HTML5

```html
<acronym></acronym>
<applet></applet>
<basefont></basefont>
<bgsound></bgsound>
<big></big>
<center></center>
<fn></fn>
<font></font>
<frame></frame>
<frameset></frameset>
<isindex></isindex>
<dir></dir>
<noembed></noembed>
<noframes></noframes>
<s></s>
<stike></stike>
<tt></tt>
<u></u>
<xmp></xmp>
```

## Handler Attributes

`Onbeforeonload` before onload event

`Oncanplay` media can start play

`Oncanplaythrough` media can be played to the end

`Oncontextmenu` context menu is triggered

`Ondragenter` element dragged on drop target

`Ondragleave` element leaves valid drop target

`Ondragover` element is dragged over drop target

`Ondragstart` at the start of the drag operation

`Ondrag` element is dragged

`Ondrop` dragged element is being dropped

`Ondragend` at the end of drag operation

`Ondurationchange` length of media is changed

`Onbeforeonload` before onload event

`Ondragenter` element dragged on drop target

`Oncanplay` media can start play

`Ondragleave` element leaves valid drop target

`Oncanplaythrough` media can be played to the end

`Ondragover` element is dragged over drop target

`Oncontextmenu` context menu is triggered

`Ondragstart` at the start of the drag operation

`Ondrag` element is dragged

`Ondrop` dragged element is being dropped

`Onemptied` media resource element becomes empty

`Onended` media has reached the end 

`Onerror` error occurs

`Onforminput` form gets user input

`Onhaschange` document has changed

`Oninput` message is triggered

`Oninvalid` element gets user input

`Onloadeddata` media data is loaded

`Onloadedmetadata` duration of media element is loaded

`Onloadstart` browser starts to load media data

`Onmessage` element is invalid

`Onmousewheel` mouse wheel is being rotated

`Onpause` media data is paused

`Onplay` media data is going to start playing

`Onplaying` media data has start playing

`Onprogress` browser is fetching media data

`Onratechange` media data's playing rate has changed

`Onscroll` element's scrollbar is being used

`Onseeked` there is an error in fetching media data

`Onseeking` element's seeking attribute is true

`Onstalled` there is an error in fetching media data

`Onstorage` document loads

`Onsuspend` browser has stopped fetching media data

`Ontimeupdate` media changes its playing position

`Onvolumechange` media changes volume, also when mute.

`Onwaiting` media has stopped playing.

## Canvas Elements

HTML `<canvas>` element is used to draw graphics on the fly via scripting (most commonly JavaScript). The `<canvas>` element is a container for graphics, you must use a script to draw the graphics themselves.

### Canvas Element

**Attributes**:

* width : unsigned long (default: 300)
* height : unsigned long (default: 150)

**Methods**:

* string : to DataURL([optional] string type [variadic] any args)
* object : getContext(string contextId)

### 2D Context

**Attributes**:

* Canvas : HTMLCanvasObject[readonly]

**Methods**:

* Void
* save() void
* restore()

### Transformation

**Methods**:

* void - scale (float x, float y)
* void - rotate(float angle)
* void - translate(float x, float y)
* void - transform(float m11, float m12, float m21, float m22, float dx, float dy)
* Set Transform (float m11, float m12, float m21, float m22, float dx, float dy)

### Image Drawing

**Methods**:

* void - drawImage(Object image, float dx, float dy
  [optional] float dw, float dh)

**Note**: Argument "image" can be of type HTMLImage element, HTMLCanvas element, or HTMLVideo element.

* void - drawImage(Object image, float sx, float sy, float sw, float sh, float dx, float dy, float dw, float dh)

### Compositing

**Attributes**:

GlobalAlpha - float (Default 1.0)

GlobalCompositeOperation - string (Default: source-over)

**Support the following values**:

* source-over
* source-in
* source-out
* source-atop
* destination-over
* destination-in
* destination-out
* destination-atop
* lighter
* copy
* xor

### Line Style

**Attributes**:

* Linewidth - float (Default: 1.0)
* Linecap - string (Default: butt)

**Supports the following values**: Butt, Round and Square

* Linejoin - string (Default: miter)

**Supports the following values**: round, and bevel

* MiterLimit - float (Default: 10)

### Text

**Attributes**:

* Font (type: string) Default: 10px sans-serif
* TextAlign (type: string) Default: start
  (supports any of the following values: start, end, left, right, center)
* TextBaseline (type: string) Default: alphabetic
  (supports the following values: top, hanging, middle, alphabetic, ideographic, bottom)

**Methods**:

* void - fillText (string text, float x, float y, [optional] float maxwidth)
* TextMetrics - measureText(string text)

### TextMetrics Interface

* width - float (Default: reasonly)

### Rectangles

**Methods**:

* void - clearRect(float x, float y, float w, float h)
* void - fillRect(float x, float y, float w, float h)
* void - strokeRect(float x, float y, float w, float h)

### Paths

* beginPath()
* closePath()
* fill()
* stroke()
* clip()
* moveTo(float x, float y)
* lineTo(float x, float y)
* quadraticCurveTo(float cpx, float cpy, float x, float y)
* bezierCurveTo(float cp1x, float cp1y, float cp2x, float cp2y, float x, float y)
* arcTo(float x1, float y1, float x2, float y2, float radius)
* arc(float x, float y, float radius, float startAngle, float float endAngle, boolean anticlockwise)
* rect(float x, float y, float w, float h)
* isPointInPath(float x, float y)

### Pixel Manipulation

**Methods**:

* ImageData - createImageData(float sw, float sh)
* ImageData - createImageData(ImageData imagedata)
* ImageData - getImageData(float sx, float sy, floay sw, float sh)
* void - putImageData (ImageData imagedata, float dx, float dy, [optional] float dirtyX, float dirtyY, float dirtyWidth, float dirtyHeight)

**CanvasPixelArray Interface**:

* Length - unsigned long (Default: readonly)

**ImageData Interface**:

* width - unsigned long (Default: readonly)
* height - unsigned long (Default: readonly)
* data - CanvasPixelArray (Default: readonly



