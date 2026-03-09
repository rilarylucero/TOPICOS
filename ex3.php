<?php
$produto = [
    "nome" => "Máscara",
    "preco" => 50,
    "estoque" => 10
];

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor <br>";
}
?>