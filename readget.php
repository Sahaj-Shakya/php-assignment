<?php

$file = fopen("readme.txt", "r");
echo fgets($file);
echo fgets($file);

echo fgetc($file);
?>