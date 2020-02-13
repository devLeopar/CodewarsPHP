<?php
//https://www.codewars.com/kata/5259b20d6021e9e14c0010d4
function reverseWords($str) {
    $cadi = explode(" ",$str);
    $k ="";
    foreach($cadi as $s){
        $a = str_split($s);
        for($i=0;$i<count($a);$i++){
            $k.=$a[count($a)-1-$i];
        }
            $k.=" ";
        //$k.=strrev($s)." ";
    }
    return substr($k,0,-1);
  }

  echo reverseWords('habire quay');
?>