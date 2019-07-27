<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Map.php";
class Node
{
    public $key;
    public $value;
    public $left;
    public $right;
    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
    public function __toString()
    {
        return $this->key . ':' . $this->value;
    }
}
class BSTMap implements Map
{
    private $root;
    private $size;
    public function __construct(){
        $this->root = null;
        $this->size = 0;
    }
    public function getSize(){
        return $this->size;
    }
    public function isEmpty(){
        return $this->size == 0;
    }
    // 向二分搜索树中添加新的元素(key, value)
    public function add($key,$value){
        $this->root = $this->addNode($this->root,$key, $value);
    }
    // 向以node为根的二分搜索树中插入元素(key, value)，递归算法
    // 返回插入新节点后二分搜索树的根
    private function addNode($node,$key, $value){
        if($node == null){
            $this->size++;
            return new Node($key, $value);
        }
        if ($key < $node->key){
            $node->left = $this->addNode($node->left,$key,$value);
        }elseif($key > $node->key){
            $node->right = $this->addNode($node->right,$key, $value);
        }elseif($key == $node->key){
            $node->value = $value;
        }
        return $node;
    }
     // 返回以node为根节点的二分搜索树中，key所在的节点
    private function getNode($node,$key){
        if($node == null){
            return NULL;
        }
        if ($key < $node->key){
            return $this->getNode($node->left,$key);
        }elseif($key > $node->key){
            return $this->getNode($node->right,$key);
        }elseif($key == $node->key){
            return $node;
        }
    }
    public function contains($key){
        return $this->getNode($this->root,$key);
    }
    public function get($key){
        $node = $this->getNode($this->root,$key);
        return $node == null ? null : $node->value;
    }
    public function set($key,$value){
        $node = $this->getNode($this->root,$key);
        if($node == null){
            throw new Exception("$key not exist");
        }
        $node->value = $value;
    }
    // 寻找二分搜索树的最小元素
    public function minimum(){
        if($this->size == 0){
            throw new Exception("BST is empty");
        }
        $minNode = $this->minimumNode($this->root);
        return $minNode->e;
    }
    // 返回以node为根的二分搜索树的最小值所在的节点
    private function minimumNode($node){
        if($node->left == null){
            return $node;
        }
        return $this->minimumNode($node->left);
    }

    // 从二分搜索树中删除最小值所在节点, 返回最小值
    public function removeMin(){
        $ret = $this->minimum();
        $this->root = $this->removeMinNode($this->root);
        return $ret;
    }
    // 删除掉以node为根的二分搜索树中的最小节点
    // 返回删除节点后新的二分搜索树的根
    public function removeMinNode($node){
        if($node->left == null){
            $rightNode = $node->right;
            $node->right = null;
            $this->size -- ;
            return $rightNode;
        }
        $node->left = $this->removeMinNode($node->left);
        return $node;
    }
    public function remove($key){
        $node = $this->getNode($this->root,$key);
        if($node == null){
            return null;
        }
        $this->root = $this->removeNode($this->root,$key);
    }
    public function removeNode($node,$key){
        if($node == null){
            return NULL;
        }
        if ($key < $node->key){
            $node->left = $this->removeNode($node->left,$key);
            return $node;
        }elseif($key > $node->key){
            $node->right =$this->removeNode($node->right,$key);
            return $node;
        }elseif($key == $node->key){
          // 待删除节点左子树为空的情况
          if($node->left == null){
            $rightNode = $node->right;
            $node->right = null;
            $this->size--;
            return $rightNode;
            }
            // 待删除节点右子树为空的情况
            if($node->right == null){
                $leftNode = $node->left;
                $node->left = null;
                $this->size--;
                return $leftNode;
            }
            // 待删除节点左右子树均不为空的情况
            // 找到比待删除节点大的最小节点, 即待删除节点右子树的最小节点
            // 用这个节点顶替待删除节点的位置
            $successor = $this->minimumNode($node->right);
            $successor->right = $this->removeMinNode($node->right);
            $successor->left = $node->left;
            $node->left = $node->right = null;
            return $successor;
        }

    }
   
}