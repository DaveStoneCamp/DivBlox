<?php
// Task:
// A palindrome is a word that reads the same backward or forward.
// Write a function that checks if a given word is a palindrome. Character case should be ignored.
// For example, isPalindrome("Never Odd Or Even") should return true as character case should be ignored, resulting in "Never Odd Or Even", which is a palindrome since it reads the same backward and forward.

//ATTEMPT 1
// class Palindrome
// {
//     public static function isPalindrome($word)
//     {
//         //TODO: Implement this
//         $word = strtolower(str_replace(" ", "", $word));
//         return $word == strrev($word);
//         // return false;
//     }
// }

// if (Palindrome::isPalindrome('Dont nod')){
//     echo 'Palindrome';
// } else{
//     echo 'Not palindrome';
// }

//After TODO is done delete.
//Coding standards
//Pal string in variable

//ATTEMPT 2
class Palindrome {
    public static function isPalindrome($strInputWord) {
        // Remove special characters and spaces from the word and Convert the word to lowercase
        $strWord = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $strInputWord));

        // Reverse the word
        $strWordReverse = strrev($strWord);
        
        // Check if the word is equal to its reverse
        if ($strWord == $strWordReverse) {
            return true;
        } else {
            return false;
        }
    }
}

$strInputWord = "   $ d;';[ o ./;'[d";

if (Palindrome::isPalindrome($strInputWord)) {
    echo 'Palindrome';
} else {
    echo 'Not palindrome';
}

?>