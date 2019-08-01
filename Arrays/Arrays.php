<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class Arrays
{
    private $data;
    private $size;
    private $capacity;
    // 构造函数，传入数组的容量capacity构造Array,默认数组的容量capacity=10
    public function __construct(int $capacity = 10)
    {
        $this->data = new SplFixedArray($capacity);
        $this->capacity = $capacity;
        $this->size = 0;
    }
    // 获取数组中的元素个数
    public function getSize(): int
    {
        return $this->size;
    }
    // 返回数组是否为空
    public function isEmpty(): bool
    {
        return $this->size == 0;
    }
    // 获取数组的容量
    public function getCapacity(): int
    {
        return $this->data->getSize();
    }
    //在index索引的位置插入一个新元素e O(n)
    public function add(int $index, int $e)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        if ($this->size == $this->capacity) {
            $this->resize(2 * $this->capacity);
        }
        for ($i = $this->size - 1; $i >= $index; $i--) {
            $this->data[$i + 1] = $this->data[$i];
        }
        $this->data[$index] = $e;
        $this->size++;
    }
    //向所有元素后添加一个新元素 O(1)
    public function addLast($e)
    {
        $this->add($this->size, $e);
    }
    //在所有元素前添加一个新元素 O(n)
    public function addFirst($e)
    {
        $this->add(0, $e);
    }
    //获取index索引位置的元素 O(1)
    public function get($index)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        return $this->data[$index];
    }
    public function getLast()
    {
        return $this->get($this->size - 1);
    }
    public function getFirst()
    {
        return $this->get(0);
    }
    //修改index索引位置的元素为e O(1)
    public function set($index, $e)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        $this->data[$index] = $e;
    }
    //查找数组中是否有元素e O(n)
    public function contains($e): bool
    {
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->data[$i] == $e) {
                return true;
            }
        }
        return false;
    }
    //查找数组中元素e所在的索引，如果不存在元素e，则返回-1 O(n)
    public function find($e): int
    {
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->data[$i] == $e) {
                return $i;
            }
        }
        return -1;
    }
    //从数组中删除index位置的元素, 返回删除的元素
    public function remove($index)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("index is illegal");
        }
        $ret = $this->data[$index];

        for ($i = $index + 1; $i < $this->size; $i++) {
            $this->data[$i - 1] = $this->data[$i];
        }
        $this->size--;
        unset($this->data[$this->size]);
        if ($this->size == $this->capacity / 4 && $this->capacity / 2 != 0) {
            $this->resize($this->capacity / 2);
        }
        return $ret;
    }
    // 从数组中删除最后一个元素, 返回删除的元素
    public function removeLast()
    {
        $this->remove($this->size - 1);
    }
    // 从数组中删除第一个元素, 返回删除的元素
    public function removeFirst()
    {
        $this->remove(0);
    }
    // 从数组中删除元素e
    public function removeElement($e)
    {
        $index = $this->find($e);
        if ($index != -1) {
            $this->remove($index);
        }
    }
    // 将数组空间的容量变成newCapacity大小
    private function resize($newCapacity)
    {
        $newData = (new self($newCapacity))->data;
        for ($i = 0; $i < $this->size; $i++) {
            $newData[$i] = $this->data[$i];
        }
        $this->data = $newData;
        $this->capacity = $newCapacity;
    }

    public function __toString()
    {
        $str = sprintf("\nArray: size = %d , capacity = %d\n", $this->size, $this->getCapacity());
        $str .= '[';
        for ($i = 0; $i < $this->size; $i++) {
            $str .= $i;
            if ($i != $this->size - 1) {
                $str .= ", ";
            }
        }
        $str .= "]";
        return $str;
    }
}
