
<table>
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Valor</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $chave => $registro): ?>
            <tr>
                <td><?php echo $registro["id"]; ?></td>
                <td><?php echo $registro["nome"]; ?></td>
                <td><?php echo $registro["descricao"]; ?></td>
                <td><?php echo $registro["valor"]; ?></td>
                <td><?php echo "<img src='".$registro["imagem"]."'>"; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>