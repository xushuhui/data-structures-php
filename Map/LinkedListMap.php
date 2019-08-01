<?php

/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Map.php";
class Node
{
    public $key;
    public $value;
    public $next;
    public function __construct($key = null, $value = null, $next = null)
    {
        $this->key = $key;
        $this->value = $value;
        $this->next = $next;
    }
    public function __toString()
    {
        return $this->key . ':' . $this->value;
    }
}
class LinkedListMap implements Map
{
    private $size;
    private $dummyHead;
    public function __construct()
    {
        $this->dummyHead = new Node();
        $this->size = 0;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function isEmpty()
    {
        return $this->size == 0;
    }
    private function getNode($key)
    {
        $cur = $this->dummyHead->next;
        while ($cur != null) {
            if ($cur->key == $key) {
                return $cur;
            }
            $cur = $cur->next;
        }
        return null;
    }
    public function contains($key)
    {
        return $this->getNode($key) != null;
    }
    public function get($key)
    {
        $node = $this->getNode($key);
        return $node == null ? null : $node->value;
    }
    public function add($key, $value)
    {
        $node = $this->getNode($key);
        if ($node == null) {
            $this->dummyHead->next = new Node($key, $value, $this->dummyHead->next);
            $this->size++;
        } else {
            $node->value = $value;
        }
    }

    public function set($key, $value)
    {
        $node = $this->getNode($key);
        if ($node == null) {
            throw new Exception($key . " not exist");
        }
        $node->value = $value;
    }
    public function remove($key)
    {
        $prev = $this->dummyHead;
        while ($prev->next != null) {
            if ($prev->next->key == $key) {
                break;
            }
            $prev = $prev->next;
        }
        if ($prev->next != null) {
            $delNode = $prev->next;
            $prev->next = $delNode->next;
            $delNode->next = null;
            $this->size--;
            return $delNode->value;
        }
        return null;
    }
}
