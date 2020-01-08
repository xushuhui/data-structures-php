<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
namespace App\Heap;



class PriorityQueue
{
    private $maxHeap;
    public function __construct()
    {
        $this->maxHeap = new MaxHeap();
    }
    public function getSize()
    {
        return $this->maxHeap->getSize();
    }
    public function isEmpty()
    {
        return $this->maxHeap->isEmpty();
    }
    public function enqueue($e)
    {
        $this->maxHeap->add($e);
    }
    public function dequeue()
    {
        return $this->maxHeap->extractMax();
    }
    public function getFront()
    {
        return $this->maxHeap->findMax();
    }
}
