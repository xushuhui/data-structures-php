<?php
namespace App\Set;
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
interface Set
{
    public function add($e);
    public function contains($e);
    public function remove($e);
    public function getSize();
    public function isEmpty();
}
