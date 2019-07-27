<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
interface Map{
    function add($key,$value);
    function contains($key);
    function get($key);
    function set($key,$value);
    function remove($key);
    function getSize();
    function isEmpty();
}