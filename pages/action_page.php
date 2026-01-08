<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Formulário enviado com sucesso!</h2>";
} else {
    echo "<h2>Formulário não enviado.</h2>";
}
?>
