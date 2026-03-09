<?php
$alunos = [
    ["nome" => "Rilary", "nota" => 10],
    ["nome" => "Bruno", "nota" => 1],
    ["nome" => "Lorenzo", "nota" => 2]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];

    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

$media = $soma / count($alunos);

echo "Média: $media <br>";
echo "Maior nota: $maiorNota <br>";
echo "Melhor aluno: $melhorAluno";
?>