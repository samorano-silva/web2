<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv3</title>
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
    Nota 01: <input type="number" name="n1" id=""><br>
    Nota 02: <input type="number" name="n2" id=""><br>
    <input type="submit" value="Calcule"><br>
    <input type="hidden" name="notice">
</form>
<?php

if (isset($_GET['notice'])) {
    
    if(is_numeric($_GET['n1']) && is_numeric($_GET['n2'])){
        $var1=$_GET['n1'];
        $var2=$_GET['n2'];

        for ($i=$var2; $i<=$var1 ; $i++) { 
            if ($i% $var2==0) {
                echo $i;
            }else{echo 'O numeral 0 não é valido para este calculo';}
            
        }
    }else{echo'Preencha os campos com numeros naturais';}
    
}else{
    echo 'Preencha os 2 campos Nota!';

}

?>
</body>
</html>