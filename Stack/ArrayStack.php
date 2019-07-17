<?php
include "Stack.php";
include "Array.php";
class ArrayStack implements Stack
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
    public function getCapacity(){
        return $this->array->getCapacity();
    }
    public function push($e){
        $this->array->addLast($e);
    }
    public function pop(){
        return  $this->array->removeLast();
    }
    public function peek(){
        return  $this->array->getLast();
    }
    public function __toString()
    {
        $str="\nStack: [";
        for($i = 0 ; $i < $this->getSize(); $i ++){
            $str.= $this->array->get($i);
            if($i != $this->getSize() - 1){
                $str.= ", ";
            }
            
        }
        $str.="]  top";
        return $str;
    }
}