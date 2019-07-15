<?php
interface Queue{
    function getSize();
    function isEmpty();
    function enqueue($e);
    function dequeue();
    function getFront();
}