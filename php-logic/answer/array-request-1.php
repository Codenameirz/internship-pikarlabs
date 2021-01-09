<?php

    $input = [
        [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
        [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
        [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
        ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php if(isset($_GET['id'])): ?>
        <?php foreach($input as $value): ?>
            <?php if($value['id'] == $_GET['id']):?>

                <h3>Profil siswa ID = <?= $value['id'] ?></h3>

                <li>ID : <?= $value['id'] ?></li>
                <li>Nama : <?= $value['nama'] ?></li>
                <li>Asal : <?= $value['asal'] ?></li>
                <br>
                <a href="array-request-1.php">| Kembali |</a>
                
            <?php endif;?>
        <?php endforeach;?>
    <?php else:?>

        <p>seluruh peserta magang</p>

            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Asal</th>
                    <th>Link</th>
                </tr>
                <?php foreach($input as $value):?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['asal'] ?></td>
                    <td><a href="array-request-1.php?id=<?= $value['id'] ?>">Profil</a></td>
                </tr>
                <?php endforeach; ?>
            </table>

    <?php endif;?>
    
</body>
</html>