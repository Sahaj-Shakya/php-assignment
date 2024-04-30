<?php

$file = "readme.txt";
if(file_exists($file)){
    echo filesize($file);
    echo " ";
    echo filetype($file);
    echo "\n";
}
else{
    echo "file not found";
}

?>