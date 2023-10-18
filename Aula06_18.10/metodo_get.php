<?php
#USANDO O METODO GET
$login = null;
$senha = null;
if (isset($GET["login"])){
    echo $_GET["login"]; 
    $login = $_GET["login"];
}
if (isset($GET["senha"])){
    echo $_GET["senha"]; 
    $senha = $_GET["senha"];
}

if ($login = "admin" && $senha == "123"){
    echo("BEM VINDO ADIMIN");
    //echo("<script>window.alert('BEM VINDO ADMIN');</script>")
} 
else {
    echo("OLÁ QUALQUER USUARIO") ;
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
    <form action="metodo_get.php" method="get">
        <input type="text" name="nome" placeholder="login">
        <br>
        <input type="password" name="sobrenome" placeholder="senha">

        <input type="submit" value="RODAR">
    </form>
</body>
</html>