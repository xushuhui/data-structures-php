<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */

include_once "BST.php";
$BST = new BST();
$nums = [5,3,6,8,4,2];
foreach ($nums as $v) {
    $BST->add($v);
}
/////////////////
//      5      //
//    /   \    //
//   3    6    //
//  / \    \   //
// 2  4     8  //
/////////////////

// $BST->preOrder();
// echo "\n";
// $BST->inOrder();
// echo "\n";
// $BST->postOrder();
// echo "\n";
//$BST->levelOrder();
// $BST->preOrderNR();
// echo $BST;
// echo $BST->minimum();
// echo $BST->removeMin();
// echo $BST->minimum();
// echo $BST->maximum();
// $BST->removeMax();
// echo $BST->maximum();