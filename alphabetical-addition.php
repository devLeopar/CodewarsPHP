<?php
//https://www.codewars.com/kata/alphabetical-addition/train/php
function addLetters(...$letters) {
    $alphabet = 'a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z';
    $alph_arr = explode(', ',$alphabet);
    $k = 0;
    foreach($letters as $value){
        for($i=0;$i<count($alph_arr);$i++){
            if($alph_arr[$i]==$value){
                $k+=$i+1;
            }
        }
    }
    return (count($letters)>0)? $alph_arr[($k-1)%26]:'z';
  }
  echo addLetters('z');

  //altörnative solution for bitches

  function adderLetters(...$letters) {
    if (empty($letters)) return 'z';
    
    $sum = array_reduce($letters, function ($carry, $letter) {
      return $carry + ord($letter) - 96;
    });
    
    
    return chr((($sum - 1) % 26) + 97);
  }
  echo '<br>';
  echo adderLetters('a','b','c');

?>