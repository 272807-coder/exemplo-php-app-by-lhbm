<?php

$produtos = [
    "Arroz"   => 20,
    "Feijão"  => 10,
    "Macarrão"=> 5,
    "Leite"   => 8,
    "Pão"     => 6
];

$total = 0;


foreach ($produtos as $produto => $preco) {
    echo "Produto: $produto - Preço: $preco <br>";
    $total += $preco; // Somar os preços
}


echo "<br>Valor total da compra: $total";