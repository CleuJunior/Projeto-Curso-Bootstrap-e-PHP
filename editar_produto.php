<?php
include 'conexao.php';

$id = $_GET['id'];

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário De Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
<div class="container" id="tamanhoContainer">
    <h4>Selecione um Produto</h4>
    <form id="margem" method="POST" action="atualizar_produto.php">
        <?php
        $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
        $buscar = mysqli_query($conn, $sql);
        while ($array = mysqli_fetch_array($buscar)):
            $id_estoque = $array['id_estoque'];
            $nroProduto = $array['nroproduto'];
            $noneProduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];
        ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Nro Produto</label>
            <input type="number" class="form-control" name="nroProduto" value="<?= $nroProduto; ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?= $id; ?>" style="display: none">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nome do Produto</label>
            <input type="text" class="form-control" name="nomeProduto" value="<?= $noneProduto; ?>">
        </div>
        <div class="form-group">
            <label>Categorias</label>
            <select class="form-control" name="categoria">
                <option>Hardware</option>
                <option>Periféricos</option>
                <option>Celulares</option>
                <option>Softwares</option>
            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?= $quantidade; ?>">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" value="<?= $fornecedor; ?>">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>
            <div id="direita">
                <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
            </div>
            <?php endwhile; ?>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

