<?php

$file = "readme.txt";
if(file_exists($file)){
    rename("readme.txt", "renamed.txt");
    echo "file renamed.";
}
else{
    echo "file not found";
}


?>