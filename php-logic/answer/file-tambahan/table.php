<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Link</th>
    </tr>
    <?php if (count($list) > 0): ?>
        <?php foreach($list as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['asal'] ?></td>
            <td><a href="#">link</a></td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">data tidak ditemukan</td>
        </tr>
    <?php endif; ?>
</table>
