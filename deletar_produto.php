<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM estoque WHERE id_estoque = $id";
$deletar = mysqli_query($conn, $sql);

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 400px; text-align: center;">
    <h3>Excluido com Sucesso</h3>
    <div style="margin-top: 10px;">
        <a href="listar_protudos.php" class="btn btn-sm btn-warning">Voltar</a>
    </div>

</div>
