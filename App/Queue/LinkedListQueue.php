<?php
namespace App\Queue;
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Queue.php";
class Node
{
    public $e;
    public $next;
    public function __construct($e = null, $next = null)
    {
        $this->e = $e;
        $this->next = $next;
    }
    public function __toString()
    {
        return (string) $this->e;
    }
}
class LinkedListQueue implements Queue
{
    private $head;
    private $tail;
    private $size;
    public function __construct()
    {
        $this->head = $this->tail = null;
        $this->size = 0;
    }
    public function isEmpty()
    {
        return $this->size == 0;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function enqueue($e)
    {
        if (is_null($this->tail)) {
            $this->tail = new Node($e);
            $this->head = $this->tail;
        } else {
            $this->tail->next = new Node($e);
            $this->tail = $this->tail->next;
        }
        $this->size++;
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new \Exception . ("Queue is empty");
        }
        $retNode = $this->head;
        $this->head = $this->head->next;
        $retNode->next = null;
        if ($this->head == null) {
            $this->tail = null;
        }
        $this->size--;
        return $retNode->e;
    }
    public function getFront()
    {
        if ($this->isEmpty()) {
            throw new \Exception . ("Queue is empty");
        }
        return $this->head->e;
    }
    public function __toString()
    {
        $cur = $this->head;
        $res = 'Queue: front ';
        //第一种写法
        while ($cur != null) {
            $res .= $cur . '->';
            $cur = $cur->next;
        }

        $res .= "NULL tail \n";
        return $res;
    }
}
