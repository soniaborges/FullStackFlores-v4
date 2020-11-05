
<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "projetodbrecodeprosonia";

    //criando a   conexao
    $connect = mysqli_connect($servername, $username, $password, $database );  

    //verificando a conexao 
    if(!$connect){
    echo "Conexão não efetuada pelo motivo:" .mysqli_connect_error();
    }

    if(isset($_POST['enviar'])){
        $nome_cliente = $_POST['nome_cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_produto = $_POST['nome_produto'];
        $valor_unitario = $_POST['valor_unitario'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];
  
        $sql = "INSERT INTO pedidos VALUES (null, '$nome_cliente', '$endereco', 
        '$telefone', '$nome_produto', '$valor_unitario', '$quantidade', '$valor_total')";
        mysqli_query($connect, $sql);
    }

?>