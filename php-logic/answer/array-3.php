<?php

    $input = [1, 3, 2, 9, 4];
    $cari = 2;

    //$input sebagai $key dan $value adalah nilai dari $key
    foreach($input as $key => $value){
        // Jika isi $value sama dengan $cari
        if($cari == $value){
            // Cetak $key
            echo("index ke $key");
        }
    }
    

?>