<?php
include "Array.php";
$arr = new myarray(3);
for ($i=0; $i < 5; $i++) { 
    $arr->addLast($i);
}
$arr->set(1,12);
print_r($arr);
// $arr->removeFirst();
// print_r($arr);
// $arr->removeElement(12);
// print_r($arr);
