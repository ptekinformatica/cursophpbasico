<?php

for($i=0;$i<10;$i++) {
    $random[$i] = rand(1,100);
    if($random[$i] % 2 == 0) {
        echo $random[$i]." é par <br />";
    } else {
        echo $random[$i]." é impar <br />";
    }
}

?>