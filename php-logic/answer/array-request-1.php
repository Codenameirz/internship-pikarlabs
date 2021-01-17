<?php

    $input = [
        [ 'id' => 122, 'nama' => 'rama', 'asal' => 'surabaya' ],
        [ 'id' => 227, 'nama' => 'renaldy', 'asal' => 'surabaya' ],
        [ 'id' => 423, 'nama' => 'fakhri', 'asal' => 'surabaya' ],
    ];

    include "file-tambahan/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php if(!isset($_GET['id'])): ?>

        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Asal</th>
                    <th>Link</th>
                </tr>

                <?php showTable($input);?>

        </table>
                
    <?php else:?>

        <?php $index = showProfile($input, $_GET['id']); ?>
        <?php if(isset($index)):?>
            <?php include 'file-tambahan/profile.php' ?>
        <?php endif;?>

    <?php endif;?>
    
</body>
</html>