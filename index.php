<?php
    $questoes = array(
        '
        <form method="post">
            <label> O alex é ruim no CS? </label><br>
            <input type="radio" name="resposta1" value="r1"> Sim
            <input type="radio" name="resposta1" value="r2"> Não
            <input type="radio" name="resposta1" value="r3"> Talvez
            <input type="radio" name="resposta1" value="r4"> Nunca
            <input type="radio" name="resposta1" value="r5"> Sempre <br>
            <input type="submit" value="Enviar">
        </form>
        '
        ,
        '
        <form method="post">
            <label> O alex é o pior nor CS? </label><br>
            <input type="radio" name="resposta2" value="r1"> Sim
            <input type="radio" name="resposta2" value="r2"> Não
            <input type="radio" name="resposta2" value="r3"> Talvez
            <input type="radio" name="resposta2" value="r4"> Nunca
            <input type="radio" name="resposta2" value="r5"> Sempre <br>
            <input type="submit" value="Enviar">
        </form>
        '
        ,
        '
        <form method="post">
            <label> O alex fica sempre em ultimo no CS? </label><br>
            <input type="radio" name="resposta2" value="r1"> Sim
            <input type="radio" name="resposta2" value="r2"> Não
            <input type="radio" name="resposta2" value="r3"> Talvez
            <input type="radio" name="resposta2" value="r4"> Nunca
            <input type="radio" name="resposta2" value="r5"> Sempre <br>
            <input type="submit" value="Enviar">
        </form>
        '
    );
?>

<html>
<head>
    <title>Alex Takii</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body style="text-align: center;">

    <h2> Trabalho Alex Takii </h2>

    <form method="get">Questão: 
        <input type="submit" name="questao" value="1">
        <input type="submit" name="questao" value="2">
        <input type="submit" name="questao" value="3">
    </form>

    <?php
        $teste = 0;
        

        # funcao que da check em algum dos valores do input radio

        if ($teste == 0) {
            # muda o input para checked
            $questoes[0] = str_replace('value="r1"', 'value="r1" checked', $questoes[0]);
            $questoes[1] = str_replace('value="nao"', 'value="nao" checked', $questoes[1]);
            $questoes[2] = str_replace('value="sim"', 'value="sim" checked', $questoes[2]);
        }
        

        if(!isset($_GET['questao'])) {
            echo $questoes[0];
        } else {
            echo $questoes[$_GET['questao']-1];
        }
        
        if(!isset($_POST['resposta1'])) {
            echo "Nenhuma resposta";
        } else {
            echo $_POST['resposta1'];
            # inclui um valor na lista de respostas
            if(isset($_POST['resposta1'])) {
                $respostas[] = $_POST['resposta1'];
            }
            if(isset($_POST['resposta2'])) {
                $respostas[] = $_POST['resposta2'];
            }
            if(isset($_POST['resposta3'])) {
                $respostas[] = $_POST['resposta3'];
            }
            # printa as respostas
            print_r($respostas);

        }

    ?>

</body>
</html>