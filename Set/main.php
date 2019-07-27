<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */

include_once "BSTSet.php";
$BSTSet = new BSTSet();

$str = file_get_contents("pride-and-prejudice.txt"); //get string from file
preg_match_all("/\b(\w+[-]\w+)|(\w+)\b/",$str,$r); //place words into array $r - this includes hyphenated words
//$words = array_count_values(array_map("strtolower",$r[0])); //create new array - with case-insensitive count
//arsort($words); //order from high to low 
foreach ($r[0] as $item) {
    $BSTSet->add($item); 
}
//print_r(count(array_map("strtolower",$r[0])));//125718
echo $BSTSet->getSize();
    