<?php
class myarray
{
    private $data = [];
    private $size;
    private $capacity;
    public function __construct(int $capacity)
    {
        $this->data = [];
        $this->capacity = $capacity;
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
    public function getCapacity()
    {
        return $this->capacity;
    }
    public function add(int $index,int $e)
    {
        if($this->size == $this->capacity){
            throw new Exception("AddLast failed. Array is full");
            
        }
        if($index <0 || $index > $this->size){
            throw new Exception("AddLast failed. Array is full");
        }
        for ($i=$this->size -1 ; $i <$index  ; $i--) { 
            $this->data[$i + 1] = $this->data[$i];
        }
        $this->data[$index] = $e;
        $this->size ++;
    }
    public function addLast($e)
    {
        $this->add($this->size,$e);
    }
    public function addFirst($e)
    {
        $this->add(0,$e);
    }
}   