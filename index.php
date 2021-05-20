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