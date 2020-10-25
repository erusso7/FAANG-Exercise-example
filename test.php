<?php

require_once 'src.php';

$testCases = [
    'same height fist and last' => [[1, 0, 1], 1],
    'first higher than last' => [[2, 0, 1], 1],
    'first lower than last' => [[3, 0, 5], 3],
    'lowest != zero' => [[3, 2, 5], 1],
    'first and last == zero' => [[0, 3, 1, 5, 0], 2],
    'two highest in the middle' => [[5, 1, 10, 4, 15, 5, 1], 10],
    'two highest, one the first and second in the middle' => [[15, 1, 15, 4, 5], 15],
];

foreach ($testCases as $i => $testCase) {
    [$arr, $expected] = $testCase;

    $c = capacity($arr);

    if ($expected !== $c) {
        echo sprintf(
            '[FAIL] Test case with key \'%s\' (expected: %d, actual: %d).%s',
            (string)$i,
            $expected,
            $c,
            PHP_EOL
        );
    } else {
        echo '[PASS] Test case with key \'' . $i . '\'' . PHP_EOL;
    }
}