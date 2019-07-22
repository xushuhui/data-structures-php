<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Queue.php";
class Node{
    public $e;
    public $next;
    public function __construct($e = null,$next=null){
        $this->e = $e;
        $this->next = $next;
    }
    public function __toString(){
        return (string)$this->e;
    }
}
class LinkedListQueue implements Queue
{
    private $head,$tail;
    private $size;
    public function __construct(){
        $this->head = $this->tail= null;
        $this->size = 0;
    }
    public function isEmpty(){
        return $this->size == 0;
    }
    public function getSize(){
        return $this->size;
    }
}