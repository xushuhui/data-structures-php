<?php
include_once "LinkedList.php";
class LinkedListStack  implements Stack
{
    private $list;
    public function __construct() {
        $this->list = new LinkedList();
    }
    public function getSize(){
        return $this->list->getSize();
    }
    public function isEmpty() {
        return $this->list->isEmpty();
    }
    public function pop(){
        return $this->list->removeFirst();
    }
    public function push($e){
        return $this->list->addFirst($e);
    }
    public function peek(){
        return $this->list->getFirst();
    }
}
