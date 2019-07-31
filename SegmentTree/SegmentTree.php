<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class SegmentTree
{
    private $tree;
    private $data;
    private $merger;
    public function __construct($arr,$merger){
        $count = count($arr);
        $this->data = [];
        for ($i=0; $i < count($arr); $i++) { 
            $this->data[$i] = $arr[$i];
        }
        $this->tree = [];
        $this->merger = $merger;
        $this->buildSegmentTree(0, 0,  $count - 1);
    }
    private function buildSegmentTree($treeIndex,$left,$right){
        if($right == $left){
            $this->tree[$treeIndex] = $this->data[$left];
            return;
        }
        $leftTreeIndex = $this->leftChild($treeIndex);
        $rightTreeIndex = $this->rightChild($treeIndex);
        $mid = $left + ($right -1)/2;
        $this->buildSegmentTree($leftTreeIndex,$left,$mid);
        $this->buildSegmentTree($rightTreeIndex,$mid+1,$right);
        $this->tree[$treeIndex] = $this->merger($this->tree[$leftTreeIndex],$this->tree($rightTreeIndex));
    }
    public function getSize(){
        return count($this->data);
    }
    public function get($index){
        if($index < 0 || $index >= count($this->data)){
            throw new \Exception("Index is illegal");
        }
        return $this->data[$index];
    }
    private function leftChild($index){
        return 2*$index+1;
    }
    private function rightChild($index){
        return 2*$index+2;
    }
    public function __toString(){
        $res = '[';
        for($i = 0; $i < count($this->tree); $i ++){
            if($this->tree[$i] != null)
                $res.=$this->tree[$i];
            else{
                $res.="null";
            }
            if($i != count($this->tree) - 1){
                $res.=", ";
            } 
        }
        $res.="]";
        
    }
}