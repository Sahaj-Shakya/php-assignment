<?php
function isPalindrome($num)
{
    $originalNum = $num;
    $reverseNum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $reverseNum = $reverseNum * 10 + $digit;
        $num = (int)($num / 10);
    }
    return $originalNum == $reverseNum;
}

echo "Enter a number: ";
$num = trim(fgets(STDIN));

if (is_numeric($num)) {
    $num = (int)$num;
    if (isPalindrome($num)) {
        echo "$num is a palindrome number";
    } else {
        echo "$num is not a palindrome number";
    }
} else {
    echo "Invalid input. Please enter a valid number.";
}
?>

