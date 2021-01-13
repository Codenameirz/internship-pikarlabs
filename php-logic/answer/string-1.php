<?php

    $input = "smkn 2 surabaya";
    
    //strlen untuk memperoleh panjang string $input
    $len = strlen($input); 

    // $reverse--(Decrement) Untuk membalik / reverse string, -1 pada $len karena index dimulai dari 0
    for($reverse = ($len -1); $reverse >= 0; $reverse--){
        echo ($input[$reverse]);
    }
    

?>