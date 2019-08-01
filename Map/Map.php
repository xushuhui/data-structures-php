<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
interface Map
{
    public function add($key, $value);
    public function contains($key);
    public function get($key);
    public function set($key, $value);
    public function remove($key);
    public function getSize();
    public function isEmpty();
}
