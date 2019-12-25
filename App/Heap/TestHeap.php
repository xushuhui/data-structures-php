<?php
namespace App\Heap;
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */

class TestHeap
{
    public static function test($testData, $isHeapify)
    {
        $startTime = microtime(true);
        if ($isHeapify) {
            $maxHeap = new MaxHeap(0, $testData);
        } else {
            $maxHeap = new MaxHeap();
            foreach ($testData as $num) {
                $maxHeap->add($num);
            }
        }

        $count = count($testData);
        $arr = [];
        for ($i = 0; $i < $count; $i++) {
            $arr[$i] = $maxHeap->extractMax();
        }

        for ($i = 1; $i < $count; $i++) {
            if ($arr[$i - 1] < $arr[$i]) {
                throw new \Exception . ("Error");
            }
        }
        echo ("Test MaxHeap completed.");
        $endTime = microtime(true);
        return ($endTime - $startTime);
    }
    public static function main()
    {
        $count = 100010;
        $testData = (new \SplFixedArray($count))->toArray();
        for ($i = 0; $i < $count; $i++) {
            $testData[$i] = mt_rand(1, 100000);
        }
        $time1 = self::test($testData, false);
        print_r("Without heapify: $time1 s");
        $time2 = self::test($testData, true);
        print_r("\n With heapify: $time2 s");
    }
}
TestHeap::main();
