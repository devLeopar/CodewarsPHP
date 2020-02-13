<?php
//https://www.codewars.com/kata/roman-numerals-decoder
function solution($architect){
$changed=[];
$arr_rome = str_split($architect,1);
$roma = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
];

    foreach($arr_rome as $gabs => $jessi){
        foreach($roma as $keys => $value){
            if($jessi == $keys){
                $arr_rome[$gabs]= $value;
            }
    }
}
for($i=0;$i<count($arr_rome)-1;$i++){
    if($arr_rome[$i+1]>$arr_rome[$i]){
        $arr_rome[$i]*=-1;
}
}
return array_sum($arr_rome);
}
echo solution('IV');

?>