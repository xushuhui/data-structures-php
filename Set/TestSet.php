<?php

class TestSet
{
    public static function test($set,$filename){
        $startTime = microtime(true);
        $str = file_get_contents($filename); 
        preg_match_all("/\b(\w+[-]\w+)|(\w+)\b/",$str,$r); 
        foreach ($r[0] as $item) {
            $set->add($item); 
        }
        $endTime = microtime(true);
        return ($endTime - $startTime);
    }
    public static function main(){
        $filename = "pride-and-prejudice.txt";
        // include_once "BSTSet.php";
        // $BSTSet = new BSTSet();
        // $t1 = self::test($BSTSet,$filename);
        // print_r("\ntl---".$t1);//1.2939808368683
        include_once "LinkedListSet.php";
        $linkedListSet = new LinkedListSet();//72.904971122742
        $t2 = self::test($linkedListSet,$filename);
       
        print_r("\nt2---".$t2);
       
    }
}
TestSet::main();