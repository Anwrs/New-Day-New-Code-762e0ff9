<?php 

$wsgeld = intval($argv[1]);
// $coins = [10, 5, 2, 1];


define('geldEenheid', [50, 20, 10, 5, 2, 1]);


foreach(geldEenheid as $coin){
    if(floor($wsgeld / $coin) > 0){
        $times = floor($wsgeld / $coin);
        echo "$times X $coin euro" . "\n";
        $wsgeld = $wsgeld - ($times * $coin);
    }
}