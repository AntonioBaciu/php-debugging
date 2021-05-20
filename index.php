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

new_exercise(1);

// Exercise #2:

new_exercise(2);

// -- Issue -- 
// variable $monday is set to the element at index 1 of the array => displays tuesday

// -- Solution --
// In order to display 'monday', set $monday = to the element with index 0;

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


// Exercise #3:

new_exercise(3);

// -- Issue -- 
// The displayed string starts from index 0 and stops at index 10 

// -- Solution --  info about substr() -> https://www.php.net/manual/en/function.substr.php
// In order to skip the [“] character, the new string must start at index 3
// and stop at index 10
$str = '“Debugged ! Also very fun”';
echo substr($str, 3, 10);


// Exercise #4:

new_exercise(4);

// -- Issue -- 
// substr() function displays the entire day name 

// -- Solution -- 
// Missing [&] character

foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}

print_r($week);



// Exercise #5:

new_exercise(5);
// -- Issue -- 
// The array is printing every letter of the alfabet (a-z) and continues to 
// print aa, ab, ac etc. 

// -- Solution -- 
// 1) Added an if statement to specify when the for loop have to stop
//    In this case, it should stop when after reaching the last letter [z]

// 2) Specified a condition to make it stop printing after the last letter.
//    Using strlen() I specified the length of $letter has to be 1.
//    Then I moved [array_push] inside the if statement, so it will run only if the
//    comdition is true.

// 3) The result worked, but the type of $letter was [int] instead of [string].
//    Used strval($letter) to convert it to a string.

// $arr = [];
// for ($letter = 'a'; $letter <= 'z'; $letter++) {
//     if (strlen(strval($letter)) < 2) {
//         array_push($arr, $letter);
//     }
// }

// OR make the loop run untill it encounters 'aa'

$arr = [];
for ($letter = 'a'; $letter !== 'aa'; $letter++) {

    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array



// Exercise #6:

new_exercise(6);
// -- Fix --
// 1) Added semicolon at the end of $hero_lastnames
// 2) Added [&] before $param 
// 3) Changed echo implode() to return implode() & echo $randname to return $randname
// 4) Changed return implode() to return implode(" - ", $params)   ->   https://www.php.net/manual/en/function.implode.php
// 5) Changed rand(0, count($test)) to rand(0, count($test) - 1) to avoid errors
// 6) Removed unused function randomGenerate($arr, $amount)
$arr = [];


function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];
    foreach ($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $test = [$heroes[0], $heroes[1]];
    $randname = $test[rand(0, count($test) - 1)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();


// Exercise #7:
// Fix:
// Replaced [return] with [echo]
// Replaced [date] with [idate]  ->  https://www.php.net/manual/en/function.idate.php
new_exercise(7);
function copyright(int $year)
{
    echo "&copy; $year BeCode";
}
//print the copyright
copyright(idate('Y'));


// Exercise #8:

// Fix: Replaced [||] with [&&] since the email AND the password 
// should be correct to grant access
new_exercise(8);
function login(string $email, string $password)
{
    if ($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John';
        return ' Smith';
    }
    return 'No access';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!



// Exercise #9:

// Fix:
// 1) Added [echo] to each isLinkValid()
// 2) Replaced [== true] with [!== false]

new_exercise(9);

function isLinkValid(string $link)
{
    $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}

//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

// Exercise #10:

new_exercise(10);
// Fix:
// 1) Added $count = count($areTheseFruits)
// 2) Added $i < $count

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$count = count($areTheseFruits);
for ($i = 0; $i < $count; $i++) {
    if (!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this
// The count was decreasing so the loop prematurely exited the loop.