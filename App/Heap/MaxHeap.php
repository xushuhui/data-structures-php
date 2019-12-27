<?php
namespace App\Heap;

use App\Arrays\Arrays;

class MaxHeap
{
    private $data;
    public function __construct($capacity = 10, $arr = [])
    {
        $this->data = (new Arrays($capacity));
        if ($arr) {
            for ($i = $this->parent(count($arr)); $i >= 0; $i--) {
                $this->siftDown($i);
            }
        }
    }

    // 返回堆中的元素个数
    public function getSize()
    {
        return $this->data->getSize();
    }
    // 返回一个布尔值, 表示堆中是否为空
    public function isEmpty()
    {
        return $this->data->isEmpty();
    }
    // 返回完全二叉树的数组表示中，一个索引所表示的元素的父亲节点的索引
    public function parent($index)
    {
        if ($index == 0) {
            throw new \Exception("index error");
        }
        return (int) (($index - 1) / 2);
    }
    // 返回完全二叉树的数组表示中，一个索引所表示的元素的左孩子节点的索引
    public function leftChild($index)
    {
        return $index * 2 + 1;
    }
    // 返回完全二叉树的数组表示中，一个索引所表示的元素的右孩子节点的索引
    public function rightChild($index)
    {
        return $index * 2 + 2;
    }
    // 向堆中添加元素
    public function add($e)
    {
        $this->data->addLast($e);
        $this->siftUp($this->data->getSize() - 1);
    }
    private function siftUp($k)
    {
        while ($k > 0 && $this->data->get($this->parent($k)) < $this->data->get($k)) {
            //$this->data->swap($k, $this->parent($k));
            $k = $this->parent($k);
        }
    }
    // 看堆中的最大元素
    public function findMax()
    {
        if ($this->data->getSize() == 0) {
            throw new \Exception("heap is empty");
        }
        return $this->data->get(0);
    }
    // 取出堆中最大元素
    public function extractMax()
    {
        $ret = $this->findMax();
        //$this->data->swap(0, $this->data->getSize() - 1);
        $this->data->removeLast();
        $this->siftDown(0);
        return $ret;
    }
    private function siftDown($k)
    {
        while ($this->leftChild($k) < $this->data->getSize()) {
            $j = $this->leftChild($k); // 在此轮循环中,data[k]和data[j]交换位置
            if ($j + 1 < $this->data->getSize() && $this->data->get($j + 1) > $this->data->get($j)) {
                $j++;
            }
            // data[j] 是 leftChild 和 rightChild 中的最大值
            if ($this->data->get($k) >= $this->data->get($j)) {
                break;
            }
           // $this->data->swap($k, $j);
            $k = $j;
        }
    }
    // 取出堆中的最大元素，并且替换成元素e
    public function replace($e)
    {
        $ret = $this->findMax();
        $this->data->set(0, $e);
        $this->siftDown(0);
        return $ret;
    }
}
