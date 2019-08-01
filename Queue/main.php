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
include_once "LinkedListQueue.php";
// $arrqueue = new ArrayQueue();
// for ($i=1; $i < 5; $i++) {
//     $arrqueue->enqueue($i);
// }
// echo $arrqueue;
// $arrqueue->dequeue();
// echo $arrqueue;
// print_r($arrqueue->getFront());

// $loopqueue = new LoopQueue(3);
// for ($i=1; $i < 10; $i++) {
//     $loopqueue->enqueue($i);
// }
//  echo $loopqueue;
// $queue->dequeue();
//  echo $loopqueue;
// $queue->enqueue(10);
//  echo $loopqueue;
// $linkedListQueue = new LinkedListQueue();
// for ($i=1; $i < 5; $i++) {
//     $linkedListQueue->enqueue($i);
// }
// echo $linkedListQueue;
// $linkedListQueue->dequeue();
// echo $linkedListQueue;
$arr = [];
for ($i = 0 ; $i < 100000 ; $i ++) {
    array_push($arr, mt_rand(0, 999));
}

for ($i = 0 ; $i < 100000 ; $i ++) {
    array_pop($arr);
}
echo 111;
