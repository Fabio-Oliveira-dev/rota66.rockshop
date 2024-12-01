<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/app.css">
    <title>Listagem Produtos</title>
</head>
<body>
    <!--http://laravel.com/docs/views-->
    <div class="container">
        <h1>Listagem de Produtos</h1>
        <table class="table">
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->quantidade ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>