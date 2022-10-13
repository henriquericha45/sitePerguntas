<html>
<head>
    <title>Alex Takii</title>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body style="text-align: center;">

    <h2> Trabalho Alex Takii </h2>

    <form action="index.php" method="post">
        <div class="pergunta">
            <label> 1. O alex é ruim no CS? </label><br>
            <input type="radio" name="resposta1" value="r1"> Sim
            <input type="radio" name="resposta1" value="r2"> Não
            <input type="radio" name="resposta1" value="r3"> Talvez
            <input type="radio" name="resposta1" value="r4"> Nunca
            <input type="radio" name="resposta1" value="r5"> Sempre
        </div>
        <div class="pergunta">
            <label> 2. O alex é o pior nor CS? </label><br>
            <input type="radio" name="resposta2" value="r1"> Sim
            <input type="radio" name="resposta2" value="r2"> Não
            <input type="radio" name="resposta2" value="r3"> Talvez
            <input type="radio" name="resposta2" value="r4"> Nunca
            <input type="radio" name="resposta2" value="r5"> Sempre
        </div>
        <div class="pergunta">
            <label> 3. O alex fica sempre em ultimo no CS? </label><br>
            <input type="radio" name="resposta3" value="r1"> Sim
            <input type="radio" name="resposta3" value="r2"> Não
            <input type="radio" name="resposta3" value="r3"> Talvez
            <input type="radio" name="resposta3" value="r4"> Nunca
            <input type="radio" name="resposta3" value="r5"> Sempre
        </div>
        <input class="teste" type="submit" value="Enviar">
    </form>

<?php
    #print_r($_POST);

    $respostasCertas = array("r5","r1","r1");

    #print_r($respostasCertas);

    # conta quantas respostas correspondem a certas
    $cont = 0;
    if(count($_POST) == count($respostasCertas)){
        for($i = 0; $i < count($respostasCertas); $i++){
            if($respostasCertas[$i] == $_POST["resposta".($i+1)]){
                $cont++;
            }
        }
    } else {
        echo "<h3 style='color: red;'>Falta respostas para serem enviadas!</h3>";
    }

    /*
    foreach($_POST as $key => $value){
        print_r($value);
        echo "<hr>";
        print_r($respostasCertas[$cont]);
        echo "<hr>";
        print_r($cont);
        if($value == $respostasCertas[$cont]){
            $cont++;
        }
    }
    */
    # changes the color of the text
    if($cont == 0){
        echo "<h1 style='color: red;'>". $cont . "/" . count($respostasCertas) ."</h1>";
    }else if($cont >= 1 && $cont <= 2){
        echo "<h1 style='color: orange;'>" . $cont . "/" . count($respostasCertas) ."</h1>";
    }else if($cont == 3){
        echo "<h1 style='color: green;'>". $cont . "/" . count($respostasCertas) ."</h1>";
    }
    ?>
</body>
</html>