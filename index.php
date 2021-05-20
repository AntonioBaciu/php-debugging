<?php

declare(strict_types=1);
ini_set('display_errors', (string)1);
ini_set('display_startup_errors', (string)1);
error_reporting(E_ALL);

// Exercice #1:

//   -- Issue --
// The function new_exercise() has no parameter. 
// $block = "Exercise $x" => $x is not defined
// -- Solution -- -> define $x using it as a parameter

echo "Exercise 1 starts here:";
function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);

// Exercise #2:
// -- Issue -- 
// variable $monday is set to the element at index 1 of the array => displays tuesday

// -- Solution --
// In order to display 'monday', set $monday = to the element with index 0;

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise(3);

// Exercise #3:
// -- Issue -- 
// The displayed string starts from index 0 and stops at index 10 

// -- Solution --  info about substr() -> https://www.php.net/manual/en/function.substr.php
// In order to skip the [“] character, the new string must start at index 3
// and stop at index 10
$str = '“Debugged ! Also very fun”';
echo substr($str, 3, 10);


new_exercise(4);

// Exercise #4:

// -- Issue -- 
// substr() function displays the entire day name 

// -- Solution -- 
// Missing [&] character

foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}

print_r($week);