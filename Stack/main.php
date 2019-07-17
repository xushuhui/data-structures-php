<?php
include "ArrayStack.php";

$stock = new ArrayStack();

for ($i=1; $i < 5; $i++) { 
    $stock->push($i);
}
echo $stock;
$stock->pop();
echo $stock;
