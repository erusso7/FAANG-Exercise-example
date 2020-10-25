<?php

function itemCapacity(array $arr, int $pos): int
{
    if ($pos === 0 || $pos === count($arr) - 1) return 0;

    $left = array_slice($arr, 0, $pos);
    $right = array_slice($arr, $pos + 1);

    $lowest = min(
        max($left),
        max($right)
    );

    return max(0, $lowest - $arr[$pos]);
}

/**
 * The total capacity of the graph, is the sum of the individual capacity.
 * We can skip the 'first' and the 'last', because we know that the capacity will be zero.
 */
function capacity(array $arr): int
{
    $capacity = 0;
    for ($i = 1; $i < count($arr) - 1; $i++) {
        $capacity += itemCapacity($arr, $i);
    }
    return $capacity;
}