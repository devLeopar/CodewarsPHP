<?php
//https://www.codewars.com/kata/the-deaf-rats-of-hamelin/train/php
// There is a issue of php random tests. There are either no piper or multiple pipers
function countDeafRats($town)
{
preg_match_all('/~O|O~/',$town,$g,PREG_OFFSET_CAPTURE);
$pos = strpos($town,'P');
$ret = 0;
foreach($g as $j){
    foreach($j as $k){
    if(strcmp('~O',$k[0])==0 && $k[1]>$pos) {
        
        $ret++;
    }
    else if(strcmp('O~',$k[0])==0 && $k[1]<$pos){

        $ret++;
    }
    else{}
    }
}
return $ret;
}

echo countDeafRats("O~O~ O~ O~ ~O~O~O~O~O~OO~P");

?>