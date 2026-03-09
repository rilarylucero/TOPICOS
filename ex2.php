<?php
$numeros = [8, 16, 24, 32, 40];

unset($numeros[2]);

foreach ($numeros as $num) {
    echo $num . "<br>";
}
?>