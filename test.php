<?php
    echo "Hello, World!<pre>";

$numbers= array(1,2,3,4,5,6,7,8,9,0);
$letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');

$i = 0;
foreach($letters as $letter) {
    ++$i;
    echo $letter . PHP_EOL;
    foreach($numbers as $number) {
        ++$i;
        switch($letter) {
           case 'd':
               // So here I want to 'break;' out of the switch, 'break;' out of the
               // $numbers loop, and then 'continue;' in the $letters loop.
              continue 3; // go to the end of this switch, numbers loop iteration, letters loop iteration
            break;
           case 'f':
            continue 2; // skip to the end of the switch control AND the current iteration of the number's loop, but still process the letter's loop
            break;
           case 'h':
            // would be more appropriate to break the number's loop
            break 2;

        }
        // Still in the number's loop
        echo " $number ";
    }


    // Stuff that should be done if the 'letter' is not 'd'.
    echo " $i " . PHP_EOL;

}