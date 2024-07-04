<?php

function generateCombinations($arrays, $k, $startIndex, $currentCombination = [], &$allCombinations = [])
{
    if (count($currentCombination) === $k) {
        $allCombinations[] = $currentCombination;
        return;
    }

    for ($i = $startIndex; $i < count($arrays); $i++) {
        generateCombinations($arrays, $k, $i + 1, array_merge($currentCombination, [$arrays[$i]]), $allCombinations);
    }
}

$inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$k = 3;

$outputArray = [];

generateCombinations($inputArray, $k, 0, [], $outputArray);

// Print result to screen
echo "Count: " . count($outputArray) . "<br>";

foreach ($outputArray as $combination) {
    echo '[' . implode(', ', $combination) . ']' . '<br>';
}

//Take note
// Có research với thuật toán đệ quy + combination
