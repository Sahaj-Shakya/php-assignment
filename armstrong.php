<?php
function isArmstrong($num)
{
    $digits = strlen((string)$num);
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** $digits;
        $temp = (int)($temp / 10);
    }
    return $sum == $num;
}

echo "Enter a number: ";
$num = trim(fgets(STDIN));

if (is_numeric($num)) {
    $num = (int)$num;
    if (isArmstrong($num)) {
        echo "$num is an Armstrong number";
    } else {
        echo "$num is not an Armstrong number";
    }
} else {
    echo "Invalid input. Please enter a valid number.";
}
?>
