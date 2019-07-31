<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "SegmentTree.php";
$nums = [-2, 0, 3, -5, 2, -1];
$func = function($a,$b){
    return $a+$b;
};
$segTree = new SegmentTree($nums,$func);

print_r ($segTree);