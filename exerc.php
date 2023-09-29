<?php
    //variaveis
    $numero = 5;
    $nome = "Bia";

    //le a variavel
    switch($numero) {

        //compara a variavel 
        case 4:
            echo "O número é igual a 4 <br>";
            break;
        
        //compara a variavel 
        case 5:
            echo "O número é igual a 5 <br>";
            break;

        //valor nulo
        default:
            echo "O número não corresponde aos valores <br>";
    }

    //le a variavel
    switch($nome) {

        //compara a variavel 
        case "Rosana":
            echo "O nome é Rosana";
            break;
        
        //compara a variavel 
        case "Isis":
            echo "O nome é Isis";
            break;

        //valor nulo
        default:
            echo "O nome não foi encontrado";
            
    }

?>