<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/php.png" type="image/x-icon">
    <title>Aula php</title>
</head>
<body>
    <?php
        //Introdução do site.
        echo "<h1>Código do Zero</h1>";
        echo "Nesse código, irei abordar todos os principios que aprendi no curso sobre php. Espero cumprir com o que me foi ensinado, logo vamos lá.";

        //Abordando o primeiro tópico do site.
        echo "<h2>Cálculo simples</h2>";
        echo "Irei fazer um conta simples com todas as operações. <br><br>";
        
        //Váriaveis (int e float).
        $num1 = 2;
        $num2 = 3;
        $num3 = 1.5;

        echo "Soma:<br>";
        echo "Os números $num1 e $num2, dará: ";
        echo $num1 + $num2;
        echo "<br><br>";

        echo "Subtração:<br>";
        echo "A subtratação de $num1 e $num3, dará: ";
        echo $num1 - $num3;
        echo "<br><br>";

        echo "Multiplicação:<br>";
        echo "A multiplicação de $num1 e $num2, dará: ";
        echo $num1 * $num2;
        echo "<br><br>";

        echo "Divisão:<br>";
        echo "A divisão de $num1 e $num3, dará: ";
        echo $num1 / $num3;
    
        //Introduzindo o tópico switch.
        echo "<h2>Switch</h2>";
        echo "Aqui irei abordar sobre o switch, que é mais útil quando possui apenas uma variavel. Com isso, pode-se determinar o que deve fazer em diversos casos<br><br>";
        echo "Exemplo: <br>";

        switch($num2){
            default:
                echo "Você precisa por um valor válido.<br>";
                break;

            case 3:
                echo "Código acessado." . "<br>";
                break;
            case 2:
                echo "Algo deu errado, tente denovo.<br>";
                break;
        }

    ?>
</body>
</html>