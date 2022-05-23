<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>

<fieldset>
        <legend>Cadastro de Produtos</legend>

        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome_produto">Nome Do Produto</label>
            <input id="nome_produto" name="nome_produto" value="<?= $model->nome_produto ?>" type="text" />

            <label for="marca_produto">Marca do Produto</label>
            <input id="marca_produto" name="marca_produto" value="<?= $model->marca_produto ?>" type="text" />

            <label for="cod_barras">Código de Barras</label>
            <input id="cod_barras" name="cod_barras" value="<?= $model->cod_barras ?>" type="number" />

            <label for="data_valid">Data de Validade:</label>
            <input id="data_valid" value="<?= $model->data_valid ?>" name="data_valid" type="date" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

</body>