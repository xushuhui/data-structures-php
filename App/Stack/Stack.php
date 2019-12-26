<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
namespace App\Stack;
interface Stack
{
    public function getSize();
    public function isEmpty();
    public function push($e);
    public function pop();
    public function peek();
}
