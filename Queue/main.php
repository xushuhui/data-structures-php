<?php
include "ArrayQueue.php";
$queue = new ArrayQueue();
for ($i=0; $i < 5; $i++) { 
    $queue->enqueue($i);
}
print_r($queue);
$queue->dequeue();
print_r($queue);
print_r($queue->getFront());