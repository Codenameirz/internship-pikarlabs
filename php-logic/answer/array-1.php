<?php

    $input = [1, 3, 2, 9, 4];
    $angka = 3;

    for($hasil = 0; $hasil < count($input); $hasil++){
        // Setiap isi $input akan dikalikan dengan $angka
        echo($input[$hasil]*$angka);
        echo "<br>";
    }

?>