# CSS Cheat Sheet

The Syntax of the language is

```css
selector {
    property: value;
    property2: value;
}
```

## CSS Selectors

| Selector        | HTML Element                              |
| --------------- | ----------------------------------------- |
| `*`             | All elements                              |
| `div`           | `<div>`                                   |
| `div *`         | all elements within `<div>`               |
| `div span`      | `<span>` within `<div>`                   |
| `div, span`     | `<div>` and `<span>`                      |
| `div > span`    | `<span>` with parent `<div>`              |
| `div + span`    | `<span>` preceded by `<div>`              |
| `.class`        | elements of class="class"                 |
| `div.class`     | `<div>` of class="class"                  |
| `#itemid`       | element with id="itemid"                  |
| `div#itemid`    | `<div>` with id="itemid"                  |
| `a[attr]`       | `<a>` with attribute "attr"               |
| `a[attr='x']`   | `<a>` when "attr" is "x"                  |
| `a[class~='x']` | `<a>` when class is a list containing 'x' |
| `a[lang|='en']` | `<a>` when lang begins "en"               |

## CSS Pseudo Selectors & Pseudo Classes

| `:first­-child` | First child element |
| --------------- | ------------------- |
|`:first­-line`|First line of element|
|`:first­-letter`|First letter of element|
|`:hover`|Element with mouse over|
|`:active`|Active element|
|`:focus`|Element with focus|
|`:link`|Unvisited links|
|`:visited`|Visited links|
|`:lang(var)`|Element with language "­var­"|
|`:before`|Before element|
|`:after`|After element|

## CSS Sizes

|0|0 requires no unit|
|---|---|
|**Relative Sizes**|
|em|1em equal to font size of parent (same as 100%)|
|ex|Height of lower case "­x"|
|%|Percentage|
|**Absolute Sizes**|
|px|Pixels|
|cm|Centim­eters|
|mm|Millim­eters|
|in|Inches|
|pt|1pt = 1/72in|
|pc|1pc = 12pt|

## CSS Colors

|#789abc|RGB Hex Notation|
|---|---|
|#acf|Equates to "­#aa­ccf­f"|
|rgb(0,­25,50)|Value of each of red, green, and blue. 0 to 255, may be swapped for percentages.|

## CSS Box Model

![CSS Box Model](https://www.cheatography.com/uploads/davechild_1318072673_box-model.png)

## CSS Positioning

|display|clear|
|---|---|
|position|z-index|
|top|direction|
|right|unicod­e-bidi|
|bottom|overflow|
|left|clip|
|float|visibility|

## CSS Dimensions

|width|min-width|max-width|
|---|---|---|
|height|min-height|max-height|
|vertical-­align|||

## CSS Color & Background

|color|
|---|
|background|
|backgr­oun­d-r­epeat|
|backgr­oun­d-image|
|backgr­oun­d-color|
|backgr­oun­d-p­osition|
|backgr­oun­d-a­tta­chment|

## CSS Text

|text-i­ndent|
|---|
|word-s­pacing|
|text-align|
|text-t­ran­sform|
|text-d­eco­ration|
|white-­space|
|text-s­hadow|
|line-h­eight|
|letter-spacing|

## CSS Fonts

|font|
|---|
|font-w­eight|
|font-f­amily|
|font-s­tretch|
|font-style|
|font-size|
|font-v­ariant|
|font-s­ize­-adjust|

## CSS Boxes

|margin|border­-color|margin-top|
|---|---|---|
|border­-to­p-color|margin­-right|border­-ri­ght­-color|
|margin­-bottom|border­-bo­tto­m-color|margin­-left|
|border­-le­ft-­color|padding|border­-style|
|paddin­g-top|border­-to­p-style|paddin­g-right|
|border­-ri­ght­-style|paddin­g-b­ottom|border­-bo­tto­m-style|
|paddin­g-left|border­-le­ft-­style|border|
|border­-width|border-top|border­-to­p-width|
|border­-bottom|border­-ri­ght­-width|border­-right|
|border­-bo­tto­m-width|border­-left|border­-le­ft-­width|

## CSS Tables

|captio­n-side|
|---|
|border­-sp­acing|
|table-­layout|
|empty-­cells|
|border­-co­llapse|
|speak-­header|

## CSS Paging

|size|page-b­rea­k-i­nside|
|---|---|
|marks|page|
|page-b­rea­k-b­efore|orphans|
|page-b­rea­k-after|widows|

## CSS Interface

|cursor|
|---|
|outlin­e-style|
|outline|
|outlin­e-color|
|outlin­e-width|

## CSS Aural

|volume|elevation|speak|
|---|---|---|
|speech­-rate|pause|voice-­family|
|pause-­before|pitch|pause-­after|
|pitch-­range|cue|stress|
|cue-before|richness|cue-after|
|speak-­pun­ctu­ation|play-d­uring|speak-­numeral|
|azimuth|

## Other CSS Properties

|content|list-s­tyl­e-type|quotes|
|---|---|---|
|list-s­tyl­e-image|counte­r-reset|list-s­tyl­e-p­osition|
|counte­r-i­ncr­ement|marker­-offset|list-style|