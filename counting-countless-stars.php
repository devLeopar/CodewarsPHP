<?php
//https://www.codewars.com/kata/counting-duplicates/train/php
function duplicateCount($text) {
    $ali_bicim = str_split(strtolower($text));
    $tonbish = array_count_values($ali_bicim);
    $kab = 0;
    foreach($tonbish as $j=>$k){
        if($k>1){
            $kab++;
        }
    }
    return $kab;
  }

  echo duplicateCount('ulenyiimJengHiiiZZZZ');
?>