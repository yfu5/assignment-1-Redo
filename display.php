<?php
$width = $_GET['width'];
$length = $_GET['length'];
$size = $_GET['size'];
if(empty($size)||empty($width)||empty($length)){
exit("Please input the value.");
}
if($size=="cm"){
    echo "The result is ". ($width*$length)." cm^2";
}elseif ($size =="inch"){
    echo "The result is ". ($width*$length)." inch^2";
}