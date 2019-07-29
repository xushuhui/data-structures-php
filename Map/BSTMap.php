<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "Map.php";
class BSTNode
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
            return new BSTNode($key, $value);
        }
    }
     // 返回以node为根节点的二分搜索树中，key所在的节点
    private function getNode($node,$key){
        
    }
    public function contains($key){
        
    }
    public function get($key){
        
    }
    public function set($key,$value){
        
    }
    public function remove($key){
        
    }
   
}