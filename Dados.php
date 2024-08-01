<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Aceitação</title>
</head>
<body>
    <h1>Verificação de Aceitação</h1>
    <form method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="sexo">Sexo:</label><br>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="X">Outros</option>
        </select><br><br>
        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $idade = intval($_POST["idade"]);

        if ($sexo == "F" && $idade < 25) {
            echo "<h2>$nome: ACEITA</h2>";
        } else {
            echo "<h2>$nome: NÃO ACEITA</h2>";
        }
    }
    ?>
</body>
</html>