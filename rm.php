<?php

$dir = "testfiles";
if(file_exists($dir)){
    rmdir($dir);
}
else{
    echo "Dir doesn't exists";
}


?>