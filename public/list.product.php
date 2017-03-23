<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Desc</td>
    </tr>
    <?php foreach ($list as $product): ?>
    <tr>
        <td><?=$product['id']?></td>
        <td><?=$product['name']?></td>
        <td><?=$product['desc']?></td>
    </tr>
    <?php endforeach; ?>
</table>

