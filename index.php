<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>

        <?php
        include 'css/conexao.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o usuário: " . $conn->error;
            }
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="username">Nome de Usuário:</label>
            <input type="text" name="username" required><br>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required><br>

            <label for="password">Senha:</label>
            <input type="password" name="password" required><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <?php
    $conn->close();
    ?>
</body>
</html>
