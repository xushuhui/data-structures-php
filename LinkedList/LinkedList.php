<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
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
class LinkedList
{
    private $size;
    private $dummyHead;
    public function __construct()
    {
        $this->dummyHead = new Node(null, null);
        $this->size = 0;
    }
    // 获取链表中的元素个数
    public function getSize(): int
    {
        return $this->size;
    }
    // 返回链表是否为空
    public function isEmpty(): bool
    {
        return $this->size == 0;
    }
    // 在链表的index(0-based)位置添加新的元素e
    // 在链表中不是一个常用的操作
    public function add($index, $e)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        $prev = $this->dummyHead;
        for ($i = 0; $i < $index; $i++) {
            $prev = $prev->next;
        }
        $prev->next = new Node($e, $prev->next);
        $this->size++;
    }
    // 在链表头添加新的元素e
    public function addFirst($e)
    {
        $this->add(0, $e);
    }
    // 在链表末尾添加新的元素e
    public function addLast($e)
    {
        $this->add($this->size, $e);
    }
    // 获得链表的第index(0-based)个位置的元素
    // 在链表中不是一个常用的操作
    public function get($index)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        $cur = $this->dummyHead->next;
        for ($i = 0; $i < $index; $i++) {
            $cur = $cur->next;
        }
        return $cur->e;
    }
    // 获得链表的第一个元素
    public function getFirst()
    {
        $this->get(0);
    }
    // 获得链表的最后一个元素
    public function getLast()
    {
        $this->get($this->size - 1);
    }
    // 修改链表的第index(0-based)个位置的元素为e
    // 在链表中不是一个常用的操作
    public function set($index, $e)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        $cur = $this->dummyHead->next;
        for ($i = 0; $i < $index; $i++) {
            $cur = $cur->next;
        }
        $cur->e = $e;
    }
    // 查找链表中是否有元素e
    public function contains($e)
    {
        $cur = $this->dummyHead->next;
        while ($cur != null) {
            if ($cur->e == $e) {
                return true;
            }
            $cur = $cur->next;
        }
        return false;
    }

    // 从链表中删除index(0-based)位置的元素, 返回删除的元素
    // 在链表中不是一个常用的操作
    public function remove($index)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        $prev = $this->dummyHead;
        for ($i = 0; $i < $index; $i++) {
            $prev = $prev->next;
        }
        $retNode = $prev->next;
        $prev->next = $retNode->next;
        $retNode->next = null;
        $this->size--;
    }
    // 从链表中删除第一个元素, 返回删除的元素
    public function removeLast()
    {
        $this->remove($this->size - 1);
    }
    // 从链表中删除最后一个元素, 返回删除的元素
    public function removeFirst()
    {
        $this->remove(0);
    }
    // 从链表中删除元素e
    public function removeElement($e)
    {
    }
    public function __toString()
    {
        $cur = $this->dummyHead->next;
        $res = '';
        //第一种写法
        while ($cur != null) {
            $res .= $cur . '->';
            $cur = $cur->next;
        }
        //第二种
        // for ($cur=$this->dummyHead->next; $cur != null; $cur=$cur->next) {
        //     $res .= $cur.'->';
        // }
        $res .= "NULL\n";
        return $res;
    }
}
