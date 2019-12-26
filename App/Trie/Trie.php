<?php
namespace App\Trie;
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class TrieNode
{
    //是否是单词
    public $isWord;
    //是否出现过这个字母，以及这个字母后面所指向的另一个节点的位置
    public $treeMap;
    public function __construct($isWord = false)
    {
        $this->isWord = $isWord;
    }
   
}
class Trie
{
    //根节点
    private $root;
    //记录有多少个单词
    private $size;

    public function __construct()
    {
        $this->root = new TrieNode();
        $this->size = 0;
    }
    public function getSize()
    {
        return $this->size;
    }
    //添加单词
    public function add($word)
    {
        $cur = $this->root;
    }
    //查询某个单词是否存在
    public function contains($str)
    {
    }
    //带有通配符的查询
    public function match($str)
    {
        return $this->matchStr($this->root, $str, 0);
    }
    private function matchStr($root, $str, $index)
    {
        if ($index == strlen($str)) {
            return $this->root->isWord;
        }
    }
}
