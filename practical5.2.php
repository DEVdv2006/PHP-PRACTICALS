<?php
$my_string = "helloworld";
echo "Original string ".$my_string."<br>";
// check if string is in lower case 
if(ctype_lower($my_string)) {
    echo "string is in lower case"."<br>";
}
 //reverse a given string
 $reverse = strrev($my_string);
 echo "Reverse of given string is-> ".$reverse."<br>";

 // remove whitespace from string
 $new_str=trim($my_string);
 echo "String after removing whitespaces-> ".$new_str."<br>";

 //replace given word from given string
 $replace=str_replace("l","e",$new_str);
 echo "String after replacing words-> ".$replace;
?>