<?php
class Node{
    public $left;
    public $right;
    public $e;
    public function __construct($e){
        $this->e = $e;
        $this->left = null;
        $this->right = null;
    }
}
class BST{
    private $root;
    private $size;
    public function __construct(){
        $this->root = null;
        $this->size = 0;
    }
    public function add($e){
        $this->root = $this->addNode($this->root,$e);
    }
    private function addNode($node,$e){
        if($node == null){
            $this->size ++ ;
            return new Node($e);
        }
        if($e < $node->e){
            $node->left = $this->addNode($node->left,$e);
        }elseif($e > $node->e){
            $node->right = $this->addNode($node->right,$e);
        }
        return $node;
    }
    public function contains($e){
        return $this->containsNode($this->root,$e);
    }
    private function containsNode($node,$e){
        if($node == null){
            return false;
        }
        if($e < $node->e){
            return $this->containsNode($node->left,$e);
        }elseif($e > $node->e){
            return $this->containsNode($node->right,$e);
        }else{
            return true;
        }
       
    }
}