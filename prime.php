<?php
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Enter a number: ";
$num = trim(fgets(STDIN)); // Read user input
$num = (int)$num; // The number you want to check

if (isPrime($num)) {
    echo "$num is a prime number\n";
} else {
    echo "$num is not a prime number\n";
}
?>
