<?php
include "../vendor/autoload.php";
use App\Arrays\Arrays;
$arr = new Arrays(3);
echo $arr;
for ($i = 0; $i < 15; $i++) {
    $arr->addLast($i);
}
$arr->set(1, 12);
echo $arr;
$arr->removeFirst();
echo $arr;
$arr->removeElement(12);
echo $arr;


