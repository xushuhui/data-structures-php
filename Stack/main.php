<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "ArrayStack.php";
include_once "LinkedListStack.php";
$arrayStock = new ArrayStack();
for ($i=1; $i < 5; $i++) { 
    $arrayStock->push($i);
}
echo $arrayStock;
$arrayStock->pop();
echo $arrayStock;

$linkedListStock = new LinkedListStack();

for ($i=1; $i < 5; $i++) { 
    $linkedListStock->push($i);
}
echo $linkedListStock;
$linkedListStock->pop();
echo $linkedListStock;