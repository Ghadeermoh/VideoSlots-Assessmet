<?php 


function checkIfStringPalindrom($string){
    $test = false ;
    # get the reverse of String 
    $revertOfString = strrev($string);
    if ($revertOfString == $string){
        $test = true ;  
    }
    return $test;
}


$string = "radar";
$test =checkIfStringPalindrom ($string);
if ($test == true){
    echo "String is palindrome";
}
else {
    echo  "String is not palindrome";
}
?>