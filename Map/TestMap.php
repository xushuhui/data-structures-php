<?php
include_once "BSTMap.php";
include_once "LinkedListMap.php";
class TestMap
{
    public static function test($map, $filename)
    {
        $startTime = microtime(true);
        $str = file_get_contents($filename);
        preg_match_all("/\b(\w+[-]\w+)|(\w+)\b/", $str, $r);
        echo("\nTotal words: " . count($r[0]));
        foreach ($r[0] as $item) {
            if ($map->contains($item)) {
                $map->set($item, $map->get($item)+1);
            } else {
                $map->add($item, 1);
            }
        }
        echo("\nTotal different words: " . $map->getSize());
        echo("\nFrequency of PRIDE: " +  $map->get("pride"));
        echo("\nFrequency of PREJUDICE: " +  $map->get("prejudice"));
        
        $endTime = microtime(true);
        return ($endTime - $startTime);
    }
    public static function main()
    {
        $filename = "pride-and-prejudice.txt";
        $BSTMap = new BSTMap();
        $t1 = self::test($BSTMap, $filename);
        print_r("\nBST Map: ".$t1." s");//1.2939808368683
        $LinkedListMap = new LinkedListMap();//72.904971122742
        $t2 = self::test($LinkedListMap, $filename);
        print_r("\nLinked List Map: ".$t2." s");
    }
}
TestMap::main();
