
<?php

/* ---------------- Operators ---------------- */

/*
    < Less than
    > Greater than
    <= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
*/

/*
** If Statement Syntax
if(condition) {
    // code to be executed if condition is true
}
*/

$age = 20;

if($age >= 18) {
    echo "You are old enough to vote.";
} else {
    echo "Sorry, you are not old enough to vote.";
}

echo "<br>"; // line break
// -------- 

$t = date("H");

if($t < 12) {
    echo "Good Morning";
} elseif($t < 17) {
    echo "Good Afternoon";
} else {
    echo "Good Evening";
}

echo "<br>"; // line break
// --------
$posts = ['First Post'];

if(empty($posts)) { // check if an array is empty
    echo "It's empty";
}

echo "<br>"; // line break

if(!empty($posts)) { // check if an array is not empty
    echo "It's not empty: ";
    echo $posts[0];
} else {
    echo "No Posts";
}

// ---- ternary operators
echo !empty($posts) ? $posts[0] : 'No Posts';

// if not echoing and want to put it into variable
$firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// if no else
$firstPost = !empty($posts) ? $posts[0] : null;
// or
$firstPost = $posts[0] ?? null;

echo $firstPost;

// Switch
echo "<br>"; // line break

$favColor = 'red';

switch($favColor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite color is not red, green, nor blue';
}