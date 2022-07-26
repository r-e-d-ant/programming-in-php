
<?php
    $fruits = ['apple', 'orange', 'pear'];

    // -- Get length
    echo count($fruits);

    echo '<br>'; // line break

    // Search array
    var_dump(in_array('apple', $fruits));

    echo '<br>'; // line break

    // -- Add to array
    // at the end

    // 1.
    $fruits[] = 'grape';
    print_r($fruits);

    echo '<br>'; // line break

    // 2.
    array_push($fruits, 'blueberry', 'strawberry');
    print_r($fruits);

    echo '<br>'; // line break

    // at the start
    array_unshift($fruits, 'mango', 'pineapple');
    print_r($fruits);

    echo '<br>'; // line break

    // -- Remove from array
    // from the end
    array_pop($fruits);
    print_r($fruits);

    echo '<br>'; // line break

    // from the start
    array_shift($fruits);
    print_r($fruits);

    // - remove specific from array
    unset($fruits[2]);

    print_r($fruits);

    // - Split into 2 chunks
    $chunked_array = array_chunk($fruits, 2);
    print_r($chunked_array);

    echo '<br>'; // line break

    // --- concatenate Arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);

    echo '<br>'; // line break

    // - using spread
    $arr4 = [...$arr1, ...$arr2];
    print_r($arr4);

    echo '<br>'; // line break

    // --- using combine
    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $c = array_combine($a, $b); // a's values will be used as key and b's used as values
    print_r($c);

    echo '<br>'; // line break

    // -  get array of only keys
    $keys = array_keys($c);
    print_r($keys);

    echo '<br>'; // line break

    // - flip an array
    $flipped = array_flip($c);
    print_r($flipped);

    echo '<br>'; // line break

    // - use range function: to create an array with range of numbers
    $numbers = range(1, 20);
    print_r($numbers);

    echo '<br>'; // line break

    // --- Map
    // - create a new array using map, where we can use his values in each item in new array
    $newNumbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);

    print_r($newNumbers);

    echo '<br>'; // line break

    // --- Filter
    // we can make condition with it
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

    print_r($lessThan10);

    echo '<br>'; // line break

    // --- reduce
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);

    // and more...