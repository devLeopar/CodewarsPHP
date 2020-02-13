<?php
//https://www.codewars.com/kata/errors-histogram/train/php
function hist($s) {
    $w=0;
    $u=0;
    $x=0;
    $z=0;
    $last ="";


    preg_match_all('/u|x|z|w/',$s,$a);

    for($i=0;$i<count($a[0]);$i++){

        if($a[0][$i]=='u'){
            $u++;
        }
        else if($a[0][$i]=='x'){
            $x++;
        }
        else if($a[0][$i]=='w'){
            $w++;
        }
        else if($a[0][$i]=='z'){
            $z++;
        }
        else{}
    }

        if($u>0){
            $last.="u"."  ".$u."     ".str_repeat("*",$u)."\r";
        }
        if($w>0){
            $last.="w"."  ".$w."     ".str_repeat("*",$w)."\r";
        }
        if($x>0){
            $last.="x"."  ".$x."     ".str_repeat("*",$x)."\r";
        }
        if($z>0){
            $last.="z"."  ".$z."     ".str_repeat("*",$z);
        }

    

    return (rtrim($last) != $last)? substr($last,0,-1):$last;
}

echo hist("tpwaemuqxdmwqbqrjbeosjnejqorxdozsxnrgpgqkeihqwybzyymqeazfkyiucesxwutgszbenzvgxibxrlvmzihcb");
/*if (rtrim($kek) != $kek) {
    echo 'have whitespace(but does not have)';
   }*/
?>