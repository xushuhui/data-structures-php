<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
include_once "LinkedList.php";
$link = new LinkedList();
for ($i=1; $i < 5; $i++) { 
    $link->addFirst($i);
   
}
$link->set(2,6666);
print_r ($link);
// $link->addFirst(1);

// $link->addFirst(2);
// echo ($link);