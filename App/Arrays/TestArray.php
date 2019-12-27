<?php

namespace App\Arrays;
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class TestArray
{
    public function __construct()
    {
        $arr = new Arrays(3);
        echo $arr;
        for ($i = 0; $i < 15; $i++) {
            $arr->addLast($i);
        }
        $arr->set(1, 12);
        echo $arr;
        $arr->removeFirst();
        echo $arr;
        $arr->removeElement(12);
        echo $arr;
    }
}

