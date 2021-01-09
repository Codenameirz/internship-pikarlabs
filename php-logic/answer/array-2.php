<?php

    $input = [1, 3, 2, 9, 4];
    //Mengetahui banyak array
    $y = count($input);

    //Untuk membalik urutan array ($x--), -1 karena index dimulai dari 0
    for($x = ($y -1); $x >= 0; $x--){
        //Mencetak array
        echo($input[$x]),"<br>"; 
    }

?>