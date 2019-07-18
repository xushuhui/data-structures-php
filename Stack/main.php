<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include "ArrayStack.php";

$stock = new ArrayStack();

for ($i=1; $i < 5; $i++) { 
    $stock->push($i);
}
echo $stock;
$stock->pop();
echo $stock;
