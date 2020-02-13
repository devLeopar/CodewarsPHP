<?php
//https://www.codewars.com/kata/583203e6eb35d7980400002a/train/php

function count_smileys($arr): int {
    $k = 0;
    $smile = [':)',':D',';)',';D',':-)',':~)',':-D',':~D',';-)',';-D',';~D',';~)'];
    for($i=0;$i<count($smile);$i++){
        for($j=0;$j<count($arr);$j++){
            if($smile[$i]==$arr[$j]) $k++;
        }
    }
    return $k ;
  }

  echo count_smileys([':)', ';(', ';}', ':-D']);
?>