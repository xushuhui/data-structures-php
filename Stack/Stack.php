<?php
interface Stack{
    function getSize();
    function isEmpty();
    function push($e);
    function pop();
    function peek();
}