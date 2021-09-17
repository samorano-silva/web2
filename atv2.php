<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv2</title>
    <!-- 
    * <instituição: União Metropolitana de Educação e Cultura(UNIME)>
    * <curso: Bacharelado em sistemas da informação>
    * <disciplina: programação web II>
    * <Professor: Pablo Ricardo Roxo Silva>
    * <Aluno: Samorano Jesus da Silva>
     -->
</head>
<body>
    
<form> 
    Informe o numero do mês:<input type="number" name="n1" id="">
    Informe o nome do mês desejado: <input type="string" name="n2" id="">
    <input type="submit" value="Verificar"><br>
    <input type="hidden" name="notice">
</form>
<?php

    $calend = [
    1 => "janeiro",
    2 => "fevereiro",
    3 => "março",
    4 => "abril",
    5 => "maio",
    6 => "junho",
    7 => "julho",
    8 => "agosto",
    9 => "setembro",
    10 => "outubro",
    11 => "novembro",
    12 => "dezembro",
    ];

    
        if (isset($_GET['notice'])) {
            $num = $_GET['n1'];
            $mes = strtolower($_GET['n2']);
            if($num>=1 && $num<=12){
                if($calend[$num]==$mes) {
                    echo' Numero e Mês Correto ';
                }
                else{
                    echo' Numero e Mês Errado ';
                }
            
            }else{
                echo 'Você não digitou um mes valido!<br> Tente Novamente!'; 
            }
        }else{
            echo 'Preencha os campos Acima!';
        }   


?>

</body>
</html>