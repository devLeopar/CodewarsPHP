<?php
//rowSumOddNumber
function rowSumOddNumbers($n) {
    $k = ($n*$n)-($n-1);
    $c = $k;
    $i = 1;
    if($n == 1) return 1;
    else{
        while($i<$n){
            $c+=2;
            $k+=$c; 

            $i++;
        }

        }

        return $k;
    }
  
echo rowSumOddNumbers(5);
?>