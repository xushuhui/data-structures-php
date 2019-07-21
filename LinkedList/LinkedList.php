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
   
    private $size;
    private $dummyHead;
    public function __construct() {
        $this->dummyHead = new Node(null,null);
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
  
    public function add($index,$e){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
        $prev = $this->dummyHead;
        for ($i=0; $i < $index; $i++) { 
            $prev = $prev->next;
        }
        $prev->next = new Node($e,$prev->next);
        $this->size ++;
    }
    public function addFirst($e){
        $this->add(0,$e);
    }
    public function addLast($e){
        $this->add($this->size,$e);
    }
    public function set($index,$e){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
        $cur = $this->dummyHead->next;
        for ($i=0; $i < $index; $i++) { 
            $cur = $cur->next;
        }
        $cur->e = $e;
    }
    public function contains($e){
        $cur = $this->dummyHead->next;
        while($cur != null){
            if ($cur->e == $e){
                return true;
            }
            $cur = $cur->next;
        }
        return false;
    }
    public function get($index){
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
        $cur = $this->dummyHead->next;
        for ($i=0; $i < $index; $i++) { 
            $cur = $cur->next;
        }
        return $cur->e;
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
        $prev = $this->dummyHead;
        for ($i=0; $i < $index; $i++) { 
            $prev= $prev->next;
        }
        $retNode = $prev->next;
        $prev->next = $retNode->next；
        $retNode->next = null;
        $this->size--;
    }
    public function removeLast(){
        $this->remove($this->size-1);
    public function removeFirst(){
        $this->remove(0)
    }
    public function removeElement($e){
        
    }
    public function __toString(){
        $cur = $this->dummyHead->next;
        $res = '';
        //第一种写法
        while($cur != null){
            $res.=$cur.'->';
            $cur = $cur->next;
        }
        //第二种
        // for ($cur=$this->dummyHead->next; $cur != null; $cur=$cur->next) { 
        //     $res .= $cur.'->';
        // }
        $res.="NULL\n";
        return $res;
    }
}