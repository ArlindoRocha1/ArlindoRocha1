<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="loginte.css">
</head>
<body>
    <br><br>
    <br><br>
    <br><br>
    <br><br>

    <form action="process.php" method="post">
    <h2>LOGIN DE CADASTRO</h2>
        Nome: <input type="text" name="nm" id="nm" required />
        <br><br>
        Nome de Usuário: <input type="text" name="us" id="us" required />
        <br><br>
        Email: <input type="email" name="em" id="em" required />
        <br><br>
        CPF: <input type="text" name="CPF" id="CPF" required />
        <br><br>
        Data de Nascimento: <input type="date" name="dn" id="dn" required />
        <br><br>
        Sexo: 
        <select name="sx" id="sx" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select>
        <br><br>
        Endereço: <input type="text" name="end" id="end" required />
        <br><br>
        Senha: <input type="password" name="sn" id="sn" required />  
        <br><br>     
        <input type="submit" value="Cadastro">
    </form>

    <div>
        <form action="process.php" method="post" class="register-form">
            <h2>Cadastro</h2>
            <input type="hidden" name="form_type" value="register">
            <label for="register-email">Email:</label>
            <input type="email" id="register-email" name="email" required>
            
            <label for="register-password">Senha:</label>
            <input type="password" id="register-password" name="password" required>
            
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar dados do formulário
    $nome = $_POST['nm'] ?? null;
    $nomeUsuario = $_POST['us'] ?? null;
    $email = $_POST['em'] ?? null;
    $cpf = $_POST['CPF'] ?? null;
    $dataNascimento = $_POST['dn'] ?? null;
    $sexo = $_POST['sx'] ?? null;
    $endereco = $_POST['end'] ?? null;
    $senha = $_POST['sn'] ?? null;

    // Conectar ao banco de dados (ajuste as credenciais conforme necessário)
    $conn = new mysqli('localhost', 'root', '', 'seu_banco_de_dados');
    if ($conn->connect_error) {
        die('Falha na conexão: ' . $conn->connect_error);
    }

    if (isset($_POST['form_type']) && $_POST['form_type'] == 'register') {
        // Registrar novo usuário
        $stmt = $conn->prepare("INSERT INTO users (nome, nome_usuario, email, cpf, data_nascimento, sexo, endereco, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssss', $nome, $nomeUsuario, $email, $cpf, $dataNascimento, $sexo, $endereco, $senha);
        if ($stmt->execute()) {
            echo "Registro bem-sucedido!";
        } else {
            echo "Erro ao registrar: " . $stmt->error;
        }
        $stmt->close();
    } else {
        // Aqui você pode adicionar o código para processar login ou outras ações
    }

    $conn->close();
}
?>