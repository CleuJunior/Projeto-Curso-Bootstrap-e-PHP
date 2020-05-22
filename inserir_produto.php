<?php

include 'conexao.php';

$nroProduto = $_POST['nroProduto'];
$nProduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque` (`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
 ($nroProduto, '$nProduto', '$categoria', $quantidade, '$fornecedor')";

$inserir = mysqli_query($conn, $sql);

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="./styles.css">

<div class="container" style="width: 500px; margin-top: 20px; text-align: center;">
    <h4 id="sucesso">Produto Adicionado com Sucesso</h4>
    <div style="padding-top: 20px;">
          <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item</a>
   </div>

</div>
