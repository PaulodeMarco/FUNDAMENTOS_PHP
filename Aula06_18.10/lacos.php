<?php

#LAÇO DE REPETICÃO (WHILE)
$numero = 0;

#ENQUNTO "$NUMERO" FOR MENOR QUE 10
while ($numero < 10){
    #MOSTRE "NUMERO" + 1, POREM COM ESPAÇO (" ") ENTRE OS NUMEROS 
    echo ($numero++ ." ");
}

#QUEBRA DE LINHA PARA MOSTRAR O CÓDIGO LINHA POR LINHA DO SITE
echo"<br>";

//SWITCH
$variavel = "Mulher";
switch ($variavel){
    case "homem":
        echo"Bem vindo ao exercito";
        break;
        case "Homem":
            echo"Bem vindo ao exercito";
            break;
            case "Mulher":
                echo"MULHER NÃO É POSSIVEL CANDITATAR-SE AO ALSTAMENTO OBRIGATÓRIO";
                break;
                default:
                    echo"NÃO É POSSIVEL PASSAR VAZIO OU FOI ESCRITO MULHER NA OPÇÃO";
}

echo("<br>");
echo("<br>");
echo("<br>");

//DO WHILE
$variavel1 = 4;
do{
    echo $variavel1++;
} while ($variavel1 <= 10);

echo("<br>");
echo("<br>");
echo("<br>");
for($variavel1 = 0; $variavel1 <= 10; $variavel1++){
    echo $variavel1;
}





?>