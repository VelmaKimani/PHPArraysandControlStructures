<?php
$a = 5;
$b = 10;


// if ($a == $b){
// } else {
//     echo ' values are NOT equal ';
// }
// if (($a == $b) == false) {
//   echo ' values are NOT equal ';
// }
// if ($a <> $b) {
//   echo ' values are NOT equal ';
// }
// if ($a == $b) {
//     echo ' values are equal ';
// } elseif ($a  < $b) {
//     echo ' $a is less than $b '; 
// } elseif ($a > $b){
//     echo ' $a is greater than $b ';
// } else {
//     echo ' values are NOT equal ';
// }

// $score = 20;

// if ($score > 59){
//     echo ' you completed the level! ';
// } else {
//     echo ' Please try again ';
// }

$num = 100;

if ($num >= 10){
    if ($num <= 1000){
        echo ' Your number is within the range. ';
    } else {
        echo ' Your number is greater than 1000, NOT within the range. ';
    }
}else {
    echo ' Your  number is less than 10, NOT within the range ';
}

?>