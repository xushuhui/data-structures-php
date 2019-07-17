<?php
class Node{
    public $element;
    public $next;
    public function __construct($element = null,$next=null){
        $this->element = $element;
        $this->next = $next;
    }
    
}