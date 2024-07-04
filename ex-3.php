<?php

function generateCombinations($array, $currentCombination = [], &$allCombinations = [])
{
    if (count($array) === 0) {
        $allCombinations[] = $currentCombination;
        return;
    }

    for ($i = 0; $i < count($array); $i++) {
        $newArray = $array;
        $elm = array_splice($newArray, $i, 1)[0];
        generateCombinations($newArray, array_merge($currentCombination, [$elm]), $allCombinations);
    }
}

$inputArray = [
    'a', 'b', 'c', 'd'
];

$outputArray = [];

generateCombinations($inputArray, [], $outputArray);

foreach ($outputArray as $combination) {
    echo '[' . implode(', ', $combination) . ']' . '<br>';
}

//Take note
// Có research với thuật toán đệ quy + combination

