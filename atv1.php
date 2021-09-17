<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 
    * <instituição: União Metropolitana de Educação e Cultura(UNIME)>
    * <curso: Bacharelado em sistemas da informação>
    * <disciplina: programação web II>
    * <Professor: Pablo Ricardo Roxo Silva>
    * <Aluno: Samorano Jesus da Silva>
     -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV Bronca</title>
</head>
<body>
    
<form> 
    Nota 01: <input type="number" name="form1" id=""><br>
    Nota 02: <input type="number" name="form2" id=""><br>
    Nota 03: <input type="number" name="form3" id=""><br>
    <input type="submit" value="Calcule"><br>
    <input type="hidden" name="notice">
</form>

<?php

if (isset($_GET['notice'])) {
    
    if(is_numeric( ($_GET['form1'])) && is_numeric(($_GET['form2'])) && is_numeric(($_GET['form3'])) ) {
        $nota=($_GET['form1']+$_GET['form2']+$_GET['form3'])/3;
       echo 'Sua media foi: '.$nota;
        if ($nota>=7) {
            echo '<br> Você está Aprovado! Parabéns!!';
        }else{
            echo '<br> Você está Reprovado! ';
        }
        if ($nota>=4 && $nota<7) {
            echo '<br>Você tem direito a Recuperação! ';
        }
        if ($nota<4) {
            echo '<br>Você Não tem direito a Recuperação! ';
        }


    }else{
        echo 'Você não preencheu todos os campos!<br> Tente Novamente!'; 
    }
    
}else{
    echo 'Preencha os 3 campos Nota!';

}

?>

</body>
</html>