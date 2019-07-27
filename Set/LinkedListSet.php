<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Set.php";
include_once "LinkedList.php";
class LinkedListSet implements Set
{
    private $list;
    public function __construct(){
        $this->list = new LinkedList();
    }
    public function add($e){
        if(!$this->list->contains($e)){
            $this->list->addFirst($e);
        }
    }
    public function contains($e){
        return $this->list->contains($e);
    }
    public function remove($e){
        $this->list->removeElement($e);
    }
    public function getSize(){
        return $this->list->getSize();
    }
    public function isEmpty(){
        return $this->list->isEmpty();
    }
}