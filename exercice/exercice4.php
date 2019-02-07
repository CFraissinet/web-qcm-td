<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
$s = $args[0];
$tableau = str_split($s);
$rond = 0;

foreach ($tableau as $value) {
    // If bidule = 6 || 9 || 0      =>      rond++
    // If bidule = 8                =>      rond += 2

    if ($value === '6' || $value === '9' || $value === '0') {
        $rond = $rond +1;
    } elseif ($value === '8') {
        $rond = $rond +2;
    }
}

// Write an action using echo().
echo($rond);
