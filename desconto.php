<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <h1>Calculadora de Desconto</h1>
    <form method="post">
        <label for="valor">Valor do Produto (em R$):</label><br>
        <input type="text" id="valor" name="valor" required><br><br>
        <input type="submit" value="Calcular Desconto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_original = floatval($_POST["valor"]);
        $desconto = $valor_original * 0.07;
        $valor_com_desconto = $valor_original - $desconto;

        echo "<h2>Resultados:</h2>";
        echo "<p>Valor Original: R$ " . number_format($valor_original, 2, ',', '.') . "</p>";
        echo "<p>Valor do Desconto: R$ " . number_format($desconto, 2, ',', '.') . "</p>";
        echo "<p>Valor com Desconto: R$ " . number_format($valor_com_desconto, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>  
    
</body>
</html>