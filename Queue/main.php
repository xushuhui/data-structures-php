<?php
//include "ArrayQueue.php";

// $queue = new ArrayQueue();
// for ($i=1; $i < 5; $i++) { 
//     $queue->enqueue($i);
// }
// $queue->dump();
// $queue->dequeue();
// $queue->dump();
// print_r($queue->getFront());
include "LoopQueue.php";
$queue = new LoopQueue();
for ($i=1; $i < 5; $i++) { 
    $queue->enqueue($i);
}
$queue->dump();
$queue->dequeue();
$queue->dump();
$queue->enqueue(10);
$queue->dump();