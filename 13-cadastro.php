<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

<h1>Cadastro</h1>

<form method="post">

    Nome:
    <input type="text" name="nome">

    <br><br>

    Email:
    <input type="email" name="email">

    <br><br>

    Telefone:
    <input type="text" name="telefone">

    <br><br>

    Data de nascimento:
    <input type="date" name="nascimento">

    <br><br>

    Cidade:
    <input type="text" name="cidade">

    <br><br>

    Estado:
    <input type="text" name="estado">

    <br><br>

    Sexo:
    <select name="sexo">
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
        <option value="Outro">Outro</option>
    </select>

    <br><br>

    Curso:
    <select name="curso">
        <option value="Sistemas de Informação">
            Sistemas de Informação
        </option>

        <option value="Engenharia de Software">
            Engenharia de Software
        </option>

        <option value="Análise e Desenvolvimento de Sistemas">
            Análise e Desenvolvimento de Sistemas
        </option>
    </select>

    <br><br>

    Observações:
    <br>

    <textarea name="observacoes"></textarea>

    <br><br>

    <button type="submit">Cadastrar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $nascimento = $_POST["nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $sexo = $_POST["sexo"];
    $curso = $_POST["curso"];
    $observacoes = $_POST["observacoes"];

    echo "<h2>Cartão de Cadastro</h2>";

    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Telefone: $telefone<br>";
    echo "Data de nascimento: $nascimento<br>";
    echo "Cidade: $cidade<br>";
    echo "Estado: $estado<br>";
    echo "Sexo: $sexo<br>";
    echo "Curso: $curso<br>";
    echo "Observações: $observacoes<br>";

}

?>

</body>
</html>