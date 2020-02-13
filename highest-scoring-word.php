<?php
//https://www.codewars.com/kata/57eb8fcdf670e99d9b000272/train/php
//highly crazy implementation :)
function high($x) {
    $pat = '/\w+/';
    preg_match_all($pat,$x,$hapsu);
    $abi = array_map('texter',$hapsu[0]);
    //echo ord($hapsu[0][0]).'<br>';
    //$haci = array_merge(array_flip($abi),$hapsu[0]);
    $haci = array();
    for($i=0;$i<count($abi);$i++){
        $haci[$hapsu[0][$i]] = $abi[$i];
    }
    arsort($haci);
    $dumber = array_slice($haci,0,2);
    $dumber_2 = array_values($dumber);
    if($dumber_2[0]==$dumber_2[1]){
        $hadi = array();
        foreach($dumber as $key => $value){
            $hadi[$key] = strpos($x,$key);
        }
        asort($hadi);
        foreach($hadi as $key => $value){
            return $key;
        }
    }
    else{
        foreach($dumber as $key => $value){
            return $key;
        }
    }
    //$dumber = array();
    //$jamiraquay = array_flip($haci);
    //arsort($jamiraquay);

  // $jamiraquay = array_flip($haci);
  //  return array_shift($jamiraquay);
  }
  function texter($q){
    $a = 0;
    $b = str_split($q);
    foreach($b as $j){
        $a+=ord($j)-96;
    }
    return $a;

  }

  echo high('tpspjorwg hwkittpmd kcepakpg mffodsf');
  //echo ord('a');
?>