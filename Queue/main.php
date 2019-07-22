<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "ArrayQueue.php";
include_once "LoopQueue.php";

$queue = new ArrayQueue();
for ($i=1; $i < 5; $i++) { 
    $queue->enqueue($i);
}
echo $queue;
$queue->dequeue();
echo $queue;
print_r($queue->getFront());

$queue = new LoopQueue(3);
for ($i=1; $i < 10; $i++) { 
    $queue->enqueue($i);
}
 echo $queue;
$queue->dequeue();
 echo $queue;
$queue->enqueue(10);
 echo $queue;