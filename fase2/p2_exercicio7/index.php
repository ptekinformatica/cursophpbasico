<?php

function fibonacci($n){

    $sqrt5 = sqrt(5);

    return ( 1 / $sqrt5 ) * ( pow( ( 1 + $sqrt5 ) / 2 , $n ) - pow( ( 1 - $sqrt5 ) / 2 , $n ) );

}

echo "fibonacci(100); = ".fibonacci(100);


?>

