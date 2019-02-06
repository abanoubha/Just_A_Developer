<?php
function isPalindrome($str){
  if (strrev($str) == $str){   
      return true;//palindrome
      }else{ 
      return false;//not palindrome
      }
}
//check #1
if(Palindrome("space")){//false
  echo "Palindrome";   
}else{
  echo "Not a Palindrome";   
}
//check #2
if(Palindrome("pop")){//true
  echo "Palindrome";   
}else{
  echo "Not a Palindrome";   
}
?> 
