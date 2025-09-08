
<?php

// Simple PHP script with issues for code review

function addNumbers($a, $b) {
    return $a + $b;
}

function divideNumbers($a, $b) {
    // No check for division by zero
    return $a / $b;
}

$nums = [1, 2, 3, 4, 5];
$total = 0;

// Using for loop instead of array_sum (inefficient for big arrays)
for ($i = 0; $i < count($nums); $i++) {
    $total += $nums[$i];
}

echo "Sum of array: " . $total . PHP_EOL;
echo "Addition (2+3): " . addNumbers(2, 3) . PHP_EOL;
echo "Division (10/0): " . divideNumbers(10, 0) . PHP_EOL; // Will throw warning

?>
