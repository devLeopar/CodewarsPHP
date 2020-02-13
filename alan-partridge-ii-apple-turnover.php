<?php
//https://www.codewars.com/kata/alan-partridge-ii-apple-turnover/train/php

class jamesbond extends TestCase{
    public function apple($x) {
        return ($this->squared($this->checker($x))>1000)?'It\'s hotter than the sun!!':'Help yourself to a honeycomb Yorkie for the glovebox.';
      }
    private function squared($james){
        return $james*$james;
    }
    private function checker($bond){
        return intval($bond);
    }
    }
$osman = new jamesbond;
echo $osman->apple(50);

?>