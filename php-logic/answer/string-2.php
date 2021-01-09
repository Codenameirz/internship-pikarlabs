<?php

    $input = "renaldy";
    $penanda = "/";

    $input2 = "renaldy dan sahabat";
    $penanda2 = "/";

    $len = strlen($input);
    // Agar tidak ada notice
    $hasil = null;
    
    for($x = 0; $x <= $len -1; $x++){
        $hasil .= ($input[$x].$penanda);
    }
    echo chop($hasil,"/");

    echo "<br>";


    // Menghilangkan spasi pada string
    $delspasi = str_replace(' ', '', $input2);
    $len2 = strlen($delspasi);
    // Agar tidak ada notice
    $hasil2 = null;

    for($y = 0; $y <= $len2 -1; $y++){
        $hasil2 .= ($delspasi[$y].$penanda2);
    }
    echo chop($hasil2,"/");

?>