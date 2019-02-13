# HTML Cheatsheet

## Basic Tags

`<html></html>` creates an HTML document.

`<head></head>` sets off the title & other info that isn't displayed.

`<body></body>` sets off the visible portion of the document.

`<title></title>` puts name of the document in the title bar; when bookmarking pages, this is what is bookmarked.

## Body Attributes (only used in email newsletters)

`<body bgcolor=?>` sets background color, using _name_ or _hex_ value.

`<body text=?>` sets text color, using _name_ or _hex_ value.

`<body vlink=?>` sets color of visited links, using _name_ or _hex_ value.

`<body alink=?>` sets color of active links (while mouse-clicking).

## Text Tags

`<pre></pre>` creates preformatted text.

`<h1></h1>`  to `<h6></h6>` created headlines. **_Note_**: H1 = Largest, H2 = Smaller, .. and H6 = Smallest.

`<b></b>` creates **bold text** (should use `<strong>` instead).

`<i></i>` creates _italicized text_ (should use `<em>` instead).

`<tt></tt>` create typewriter-style text.

`<code></code>` used to define source code, usually monospace.

`<cite></cite>` creates a citation, usually processed in _italics_.

`<address></address>` creates address section, usually processed in _italics_.

`<em></em>` emphasizes a word (usually processed in _italics_).

`<strong></strong>` emphasizes a word (usually processed in **bold**).

`<font size=?> </font>` sets size of font - 1 to 7 (should use CSS instead).

`<font color=?> </font>` sets font color (should use CSS instead).

`<font face=?> </font>` defines the font used (should use CSS instead).

## Links

`<a href="URL">Clickable text</a>` creates a hyperlink to a Uniform Resource Locater (URL) .

`<a href="mailto:EMAIL_ِADDRESS">clickable text</a>` creates a hyperlink to an email address.

`<a name="NAME">` create a target location within a document.

`<a href="#NAME">clickable text</a>` creates a link to that target location within a document.

## Formatting

`<p> </p>` Creates a new paragraph
`<br>` Inserts a line break (carriage return)

`<blockquote> </blockquote>` Puts content in a quote - indents text from both sides

`<div> </div>` Used to format block content with CSS

`<span> </span>` Used to format inline content with CSS

## Lists

`<ul> </ul>` Creates an unordered list

`<ol start=?> </ol>` Creates an ordered list (start=xx,
where xx is a counting number)

`<li> </li>` Encompasses each list item

`<dl> </dl>` Creates a definition list

`<dt>` Precedes each definition term

`<dd>` Precedes each definition

## Graphical elements

`<hr>` inserts a horizontal rule.

`<hr size=?>` sets size (height) of horizontal line

`<hr width=?>` sets width of rule (as a % or absolute pixel length)

`<hr noshade>` creates a horizontal rule without a shadow

`<img src="URL" />` adds image; it is a separate file located at the URL

`<img src"URL" align=?>` aligns image **left** / **right** / **center** / **bottom** / **top** / **middle** (use CSS instead)

`<img src="URL" border=?>` Sets size of border surrounding image (use CSS instead)

`<img src="URL" height=?>` Sets height of image, in pixels.

`<img src="URL" width=?>` Sets width of image, in pixels.

`<img src="URL" alt=?>` Sets the alternate text for browsers that can't process images (required by the ADA). **_Note_**: ADA stands for _the Americans with Disabilities Act_.

## Forms

`<form> </form>` defines a form

`<select multiple name=? size=?> </select>` Creates a scrolling menu. Size sets the number of menu items visible before user needs to scroll.

`<select name=?> </select>` Creates a pulldown / dropdown menu

`<option>` Sets off each menu item

`<textarea name=? cols="x" rows="y"></textarea>` Creates a text box area. Columns set the width; rows set the height.

`<input type="checkbox" name=? value=?>` Creates a checkbox.

`<input type="checkbox" name=? value=? checked>` Creates a checkbox which is pre-checked.

`<input type="radio" name=? value=?>` Creates a radio button.

`<input type="radio" name=? value=? checked>` Creates a radio button which is pre-checked.

`<input type="text" name=? size=?>` Creates a one-line text area. Size sets length, in characters.

`<input type="submit" value=?>` Creates a submit button. Value sets the text in the submit button.

`<input type="image" name=? src=? border=? alt=?>` Creates a submit button using an image.

`<input type="reset">` Creates a reset button (or CLEAR button)

## Tables

_Note_: use only for **_data layout_** - use CSS for page layout.

`<table> </table>` creates a table

`<tr> </tr>` Sets off each row in a table

`<td> </td>` Sets off each cell in a row

`<th> </th>` Sets off the table header (a normal cell with **bold**,
centered text)

## HTML5 Input Tag Attributes

`<input type="email" name=?>` Sets a single-line textbox for email addresses

`<input type="url" name=?> ` Sets a single-line textbox for URLs

`<input type="number" name=?>` Sets a single-line textbox for a number 

`<input type="range" name=?>` Sets a single-line text box for a range of numbers

`<input type="date/month/week/time" name=?> ` Sets a single-line text box with a calendar showing the date/month/week/time 

`<input type="search" name=?> ` Sets a single-line text box for searching

`<input type="color" name=?>` Sets a single-line text box for picking a color

## Table Attributes (only use for email newsletters)

`<table border=?>` Sets the width of the border around table cells

`<table cellspacing=?>` Sets amount of space between table cells

`<table cellpadding=?>` Sets amount of space between a cell's border and its contents

`<table width=?>` Sets width of the table in pixels or as a percentage

`<tr align=?>` Sets alignment for cells within the row
(left/center/right)

`<td align=?>` Sets alignment for cells (left/center/right)

`<tr valign=?>` Sets vertical alignment for cells within the row
(top/middle/bottom)

`<td valign=?>` Sets vertical alignment for cell (top/middle/bottom)

`<td rowspan=?>` Sets number of rows a cell should span (default=1)

`<td colspan=?>` Sets number of columns a cell should span

`<td nowrap>` Prevents lines within a cell from being broken to fit

***
You can download [_this android app_](https://play.google.com/store/apps/details?id=com.abanoubhanna.cheatsheets "Coding Cheat Sheets Android app") to read this cheatsheet offline without Internet connection.
