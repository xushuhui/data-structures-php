<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Node.php";
class LinkedList{
    private $head;
    private $size;
    public function __construct() {
        $this->head = null;
        $this->size = 0;
    }
    public function getSize():int
    {
        return $this->size;
    }
    public function isEmpty():bool
    {
        return $this->size == 0;
    }
    public function addFirst($e){
        $this->add(0,$e);
        $this->head = new Node($e, $this->head);
        $this->size ++;
    }
    public function add($index,$e){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
    }
    public function addLast($e){
        $this->add($this->size,$e);
    }
    public function set($index,$e){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
    }
    public function contains($e){
        
    }
    public function get($index){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
    }
    public function getFirst(){
        $this->get(0);
    }
    public function getLast(){
        $this->get($this->size-1);
    }
    public function remove($index){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
    }
    public function removeLast(){
        
    }
    public function removeFirst(){
        
    }
    public function removeElement($e){
        
    }
    public function __toString(){
        
    }
}