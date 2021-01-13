<?php

    $input = 9;

    if($input % 2 == 0){
        echo "Angka harus ganjil";
    }
    else{
        echo("Segitiga A, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            // Mencetak segitiga ke kanan
            for($y = $x; $y >= 1; $y--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga B, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            // Mencetak segitiga ke kanan posisi terbalik
            for($y = $input; $y >= $x; $y--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga C, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            // Membuat jarak ke kanan dan posisi segitiga terbalik
            for($y = $x; $y >= 1; $y--){
                echo("&nbsp ");
            }
            // Mencetak segitiga ke kiri
            for($z = $x; $z <= $input; $z++){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga D, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            // Membuat jarak ke kanan
            for($y = $input; $y >= $x; $y--){
                echo("&nbsp ");
            }
            // Mencetak segitiga ke kiri
            for($z = $y; $z >= 0; $z--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga E, input = $input"),"<br>";
        // Mengatur pola agar mulai dari tengah posisi terbalik
        for($x = $input; $x > 0; $x--){
            // Memberi jarak 
            for($y = 1; $y <= ($input % 2); $y++){ 
                echo("&nbsp ");
            }
            //Mencetak pola segitiga ke kiri
            for($a = $input; $a > $x; $a--){
                echo("*");
            }
            //Untuk mencetak pola ke samping kanan / menduplikat ke kanan
            for($b = $input; $b > $x; $b--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga F, input = $input"),"<br>";
    }

    
    

?>