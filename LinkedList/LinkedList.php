<?php
class LinkedList{
    private $head;
    private $size;
    public function __construct() {
        $this->head = null;
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
}