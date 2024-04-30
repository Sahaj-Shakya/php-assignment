<h1>
<?php
function factorial($n)
{
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$num = 5; // The number whose factorial you want to calculate
$result = factorial($num);
echo "Factorial of $num is $result";

?>
</h1>