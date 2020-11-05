<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Contato Fullstack Flores</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        .formulario  {background-color: blue; color: white}
         </style>
              
</head>
<body>

    <h2> Contato </h2>
    <hr>
    
  <!-- Menu Principal INICIO -->

  <?php
    include ('menu.html');
?>

<br>
 <!-- Menu Principal FIM -->



<!-- Contato -->


<table border="0" width="100%" cellpadding="20" >
    <tr> 
        <td align="center" width="33%">
           <img src="../img/Contato/sac.JPG" width="auto" height="30px">  
           <h3> SAC  </h3> 
           <p>  Telefone: (11) 2222-2222 <p>
        </td>
        
        
        <td align="center" width="33%">
            <img src="../img/Contato/televendas.JPG" width="auto" height="30px"> 
           <h3> Televendas </h3> 
           <p>  Telefone: (11) 2222-2222 <p>

        </td>

        <td  align="center" width="33%">
            <img src="../img/Contato/whatsapp.JPG" width="auto" height="30px"> 
           <h3> Whatssapp </h3> 
           <p>  Telefone: (11) 9999-9999 <p>

        </td>

       </tr>



</table>

<h2> Entre em contato conosco pelo formulário abaixo:</h2>


<form class="formulario-contato">
    <div class="formulario-grupo">
    <label>Nome:</label>
    <input type="text"> </div>

    <div class="formulario-grupo">
        <label>Telefone:</label>
        <input type="number"> 
    </div>
        
    <div class="formulario-grupo">
        <label>Email:</label>
        <input type="text"> 
    </div>

    <div class="formulario-grupo">
        <label>Mensagem:</label>
        <textarea></textarea>
    </div>

    <div class= "formulario-grupo">
        <input type="submit">
    </div>

</form>


    <footer>  &copy; Recode Pro </footer>

</body>

<script src="scripts.js"></script>  

</html>
