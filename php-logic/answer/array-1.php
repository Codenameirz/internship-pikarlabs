<?php

    $input = [1, 3, 2, 9, 4];
    $angka = 3;

    //mengetahui banyak array
    $len = count($input);

    // Jika $hasil lebih kecil dari $len, $hasil di increment
    for($hasil = 0; $hasil < $len; $hasil++){
        // Setiap isi $input akan dikalikan dengan $angka
        echo($input[$hasil]*$angka);
        echo "<br>";
    }

?>