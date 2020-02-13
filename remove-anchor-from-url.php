<?php
//https://www.codewars.com/kata/remove-anchor-from-url/train/php
function replaceAll($string) {
    return (strpos($string,'#')>0)? substr($string,0,strpos($string,'#')):$string;
  }

  echo replaceAll("http://www.ssportplus.com.tr#aheste");

?>