<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>

    <title>Listagem de Produtos</title>
</head>
<body>
<div class="container" style="margin-top: 40px">
    <h3>Lista de Produtos</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM estoque";
                $busca = mysqli_query($conn, $sql);

                while($array = mysqli_fetch_array($busca)):
                     $id_estoque = $array['id_estoque'];
                     $nroProduto = $array['nroproduto'];
                     $noneProduto = $array['nomeproduto'];
                     $categoria = $array['categoria'];
                     $quantidade = $array['quantidade'];
                     $fornecedor = $array['fornecedor'];

            ?>
           <tr>
           <td><?= $nroProduto ?></td>
           <td><?= $noneProduto ?></td>
           <td><?= $categoria ?></td>
           <td><?= $quantidade ?></td>
           <td><?= $fornecedor ?></td>
           <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?=$id_estoque;?>" role="button">
           <i class="fas fa-edit"></i>&nbsp;Editar</a>
           <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?=$id_estoque;?>" role="button">
           <i class="fas fa-trash"></i>&nbsp;Excluir</a>
           </td>
          
            <?php  endwhile; ?>
        </tr>
    </table>
    <div style='text-align: right'>
        <a href='index.php' role='button' class="btn btn-primary btn-sm">Voltar</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
