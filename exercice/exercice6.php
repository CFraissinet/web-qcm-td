<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$M = array_shift($args);
for ($i = 0; $i < $M; $i++) {
    $N = $args[$i];
    if ($N%2==0){
        $N =$N+1
        echo "{$N}\r\n";
    }else{
    echo "{$N}\r\n";
    }
}
