<?php
    $string = 'Hello World';

    // Get the length of a string
    echo strlen($string);

    echo '<br>'; // line break

    // Find the position of the first occurence of a substring in a string
    echo strpos($string, 'o');

    echo '<br>'; // line break

    // Find the position of the last occurence of a substring in a string
    echo strrpos($string, 'o');

    echo '<br>'; // line break

    // Reverse a string
    echo strrev($string);

    echo '<br>'; // line break

    // Convert all the characters to lowercase
    echo strtolower($string);

    echo '<br>'; // line break

    // Convert all characters to uppercase
    echo strtoupper($string);

    echo '<br>'; // line break

    // Uppercase the first character of each word
    echo ucwords($string);

    echo '<br>'; // line break

    // String replace
    echo str_replace('World', 'Everyone', $string);

    echo '<br>'; // line break

    // Return portion of a string specified by the offset and length
    echo substr($string, 0, 5);
    echo '<br>'; // line break
    echo substr($string, 5);

    echo '<br>'; // line break

    // ----------------- not working ------------
    // // Starts with
    // if (str_starts_with($string, 'Hello')) {
    //     echo 'YES';
    // }

    // echo '<br>'; // line break

    // // Starts with
    // if (str_ends_with($string, 'ld')) {
    //     echo 'YES';
    // }
    // -----------------------------------------

    $string2 = '<script>alert(1)</script>';
    // echo $string2; // bad for security

    // instead do
    echo htmlspecialchars($string2);

    echo '<br>'; // line break

    // -- formatted strings
    printf('%s likes to %s', 'Tito', 'code'); // string

    echo '<br>'; // line break
    printf('1 + 1 = %d', 1 + 1); // integer

    echo '<br>'; // line break
    printf('1 + 1 = %f', 1 + 1); // float