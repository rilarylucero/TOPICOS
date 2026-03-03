<?php
$usuario_correto = "Rilary";
$senha_correta = "2024305110";
$cargo_usuario = "Estudante";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_digitado = $_POST['usuario'];
    $senha_digitada = $_POST['senha'];

    if ($usuario_digitado === $usuario_correto && $senha_digitada === $senha_correta) {
        echo "<h3>Bem-vinda, " . ($usuario_digitado) . "!</h3>";
        echo "<p>Seu cargo atual é: <strong>" . $cargo_usuario . "</strong></p>";
    } else {
        echo "<h2> 
                <strong>
                     Nome de usuário ou senha incorretos!  
                </strong> 
            </h2>";
        echo "<a href='e2.html'>Tentar novamente</a>";
    }
}
?>