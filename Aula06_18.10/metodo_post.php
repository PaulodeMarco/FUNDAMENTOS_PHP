<?php
#USANDO O METODO GET
$login = null;
$senha = null;
if (isset($_POST["login"])){
    echo $_POST["login"]; 
}
if (isset($_POST["senha"])){
    echo $_POST["senha"]; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="metodo_post.php" method="post">
        <input type="text" name="nome" placeholder="login">
        <br>
        <input type="password" name="sobrenome" placeholder="senha">

        <input type="submit" value="RODAR">
    </form>
</body>
</html>