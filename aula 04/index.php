<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CASA DE APOSTA</title>
</head>

<body>
   <div id="borda">
   <h1> Jogo  Tigrinho </h1>

     <div id ="tigrinho"><img class="tigrinho" src="imagens/jogo-do-tigrinho-1716593543429_v2_450x450.png" alt="">
    </div> 

    <p>Escolha 6 numeros entre 1 e 60 e tente acertar os numeros sorteados.</p>
    <div id="centro">
    <br><br><br>
    <h2>FAÇA Sua Aposta:</h2>


    
   
    <form action="#" method="POST">
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="number" name="n3"> 

        <input type="number" name="n4">
        <input type="number" name="n5">
        <input type="number" name="n6">

        <input type="submit" value="apertar">
    </form>
     <br>
   

    <?php
    if ($_POST) {

        echo "<h2> Os Resultados Foram </h2>";

        $numero = array();
        $numeroUsuario = array();
        
        for ($i = 0; $i < 6; $i++) {
        
            $numero[$i] = rand(1, 60);
        }
        
        sort($numero);
        
        echo"<p>";
        for ($i = 0; $i < 6; $i++) {
            
            echo $numero[$i] . " ";
        }
        echo"</p>";
        
        $numeroUsuario[0] = $_POST['n1'];
        $numeroUsuario[1] = $_POST['n2'];
        $numeroUsuario[2] = $_POST['n3'];
        $numeroUsuario[3] = $_POST['n4'];
        $numeroUsuario[4] = $_POST['n5'];
        $numeroUsuario[5] = $_POST['n6'];
        
        echo "<br> ";
        
        echo"<p>";
        for ($i = 0; $i < 6; $i++) {
            echo $numeroUsuario[$i] . " ";
        }
        echo"</p>";
        
        
        $acertos = array_intersect($numero, $numeroUsuario);
        $quantidadeAcertos = count($acertos);
        
        
         echo "<br><p>" . $quantidadeAcertos . " Acertos </p><br>";
        
        switch($quantidadeAcertos){
        
            case 6:
                echo " <p>Parabens,Você gnahou na Mega Sena!</p> " ;
            break;
            case 5:
                echo "<p>Quase Lá,Você acertou uma quina!</p>";
            break;
            case 4:
                echo "<p>Legal Você fez uma Quadra!</p>";
            break;
        
            default:
                echo "<p>Não Foi dessa vez,tente novamente!</p>";
        
        }
        
        
        } 
    

    ?>
    </div>

   </div>
    
  
   
</body>

</html>