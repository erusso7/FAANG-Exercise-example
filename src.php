<?php

function capacity(array $arr): int
{
    // Array length is used in multiple places, so we can
    // call the `count` function in a single place instead.
    $n = count($arr);

    // Fill the $left array with the highest value on left for each element.
    // The highest value on left for the first element is itself.
    $left[0] = $arr[0];
    for ($i = 1; $i < $n; $i++) {
        // The highest value on left for each element is:
        // - the same as for the previous element
        // - or the element itself (if higher)
        $left[$i] = max($left[$i - 1], $arr[$i]); 
    }

    // Fill the $right array with the highest value on rigth for each element.
    // The highest value on right for the last element is itself.
    $right[$n-1] = $arr[$n-1];
    for ($i = $n-2; $i >= 0; $i--) {
        // The highest value on right for each element is:
        // - the same as for the next element
        // - or the element itself (if higher)
        $right[$i] = max($right[$i+1], $arr[$i]);
    }

    // Finally, we can simply count the water capacity per element
    // considering the values obtained before:
    $water = 0;

    for ($i = 0; $i < $n; $i++) {
        // The water capacity of each element is the result of
        // substracting the element itself from the minimum value
        // on both sides (left and right).
        $water += min($left[$i], $right[$i]) - $arr[$i];
    }

    return $water;
}