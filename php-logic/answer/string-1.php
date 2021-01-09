<?php

    $input = "smkn 2 surabaya";
    
    //strlen untuk memperoleh panjang string
    $reverse = strlen($input); 

    // $x-- Untuk membalik / reverse string, -1 pada $reverse karena index dimulai dari 0
    for($x = ($reverse -1); $x >= 0; $x--){
        echo ($input[$x]);
    }
    

?>