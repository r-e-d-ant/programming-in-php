<?php
// Simple Array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// print specific value let's print orange from fruits array
// echo $fruits[1];

// Associative Array where you can create the index

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Thierry',
    'last_name' => 'Mugisha',
    'email' => 'tmug@gmail.com'
];

// echo $person['first_name'];

// Multi dimensional array

$people = [
    [
        'first_name' => 'Thierry',
        'last_name' => 'Mugisha',
        'email' => 'tmug@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'joe@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Mugisha',
        'email' => 'jane@gmail.com'
    ]
];

// echo $people[1]['email'];

// turn it into array json object

// var_dump(json_encode($people));

// turn json object it into Associative array
// var_dump(json_decode($people));
