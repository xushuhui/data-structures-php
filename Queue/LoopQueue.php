<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Queue.php";
include_once "Arrays.php";
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
            $this->resize($this->getCapacity() * 2);
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
            $this->resize(getCapacity() / 2);
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
    private function resize( $newCapacity){
        $newData = (new self($newCapacity+1))->data;
        for($i=0;$i<$this->size;$i++){
            $newData[$i] = $this->data[($i+$this->front)%$this->capacity];
        }
        $this->data = $newData;
        $this->capacity = $newCapacity;
        $this->front = 0;
        $this->tail = $this->size;
     
    }

    public function __toString()
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
        return $str;
    }
}