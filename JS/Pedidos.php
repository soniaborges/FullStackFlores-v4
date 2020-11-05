<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Pedidos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        .nlojas { font-family: Arial, Helvetica, sans-serif ; font-size: 25px; color: purple;}
        .endereco {font-size: 15px;}
      
    </style>

</head>

<body>

    <h2> Cadastrar Pedidos </h2>
    <hr> 
    
     <!-- Menu Principal INICIO  -->

    <?php
    include ('menu.html');
    ?>

    <br>
    
        
    <h3> Cadastrar Pedidos </h3>

    <form method="POST" action = cadastrar_pedidos.php>

         <div class="nome_cliente">
            <label>Nome Completo:</label>
            <input type="text" name="nome_cliente"> 
        </div> <br>

        <div class="endereco">
            <label>Endereço:</label>
            <input type="text" name="endereco"> 
        </div><br>
                
        <div class="telefone">
            <label>Telefone:</label>
            <input type= "number" name="telefone">  
        </div><br>

        <div class="nome_produto">
            <label>Nome do Produto:</label>
            <input type="text" name="nome_produto"> 
        </div><br>

        <div class="valor_unitario">
            <label>Vamor Unitário: R$</label>
            <input type="number" name="valor_unitario"> 
        </div><br>

        <div class="quantidade">
            <label>Quantidade:</label>
            <input type="number" name="quantidade"> 
        </div><br>

        <div class="valor_total">
            <label>Valor Total: R$</label>
            <input type="number" name="valor_total"> 
        </div><br>

        <div class= "enviar">
            <button type="submit" name="enviar">Enviar</button>
        </div>

    </form>




    <div id="rodape">  
        <div class = "descricao"> &copy; Recode Pro </div>

        <div class = "formas_pagamento"> Formas de Pagamento </div>
        
        <div class = "formas_pagamento"> <img src="../img/forma de pagamento.jpg"> </div>
    </div>



  

</body>

</html>