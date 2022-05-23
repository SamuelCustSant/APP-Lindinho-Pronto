<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th>Marca do Produto</th>
            <th>Código de Barras</th>
            <th>Data de Validade</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/produto/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/produto/form?id=<?= $item->id ?>"><?= $item->nome_produto ?></a>
            </td>

            <td><?= $item->cod_barras ?></td>
            <td><?= $item->data_valid ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Não encontramos nenhum registro</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>