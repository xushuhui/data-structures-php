<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
namespace App\Set;
class TestSet
{
    public static function test($set, $filename)
    {
        $startTime = microtime(true);
        $str = file_get_contents($filename);
        preg_match_all("/\b(\w+[-]\w+)|(\w+)\b/", $str, $r);
        echo("\nTotal words: " . count($r[0]));
        foreach ($r[0] as $item) {
            $set->add($item);
        }
        echo("\nTotal different words: " . $set->getSize());
       
        $endTime = microtime(true);
        return ($endTime - $startTime);
    }
    public static function main()
    {
        $filename = "pride-and-prejudice.txt";
        $BSTSet = new BSTSet();
        $t1 = self::test($BSTSet, $filename);
        print_r("\nBST Set: ".$t1." s");//1.2939808368683
        $linkedListSet = new LinkedListSet();//72.904971122742
        $t2 = self::test($linkedListSet, $filename);
        print_r("\nLinked List Set: ".$t2." s");
    }
}
TestSet::main();
