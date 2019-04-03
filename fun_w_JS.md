## how to delete all posts on facebook page
```javascript
var showPosts = document.getElementsByClassName("_4xev _p");
for(var j = 0; j < showPosts.length; j++){
   var del = document.getElementsByClassName("_54nh");
   for(var i = 0; i<del.length; i++){
      del[i].click();
      var conf = document.getElementsByClassName("uiButtonConfirm");
      conf[0].click()
      console.log(i + "posts was deleted.")
   }
}

```
