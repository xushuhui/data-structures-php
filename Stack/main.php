<?php
include "ArrayStack.php";

$stock = new ArrayStack();

for ($i=0; $i < 5; $i++) { 
    $stock->push($i);
}
$stock->dump();
$stock->pop();
$stock->dump();
