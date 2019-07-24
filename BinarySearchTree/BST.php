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
    // 二分搜索树的前序遍历
    public function preOrder(){
        $this->preOrderNode($this->root);
    }
    // 前序遍历以node为根的二分搜索树, 递归算法
    private function preOrderNode($node){
        if ($node == null){
            return;
        }
        echo $node->e;
        $this->preOrderNode($node->left);
        $this->preOrderNode($node->right);
    }
     // 二分搜索树的中序遍历
     public function inOrder(){
        $this->inOrderNode($this->root);
    }
    // 中序遍历以node为根的二分搜索树, 递归算法
    private function inOrderNode($node){
        if ($node == null){
            return;
        }
        $this->inOrderNode($node->left);
        echo $node->e;
        $this->inOrderNode($node->right);
    }
      // 二分搜索树的后序遍历
    public function postOrder(){
        $this->postOrderNode($this->root);
    }

    // 后序遍历以node为根的二分搜索树, 递归算法
    private function postOrderNode($node){
        if ($node == null){
            return;
        }
        $this->postOrderNode($node->left);
        $this->postOrderNode($node->right);
        echo $node->e;
    }
    public function __toString(){
        $this->generateBSTString($this->root,0,static::$res);
        return static::$res;
    }
    private function generateBSTString($node,int $depth){
        if ($node == null){
             static::$res.=$this->generateDepthString($depth)."null\n";
             return;
        }
        static::$res.=$this->generateDepthString($depth).$node->e."\n";
        $this->generateBSTString($node->left,$depth+1);
        $this->generateBSTString($node->right,$depth+1);
    }
    private function generateDepthString($depth){
        $restr = '';
        for ($i=0; $i < $depth; $i++) { 
            $restr.='--';
        }
        return $restr;
    }
}