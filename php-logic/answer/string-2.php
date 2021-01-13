<?php

    $input = "renaldy";
    $penanda = "/";

    $input2 = "renaldy dan sahabat";
    $penanda2 = "/";

    //strlen untuk memperoleh panjang string $input
    $len = strlen($input);
    // Variabel yg belum di set, agar tidak ada notice
    $hasil = null;
    
    // jika $sisipan <= $len -1, maka 
    for($sisipan = 0; $sisipan <= $len -1; $sisipan++){
        $hasil .= ($input[$sisipan].$penanda);
    }
    // Menghilangkan "/" dari $hasil, dari kanan 
    echo chop($hasil,"/");

    echo "<br>";


    // Menghilangkan spasi pada string
    $delspace = str_replace(' ', '', $input2);
    $len2 = strlen($delspace);
    // Agar tidak ada notice
    $hasil2 = null;

    for($sisipan = 0; $sisipan <= $len2 -1; $sisipan++){
        $hasil2 .= ($delspace[$sisipan].$penanda2);
    }
    echo chop($hasil2,"/");

?>