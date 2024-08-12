<?php
$str = "this is a string";
echo $str;

$str_len = strlen($str);
echo "<br> the length is: ";
echo $str_len;
echo "<br>";

// concatenation
$str1 = "apple";
$str2 = "mango";
echo $str1 . $str2;
echo "<br>";

// count words
$words = str_word_count($str);
echo $words;

// reverse
strrev($str1);

// position finder
strpos($str1, "pp");

// replace
str_replace("pp", "ab", $str1);
