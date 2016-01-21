<?php

$aluno[0]["matricula"] = 1;
$aluno[0]["nome"] = "Paulo";
$aluno[0]["altura"] = 1.78;

$aluno[1]["matricula"] = 2;
$aluno[1]["nome"] = "Pedro";
$aluno[1]["altura"] = 1.85;

$aluno[2]["matricula"] = 3;
$aluno[2]["nome"] = "Jose";
$aluno[2]["altura"] = 1.80;

$aluno[3]["matricula"] = 4;
$aluno[3]["nome"] = "Leudo";
$aluno[3]["altura"] = 1.77;

$aluno[4]["matricula"] = 5;
$aluno[4]["nome"] = "Rodrigo";
$aluno[4]["altura"] = 1.76;

$aluno[5]["matricula"] = 6;
$aluno[5]["nome"] = "Fabiano";
$aluno[5]["altura"] = 1.75;

$aluno[6]["matricula"] = 7;
$aluno[6]["nome"] = "Ana";
$aluno[6]["altura"] = 1.73;

$aluno[7]["matricula"] = 8;
$aluno[7]["nome"] = "Caroliny";
$aluno[7]["altura"] = 1.90;

$aluno[8]["matricula"] = 9;
$aluno[8]["nome"] = "Rafael";
$aluno[8]["altura"] = 1.67;

$aluno[9]["matricula"] = 10;
$aluno[9]["nome"] = "Feijao";
$aluno[9]["altura"] = 1.71;

$aluno[10]["matricula"] = 11;
$aluno[10]["nome"] = "Lia";
$aluno[10]["altura"] = 1.66;

$aluno[11]["matricula"] = 12;
$aluno[11]["nome"] = "Juliana";
$aluno[11]["altura"] = 1.65;

$aluno[12]["matricula"] = 13;
$aluno[12]["nome"] = "Alisson";
$aluno[12]["altura"] = 1.45;

$aluno[13]["matricula"] = 14;
$aluno[13]["nome"] = "Flavio";
$aluno[13]["altura"] = 1.55;

$aluno[14]["matricula"] = 15;
$aluno[14]["nome"] = "Magal";
$aluno[14]["altura"] = 1.57;

$aluno[15]["matricula"] = 16;
$aluno[15]["nome"] = "Thiago";
$aluno[15]["altura"] = 1.60;

$aluno[16]["matricula"] = 17;
$aluno[16]["nome"] = "Bruno";
$aluno[16]["altura"] = 1.67;

$aluno[17]["matricula"] = 18;
$aluno[17]["nome"] = "Amy";
$aluno[17]["altura"] = 1.69;

$aluno[18]["matricula"] = 19;
$aluno[18]["nome"] = "Fred";
$aluno[18]["altura"] = 1.44;

$aluno[19]["matricula"] = 20;
$aluno[19]["nome"] = "Carlos";
$aluno[19]["altura"] = 1.52;

foreach ($aluno as $key => $row) {
    $altura[$key] = $row['altura'];
}

array_multisort($altura, SORT_DESC, $aluno);

for($i=0;$i<5;$i++) {
    echo "A matricula ".$aluno[$i]['matricula']." tem altura ".$aluno[$i]['altura']."<br />";
}

?>