<?php
include "Queue.php";
include "Array.php";
class ArrayQueue implements Queue
{
    private $array;
    public function __construct(int $capacity = 10){
        $this->array = new arrays($capacity);
    }
    public function getSize(){
        return $this->array->getSize();
    }
    public function isEmpty(){
        return $this->array->isEmpty();
    }
    public function enqueue($e){
        $this->array->addLast($e);
    }
    public function dequeue(){
        return $this->array->removeFirst();
    }
    public function getFront(){
        return $this->array->getFirst();
    }
    public function dump()
    {
        $str="\nQueue front [";
        for($i = 0 ; $i < $this->getSize(); $i ++){
            $str.= $this->array->get($i);
            if($i != $this->getSize() - 1){
                $str.= ", ";
            }
            
        }
        $str.="] tail";
        echo $str;
    }
}