<h1>
<?php
function reverseNumber($num)
{
    $reverse = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $reverse = $reverse * 10 + $digit;
        $num = (int)($num / 10);
    }
    return $reverse;
}

$num = 12345; 
$result = reverseNumber($num);
echo "Reverse of $num = $result";
?>
</h1>
