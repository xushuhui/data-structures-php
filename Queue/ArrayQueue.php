<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Queue.php";
include_once "Array.php";
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
        if($this->isEmpty()){
            throw new Exception("Queue is empty");
        }
        return $this->array->removeFirst();
    }
    public function getFront(){
        return $this->array->getFirst();
    }
    public function __toString()
    {
        $str="\nQueue front [";
        for($i = 0 ; $i < $this->getSize(); $i ++){
            $str.= $this->array->get($i);
            if($i != $this->getSize() - 1){
                $str.= ", ";
            }
        }
        $str.="] tail";
        return $str;
    }
}