<?php
class Node{
    public $e;
    public $next;
    public function __construct($e = null,$next=null){
        $this->e = $e;
        $this->next = $next;
    }
    
}