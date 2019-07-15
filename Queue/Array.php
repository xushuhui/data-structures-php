<?php
class arrays
{
    private $data = [];
    private $size;
    private $capacity;
    public function __construct(int $capacity = 10)
    {
        $this->data = [];
        $this->capacity = $capacity;
        $this->size = 0;
    }
    public function getSize():int
    {
        return $this->size;
    }
    public function isEmpty():bool
    {
        return $this->size == 0;
    }
    public function getCapacity():int
    {
        return $this->capacity;
    }
    //O(n)
    public function add(int $index,int $e)
    {
     
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
       
        if ($this->size == $this->capacity){
            $this->resize(2 * $this->capacity);
        }
        for ($i=$this->size -1 ; $i >=$index; $i--) { 
            $this->data[$i + 1] = $this->data[$i];
        }
        $this->data[$index] = $e;
        $this->size ++;
        
    }
    //O(1)
    public function addLast($e)
    {
        $this->add($this->size,$e);
    }
    //O(n)
    public function addFirst($e)
    {
        $this->add(0,$e);
    }
    //O(1)
    public function get($index)
    {
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
        return $this->data[$index];
    }
    //O(1)
    public function set($index,$e)
    {
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
        $this->data[$index] = $e;
    }
    //O(n)
    public function contains($e):bool
    {
        for ($i=0; $i < $this->size; $i++) { 
            if($this->data[$i] == $e){
                return true;
            }
        }
        return false;
    }
    //O(n)
    public function find($e):int
    {
        for ($i=0; $i < $this->size; $i++) { 
            if($this->data[$i] == $e){
                return $i;
            }
        }
        return -1;
    }
    public function remove($index)
    {
        if($index <0 || $index > $this->size){
            throw new Exception("index is illegal");
        }
        $ret = $this->data[$index];
        
        for ($i=$index+1; $i < $this->size; $i++) {
            $this->data[$i-1] = $this->data[$i];
        }
        $this->size--;
        unset($this->data[$this->size]);
        if($this->size == $this->capacity / 4 && $this->capacity /2 != 0){
            $this->resize($this->capacity/2);
        }
        return $ret;
    }
    public function removeLast()
    {
        $this->remove($this->size-1);
    }
    public function removeFirst()
    {
        $this->remove(0);
    }
    public function removeElement($e)
    {
        $index = $this->find($e);
        if($index != -1){
            $this->remove($index);
        }
    }
    private function resize($newCapacity)
    {
        $newData = (new self($newCapacity))->data;
        for($i=0;$i<$this->size;$i++){
            $newData[$i] = $this->data[$i];
        }
        $this->data = $newData;
        $this->capacity = $newCapacity;
    }
}   