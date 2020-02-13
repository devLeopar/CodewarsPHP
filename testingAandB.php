<?php
//https://www.codewars.com/kata/thinking-and-testing-a-and-b/train/php
function testit($a,$b):int
{
    
    var_dump(base_convert($a,10,2));
    var_dump(base_convert($b,10,2));
    var_dump(base_convert("111100",2,10));
    var_dump(base_convert("54",10,2));
  return $a | $b;
}

echo testit(48,22);

?>