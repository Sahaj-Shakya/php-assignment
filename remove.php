<?php

$file = "remove.txt";
if(file_exists($file)){
    
    unlink($file);
}
else{
    echo "file not found";
}

?>