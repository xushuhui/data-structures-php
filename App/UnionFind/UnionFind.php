<?php
namespace App\UnionFind;
interface UnionFind
{
    public function getSize();
    public function isConnected();
    public function unionElements();
}