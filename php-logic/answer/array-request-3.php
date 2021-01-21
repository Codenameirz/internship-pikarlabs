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
    <title>Array request 3</title>
</head>
<body>

    <form action="" method="post">
    
        <input type="text" name="cari-id" placeholder="Masukkan ID">
        <button type="submit" name="cari">Cari</button>
        <button type="submit" name="reset">Reset</button>
        <!-- Reset input dan mengembalikan ke awal -->
        <?php if(isset($_POST["reset"])):?>
            <?php header("location: array-request-3.php"); ?>
        <?php endif;?>

    </form>
    <?php 
        // // 
        // $search = isset($_POST['cari-id']) ? $_POST['cari-id'] : '';
        // //
        // if (isset($_POST['cari-id'])) {
        //     $search = $_POST['cari-id'];
        // } else {
        //     $search = '';
        // }
        // 
        $search = $_POST['cari-id'] ?? '';
        $list = searchId($input, $search);
    ?>
    <?php include "file-tambahan/table.php" ?>


</body>
</html>