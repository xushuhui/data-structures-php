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
    static $res;
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
    //前置遍历
    public function preOrder(){
        $this->preOrderNode($this->root);
    }
    private function preOrderNode($node){
        if ($node == null){
            return;
        }
        $this->preOrderNode($node->left);
        $this->preOrderNode($node->right);
    }
    public function __toString(){
        
        $this->generateBSTString($this->root,0,static::$res);
        return static::$res;
    }
    private function generateBSTString($node,int $depth,$res){
        if ($node == null){
            return $res.$this->generateDepthString($depth."null\n");
        }
        static::$res.=$this->generateDepthString($depth).$node->e."\n";
        $this->generateBSTString($node->left,$depth+1, static::$res);
        $this->generateBSTString($node->right,$depth+1, static::$res);
       
    }
    private function generateDepthString($depth){
        $restr = '';
        for ($i=0; $i < $depth; $i++) { 
            $restr.='--';
        }
        return $restr;
    }
}