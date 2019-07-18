<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class Node{
    public $e;
    public $next;
    public function __construct($e = null,$next=null){
        $this->e = $e;
        $this->next = $next;
    }
    
}