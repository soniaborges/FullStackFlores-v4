<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projetodbrecodeprosonia";

    //criando a conexao
    $conn = mysqli_connect($servername, $username, $password, $database );

    //verificando a conexao
    if(!$conn){
        die ("Conexão não efetuada pelo motivo:" .mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    
    <title> Produtos Fullstack Flores</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="scripts.js"></script>
    
        
</head>


<body>
    
  <h2> Nossos Produtos </h2>
  <hr>
    
    
    <!-- Menu Principal INICIO -->

    <?php
        include ('menu.html');
    ?>

    <br>

    <!-- Menu Principal FIM -->


    <!-- Categorias -->

    <div class="container-geral">

        <div class="container-categoria">
        <h3> Categorias </h3>
        <ul>
            <li class="categoria" onclick="mostrartodos()" > Todas (14) </li>
            <li class="categoria" onclick="mudarestado('Buquets')"> Buquet de Flores (4)  </li>
            <li class="categoria" onclick="mudarestado('Vasos')"> Flores no Vaso (3) </li>
            <li class="categoria" onclick="mudarestado('Orquideas')"> Orquídeas (4) </li> 
            <li class="categoria" onclick="mudarestado('Cestas')"> Cestas de Café (3)  </li>
        </ul> </div>

        <div class = "container-produtos">
            <?php

            $sql  = "select * from produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
            while($rows =  $result->fetch_assoc()){
            
            ?>

            <div class = "produtos " id= "<?php echo $rows ["categoria"];?>">
                <div class = "imagem "><img src = "<?php echo $rows ["imagem"];?>" width="120px" 
                onclick="exibir_detalhes_produto(this)"></div>
                <br>
                <div class = "descricao"><?php echo $rows ["descricao"]; ?></div>
                <hr>
                <div class = "precoinicial"> <strike> R$ <?php echo $rows ["preco"];?> </strike> </div>
                <div class = "preco"> R$ <?php echo $rows ["preco_final"];?> </div>           
            </div> 

            <?php

            }
            //
            } else {
            echo "Nenhum produto cadastrado";
            }
            ?>
        </div>

    </div>
    


    <div id="rodape">  
        <div class = "descricao"> &copy; Recode Pro </div>

        <div class = "formas_pagamento"> Formas de Pagamento </div>
        
        <div class = "formas_pagamento"> <img src="../img/forma de pagamento.jpg"> </div>
    </div>

 

</body>

</html>