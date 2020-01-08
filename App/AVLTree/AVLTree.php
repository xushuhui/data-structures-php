<?php
namespace App\AVLTree;
class Node
{
    private $key;
    private $value;
    public $left,$right;
    public $height;
    public function __construct($k = null,$v = null)
    {
        $this->key = $k;
        $this->value = $v;
        $this->height = 1;
    }
}
class AVLTree
{
    private $root;
    private $size = 0;
    public function __construct($k,$v)
    {
        $this->root = new Node();
    }
}
