<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Nossas Lojas</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        .nlojas { font-family: Arial, Helvetica, sans-serif ; font-size: 25px; color: purple;}
        .endereco {font-size: 15px;}
      
    </style>
</head>

<body>

    <h2> Nossas Lojas </h2>
    <hr> 
    
  <!-- Menu Principal INICIO  -->

  <?php
    include ('menu.html');
    ?>

    <br>

    <!-- Lojas -->



    <table border="0" width="100%" cellpadding="20" >
            <tr> 
            <td width="33%">
                <h3 class="nlojas"> São Paulo </h3> 
                <p class="endereço">  Rua das Amélias, 35 </p>
                <p class="endereço">  Jargim Aeroporto </p>
                <p class="endereço">  Telefone: (11) 5555-5555 <p>

            </td>
            
            
            <td width="33%">
                <h3 class="nlojas"> Campinas </h3> 
                <p class="endereço">  Avenida Rio Grande, 1875 </p>
                <p class="endereco">   Centro - Campinas </p>
                <p class="endereco">  Telefone: (19) 7777-7777 <p>
            </td>

            <td width="33%">
                <h3 class="nlojas"> São Caetano do Sul </h3> 
                <p class= "endereco">  Av Goiás, 1965 </p>
                <p class= "endereco" >  Bairro Jardim </p>
                <p class= "endereco" >  Telefone: (11) 4444-4444 <p>
            </td>

            </tr>

        </th>

    </table>


    <br><br><br><br><br><br><br>

    <div id="rodape">  
        <div class = "descricao"> &copy; Recode Pro </div>

        <div class = "formas_pagamento"> Formas de Pagamento </div>
        
        <div class = "formas_pagamento"> <img src="../img/forma de pagamento.jpg"> </div>
    </div>

    <script src="scripts.js"></script>  

</body>

</html>
