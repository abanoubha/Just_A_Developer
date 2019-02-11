//check if the reversed characters of a word is equal to the original word like "pop". read it backward is the same as forward.
function isPalindrome(str){
  //remove special characters, and replace Capital with Small letters
  var removeChar = str.replace(/[^A-Z0-9]/ig, "").toLowerCase();
  //split the word into array of characters, then reverse them, then join them
  var checkPalindrome = removeChar.split('').reverse().join('');
  //check if reversed equal original?
    if(removeChar === checkPalindrome){
      return true;
    }else{
      return false;
    }
}
isPalindrome("space"); //return false as "space" != "ecaps"
isPalindrome("pop"); //return true as "pop" == "pop"
