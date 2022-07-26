
<?php

// ------------ Functions ------ //

$y = 12;

// function registerUser() {
//     global $y; // if u want to use a global variable.
//     echo $y;

//     $x = 10;
//     echo 'User registered';
// }

// echo $x;


// ------ function with arguments

function registerUser($email) {
    echo "${email} registered" . '<br>';
}

registerUser('tmugisha@gmail.com');

// ------ func which return something
function sum($n1, $n2) {
    return $n1 + $n2;
}

$number = sum(10, 2);

echo $number;

// with default values
// function sum($n1 = 4, $n2 = 5) {
//     return $n1 + $n2;
// }
// $number = sum();
// echo $number;

// ------ Anonymous functions

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 5);

// ------ arrow functions

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(9, 9);