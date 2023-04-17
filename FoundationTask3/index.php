<?php
// Task:
// A palindrome is a word that reads the same backward or forward.
// Write a function that checks if a given word is a palindrome. Character case should be ignored.
// For example, isPalindrome("Never Odd Or Even") should return true as character case should be ignored, resulting in "Never Odd Or Even", which is a palindrome since it reads the same backward and forward.



class Palindrome
{
    public static function isPalindrome($word)
    {
        //TODO: Implement this
        $word = strtolower(str_replace(" ", "", $word));
        return $word == strrev($word);
        // return false;
    }
}

if (Palindrome::isPalindrome('Never Odd Or Even')){
    echo 'Palindrome';
} else{
    echo 'Not palindrome';
}
?>