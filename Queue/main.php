<?php
include "ArrayQueue.php";
include "LoopQueue.php";
class main{
    public static function testQueue($queue,$count){
        $startTime = microtime(true);
        for( $i = 0 ; $i < $count ; $i ++){
            $queue->enqueue(mt_rand(0,999));
        }
            
        for( $i = 0 ; $i < $count ; $i ++){
            $queue->dequeue();
        }
        $endTime = microtime(true);
        return ($endTime - $startTime);
    }
    public static function mainQueue(){
        $count = 10000;
        $arrqueue = new ArrayQueue();
        $t1 = self::testQueue($arrqueue,$count);//7.937704086303
        
        $loopqueue = new LoopQueue();
        $t2 = self::testQueue($loopqueue,$count);
        print_r("tl---".$t1);
        print_r("t2---".$t2);
        echo "\n";
        print_r($t1/$t2);
    }
}
main::mainQueue();
// $queue = new ArrayQueue();
// for ($i=1; $i < 5; $i++) { 
//     $queue->enqueue($i);
// }
// echo $queue;
// $queue->dequeue();
//  echo $queue;
// print_r($queue->getFront());

// $queue = new LoopQueue(3);
// for ($i=1; $i < 10; $i++) { 
//     $queue->enqueue($i);
// }
//  echo $queue;
// $queue->dequeue();
//  echo $queue;
// $queue->enqueue(10);
//  echo $queue;