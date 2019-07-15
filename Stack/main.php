<?php
include "ArrayStack.php";

$stock = new ArrayStack();

for ($i=0; $i < 5; $i++) { 
    $stock->push($i);
}
print_r($stock);
$stock->pop();
print_r($stock);
print_r($stock->peek());