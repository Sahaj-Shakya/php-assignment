<?php
function generateFibonacci($terms)
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $terms; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

echo "Enter the number of terms in the Fibonacci series: ";
$terms = trim(fgets(STDIN));

if (is_numeric($terms) && $terms > 0) {
    $terms = (int)$terms;
    $fibonacciSeries = generateFibonacci($terms);
    echo "Fibonacci series up to $terms terms: ";
    echo implode(", ", $fibonacciSeries);
} else {
    echo "Invalid input. Please enter a positive integer.";
}
?>
