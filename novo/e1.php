<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $idade = ($_POST['idade']);
    $sexo = $_POST['sexo'];

    echo "Nome: " . $nome . "<br>";

if ($idade >= 18) {
    echo "Minha idade é: " . $idade . " anos<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Endereço: " . $endereco . "<br>";
} else {
    echo "Menor de idade";
}
} else {
    echo "Envie o formulário primeiro.";
}
?>