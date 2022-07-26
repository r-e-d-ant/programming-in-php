<?php
/* -------------- For Loop ------------- */

/*
** For Loop Syntax
    for (initialize; condition; increment) {
        // code to be executed
    }
*/

for ($i = 0; $i <= 10; $i++) {
    echo 'Number ' . $i . '<br>';
}

echo '<br>'; // line break

/* -------------- While Loop ------------- */

/*
** While Loop Syntax
    while (condition) {
        // code to be executed
    }
*/

$x = 1;
while($x <= 15) {
    echo 'Number ' . $x . '<br>';
    $x++;
}

echo '<br>'; // line break

/* -------------- Do While Loop ------------- */

/*
** Do While Loop Syntax
    do {
        // code to be executed
    }
    while (condition);

do...while loop will always execute the block of code once,
even if the condition is false.
*/

$z = 1; // even 6 can run, but only once.

do {
    echo 'Number ' . $z . '<br>';
    $z++;
} while($z <= 5);

echo '<br>'; // line break

/* ----------- Foreach Loop ----------- */
/*
** Foreach Loop Syntax
    foreach ($array as $value) {
        // code to be executed
    }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];
// using for loop to loop trough array
for ($c = 0; $c < count($posts); $c++) { 
    echo $posts[$c] . '<br>';
}

echo '<br>'; // line break

// using foreach loop to loop trough array
foreach($posts as $post) {
    echo $post . '<br>';
}

// if you want an index
foreach($posts as $index => $post) {
    echo $index . ' - ' . $post . '<br>';
}

echo '<br>'; // line break

// if it's an associative array
$person = [
    'first_name' => 'Thierry',
    'last_name' => 'Mugisha',
    'email' => 'tmug@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}