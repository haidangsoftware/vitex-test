<?php
function generateCombinations($arrays, $currentIndex = 0, $currentCombination = [], &$allCombinations = [])
{
    if ($currentIndex == count($arrays)) {
        $allCombinations[] = $currentCombination;
        return;
    }

    foreach ($arrays[$currentIndex] as $element) {
        generateCombinations($arrays, $currentIndex + 1, array_merge($currentCombination, [$element]), $allCombinations);
    }
}

$inputArray = [
    ['S', 'M', 'L', 'N'],
    ['red', 'blue', 'black', 'white'],
    ['HN', 'HCM', 'DN'],
    ['dev', 'production', 'staging'],
];

$outputArray = [];

generateCombinations($inputArray, 0, [], $outputArray);

// Print result to screen
foreach ($outputArray as $combination) {
    echo '[' . implode(', ', $combination) . ']' . '<br>';
}

//Take note
//- Có research thêm về thuật toán xử lý đệ quy + combination
//- Thời gian làm 50p:
// + 30p tự làm => Chưa ra kết quả đúng
// + 20p research và hiểu chi tiết cách hoạt động của thuật toán