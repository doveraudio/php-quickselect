<?php
require_once("selectkth.php");

$arr = [64,57,18,49,51,62,43,64,35,50];
$newarr = [];
for($i = 0; $i<count($arr); $i++){
    $newarr[] = selectKth($arr, $i);
    
}

echo "Old Array: ".json_encode($arr).PHP_EOL;
echo "New Array: ".json_encode($newarr).PHP_EOL;
