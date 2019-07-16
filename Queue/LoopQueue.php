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
    public function getCapacity()
    {
        return $this->capacity -1;
    }
    public function enqueue($e)
    {
        if(($this->tail + 1) % $this->capacity == $this->front){

        }
        $this->data[$this->tail] = $e;
        $this->tail = ($this->tail + 1) % $this->capacity;
        $this->size ++;
    }
    public function dequeue()
    {
        if($this->isEmpty()){
            throw new Exception("Queue is empty");
        }
        $ret = $this->data[$this->front];
        $this->data[$this->front] = null;
        $this->front = ($this->front + 1) % $this->capacity;
        $this->size --;
        if($this->size == $this->getCapacity() / 4 && $this->getCapacity() / 2 != 0){
            //resize(getCapacity() / 2);
        }
            
        return $ret;
    }
    public function getFront()
    {
        if($this->isEmpty()){
            throw new Exception("Queue is empty");
        }
        return $this->data[$this->front];
    }
    public function dump()
    {
        $str = sprintf("\nQueue: size = %d , capacity = %d\n",$this->size,$this->getCapacity());
        $str.='front [';
        for($i = $this->front ; $i != $this->tail; $i = ($i+1)%$this->capacity){
            $str.= $this->data[$i];
            if(($i+1)%$this->capacity != $this->tail){
                $str.= ", ";
            }
            
        }
        $str.="] tail";
        echo $str;
    }
}