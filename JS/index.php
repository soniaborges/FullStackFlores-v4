<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <title> Fullstack Flores</title>
    <link rel="stylesheet" href="../css/estilo.css">

    <script>
        function carregar_saudacao() {
            data = new date ();
            hora = data.gethours();

            if (hora<12)
            {
            document.getelementbyid("mensagem_abertura").innerhtml = "Bom Dia";
            }
            else if (hora <18)
            {
            document.getelementbyid("mensagem_abertura").innerhtml = "Boa Tarde";
            }
            else
            {
            document.getelementbyid("mensagem_abertura").innerhtml = "Boa Noite";
            }
        }
    </script>
  
</head>
<body onload = " carregar_saudacao() ">
    
 <!-- Menu Principal INICIO -->


<?php
    include ('menu.html');
?>

<br>

<h3> Seja bem Vindo (a)! </h3>

    <h4> Aqui cliente fiel <i> tem desconto! </i> </h4> 
    
    <hr>        
  

<!-- Menu Principal FIM -->

<center>

       <a href="../js/Nossos produtos.php"> <img src="../img/Contato/cupom dia secretaria.JPG" 
         width="auto" height="350px"> </a>

</center>
    
  
<div id="rodape">  
    <div class = "descricao"> &copy; Recode Pro </div>

    <div class = "formas_pagamento"> Formas de Pagamento </div>
    
    <div class = "formas_pagamento"> <img src="../img/forma de pagamento.jpg"> </div>
</div>

<script src="scripts.js"></script>  

</body>


