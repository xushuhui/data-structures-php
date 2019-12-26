<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
namespace App\Stack;

use App\LinkedList\LinkedList;

class LinkedListStack implements Stack
{
    private $list;
    public function __construct()
    {
        $this->list = new LinkedList();
    }
    public function getSize()
    {
        return $this->list->getSize();
    }
    public function isEmpty()
    {
        return $this->list->isEmpty();
    }
    public function pop()
    {
        return $this->list->removeFirst();
    }
    public function push($e)
    {
        return $this->list->addFirst($e);
    }
    public function peek()
    {
        return $this->list->getFirst();
    }
    public function __toString()
    {
        $str="\nStack: top ";
        $str.=$this->list;
        return $str;
    }
}
