<?php
include_once "BST.php";
include_once "Set.php";
class BSTSet
{
    private $bst;
    public function __construct(){
        $this->bst = new BST();
    }
    public function add($e){
        $this->bst->add($e);
    }
    public function contains($e){
        return $this->bst->contains($e);
    }
    public function remove($e){
        $this->bst->remove($e);
    }
    public function getSize(){
        return $this->bst->getSize();
    }
    public function isEmpty(){
        return $this->bst->isEmpty();
    }
}