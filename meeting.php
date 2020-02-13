<?php
//https://www.codewars.com/kata/meeting/train/php
function meeting($s) {
    $patt = "/(\w+):(\w+)/m";
    $rep = "$2:$1";
    $x = preg_replace($patt,$rep,$s);
    $a = strtoupper($x);
    $b = explode(';',$a);
    $c = [];
    $din = "";

    foreach($b as $shit){
        array_push($c,explode(':',$shit));
    }
    sort($c);
    foreach($c as $d){
        $din.="(".$d[0].', '.$d[1].')';
    }
    return $din;
}


echo meeting("Alexis:Wahl;John:Bell;Victoria:Schwarz;Abba:Dorny;Grace:Meta;Ann:Arno;Madison:STAN;Alex:Cornwell;Lewis:KERN;Megan:Stan;Alex:Korn");

?>