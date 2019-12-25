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
class TestStack
{
    public static function test($stack, $count)
    {
        $startTime = microtime(true);
        for ($i = 0 ; $i < $count ; $i ++) {
            $stack->push(mt_rand(0, 999));
        }
            
        for ($i = 0 ; $i < $count ; $i ++) {
            $stack->pop();
        }
        $endTime = microtime(true);
        return ($endTime - $startTime);
    }
    public static function main()
    {
        $count = 1000000;
        $arrayStack = new ArrayStack();
        $t1 = self::test($arrayStack, $count);
        
        $linkedListStock = new LinkedListStack();
        $t2 = self::test($linkedListStock, $count);
        print_r("\ntl---".$t1);
        print_r("\nt2---".$t2);
        echo "\n";
        print_r($t1/$t2);
    }
}
TestStack::main();
