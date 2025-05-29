<?php

// Function to check if a number is a Hamming number
function isHammingNumber($num) {
    // If the number is less than or equal to 0, it is not a Hamming number
    if ($num <= 0) return false;

    // Divide the number by 2 as long as it is divisible by 2
    while ($num % 2 == 0) $num /= 2;
    // Divide the number by 3 as long as it is divisible by 3
    while ($num % 3 == 0) $num /= 3;
    // Divide the number by 5 as long as it is divisible by 5
    while ($num % 5 == 0) $num /= 5;

    // If the final result is 1, it is a Hamming number
    return $num == 1;
}

// Function to get all Hamming numbers up to a specified limit
function getHammingNumbers($limit) {
    // Initialize an empty array to store Hamming numbers
    $hammingNumbers = [];
    // Loop through all numbers from 1 to the specified limit
    for ($i = 1; $i <= $limit; $i++) {
        // If the current number is a Hamming number, add it to the array
        if (isHammingNumber($i)) {
            $hammingNumbers[] = $i;
        }
    }
    // Return the array of Hamming numbers
    return $hammingNumbers;
}

// Get Hamming numbers up to the specified limit (30 in this case)
$hammingNumbers = getHammingNumbers(24);

// Print "Not a Hamming number" followed by "Hamming number" and the list of Hamming numbers
echo "Not a Hamming Number<br>";
echo "Hamming Number<br>";
echo implode(", ", $hammingNumbers) . "<br>";

?>
