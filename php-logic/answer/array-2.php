<?php

    $input = [1, 3, 2, 9, 4];
    
    //Mengetahui banyak array
    $len = count($input);

    //Jika $index >= 0, maka decrementkan $index 
    //-1 pada $len karena index dimulai dari 0
    for($index = ($len -1); $index >= 0; $index--){
        //Echo hasilnya
        echo($input[$index]),"<br>"; 
    }

?>