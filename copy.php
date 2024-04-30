<?php

$file = "readme.txt";
if(file_exists($file)){
    echo readfile("readme.txt");
    copy($file, "newfile.txt");
}
else{
    echo "file not found";
}


?>