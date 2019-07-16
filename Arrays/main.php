<?php
include "Array.php";
$arr = new arrays(3);
for ($i=0; $i < 5; $i++) { 
    $arr->addLast($i);
}
$arr->set(1,12);
$arr->dump();
$arr->removeFirst();
$arr->dump();
$arr->removeElement(12);
$arr->dump();
