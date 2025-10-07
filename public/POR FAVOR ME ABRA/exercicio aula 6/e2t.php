<?php 

$itens = [

"espada" => 20,
"machado" => 15,
"picareta" => 10,
"pá" => 5,
];

$total = 0;

foreach($itens as $item => $dmg) {
echo "Item: $item - dano: $dmg <br>";
$total += $dmg;

echo "<br> Dano causado: $total ";

}