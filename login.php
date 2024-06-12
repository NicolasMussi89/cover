<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #333; /* Fundo escuro */
            color: #fff; /* Texto branco */
        }

        .container {
            background-color: #444; /* Cor de fundo do contêiner */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #555; /* Cor de fundo dos campos de entrada */
            color: #fff; /* Texto branco */
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px; /* Tamanho do emoji aumentado */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="Login.php" method="POST">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" value="Login">
    </form>
</div>

<footer>🦇</footer>

</body>
</html>
