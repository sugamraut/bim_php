<?php
/* Write a program in PHP to create a function that takes an array as a parameter and returns the
average value of that array. */

// Function to calculate the average of an array
function calculateAverage($arr) {
    // Check if the array is empty
    if (count($arr) == 0) {
        return 0; // Return 0 for empty array to avoid division by zero
    }
    
    // Calculate the sum of the array elements
    $sum = array_sum($arr);
    
    // Calculate the number of elements in the array
    $num = count($arr);
    
    // Calculate the average
    $average = $sum / $num;
    
    // Return the average value
    return $average;
}

// Example usage
$numbers = [2, 3, 5, 7, 11];
echo "The average value is: " . calculateAverage($numbers);

?>
