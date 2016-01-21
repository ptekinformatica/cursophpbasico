<?php

$alunos = array(
    0=>array(
        0=>"Paulo",
        1=>9),
    1=>array(
        0=>"Julio",
        1=>8),
    2=>array(
        0=>"Pedro",
        1=>5),
    3=>array(
        0=>"Ana",
        1=>10),
    4=>array(
        0=>"Caroliny",
        1=>7),
    5=>array(
        0=>"Rose",
        1=>6),
    6=>array(
        0=>"César",
        1=>8),
    7=>array(
        0=>"Mesquita",
        1=>3),
    8=>array(
        0=>"Julio",
        1=>1),
    9=>array(
        0=>"Edson",
        1=>7)
    );

echo "<ul>";
for($i=0;$i<10;$i++){

    if($alunos[$i][1] < 6){
        echo "<li>O aluno ".$alunos[$i][0]." com a nota ".$alunos[$i][1]." foi reprovado.<br /></li>";
    } else {
        echo "<li>O aluno ".$alunos[$i][0]." com a nota ".$alunos[$i][1]." foi aprovado.<br /></li>";
    }
}
echo "</ul>";
?>