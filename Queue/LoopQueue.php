<?php
include "Queue.php";
include "Array.php";
class LoopQueue implements Queue
{
    private $data = [];
    private $size;
    private $capacity;
    private $front;
    private $tail;
    public function __construct(int $capacity = 10)
    {
        $this->data = [];
        $this->capacity = $capacity+1;
        $this->size = $this->front =$this->tail=0 ;
    }
    public function getSize(){
        return $this->size;
    }
    public function isEmpty(){
        return $this->front == $this->tail;
    }
    public function getCapacity():int
    {
        return $this->capacity -1;
    }
    public function enqueue()
    {
        # code...
    }
    public function dequeue()
    {
        # code...
    }
    public function getFront()
    {
        # code...
    }
}