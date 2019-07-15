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

    }
    public function dequeue(){

    }
    public function getFront(){

    }
}