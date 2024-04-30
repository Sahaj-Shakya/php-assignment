<?php
$a = "readme.txt";

if(file_exists($a)){
    echo readfile("readme.txt");
}
else{
    echo "File does not exist.";
}
?>