<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mf = floatval($_POST['mf']);

    echo "<h3>Resultado para Média Final: $mf</h3>";

    if ($mf > 10) {
        echo "<p>Erro: Média inválida. O valor máximo a ser inserido é 10.</p>";
    }
    elseif ($mf <= 1.7) {
        echo "<p style='color: red;'>Situação: Reprovado. Média insuficiente para realizar o exame.</p>";
    } 
    elseif ($mf >= 7.0 && $mf <= 10.0) {
        echo "<p style='color: green;'>Situação: APROVADO! Parabéns!!</p>";
    } 
    else {
        $ne = (50 - (6 * $mf)) / 4;

        echo "<p>Situação: em <strong>EXAME</strong>.</p>";
        echo "<p>Você precisa tirar no mínimo <strong>" . number_format($ne, 2, ',', '.') . "</strong> no exame para ser aprovado.</p>";
    }

    echo "<br><a href='e3.html'>Voltar</a>";
}
?>