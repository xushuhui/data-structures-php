<?php
include "Array.php";
$arr = new arrays(3);
$arr->dump();
for ($i=0; $i < 15; $i++) { 
    $arr->addLast($i);
}
$arr->set(1,12);
$arr->dump();
$arr->removeFirst();
$arr->dump();
$arr->removeElement(12);
$arr->dump();
