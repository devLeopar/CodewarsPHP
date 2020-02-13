<?php
//https://www.codewars.com/kata/57cfdf34902f6ba3d300001e

function twoSort($s) {
    $a ="";
    sort($s);
    foreach(str_split($s[0]) as $k){
        $a .= $k."***";
    }
    return substr($a,0,-3);

  }

  echo twoSort(["lets", "talk", "about", "javascript", "the", "best", "language"]);

?>