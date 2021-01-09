<?php

    $input = 5;

    echo("Segitiga A, input = 5"),"<br>";
    for($x = 1; $x <= $input; $x++){
        // Mencetak segitiga ke kanan
        for($y = $x; $y >= 1; $y--){
            echo("*");
        }
        echo "<br>";
    }

    echo("Segitiga B, input = 5"),"<br>";
    for($x = 1; $x <= $input; $x++){
        // Mencetak segitiga ke kanan posisi terbalik
        for($y = $input; $y >= $x; $y--){
            echo("*");
        }
        echo "<br>";
    }

    echo("Segitiga C, input = 5"),"<br>";
    for($x = 1; $x <= $input; $x++){
        // Membuat jarak ke kanan dan posisi segitiga terbalik
        for($y = $x; $y >= 1; $y--){
            echo("&nbsp ");
        }
        // Mencetak segitiga ke kiri
        for($z = $x; $z <= 5; $z++){
            echo("*");
        }
        echo "<br>";
    }

    echo("Segitiga D, input = 5"),"<br>";
    for($x = 1; $x <= $input; $x++){
        // Membuat jarak ke kanan
        for($y = 5; $y >= $x; $y--){
            echo("&nbsp ");
        }
        // Mencetak segitiga ke kiri
        for($z = $y; $z >= 0; $z--){
            echo("*");
        }
        echo "<br>";
    }

    echo("Segitiga E, input = 5"),"<br>";
    // Mengatur pola agar mulai dari tengah posisi terbalik
    for($x = 1; $x <= 3; $x++){
        // Memberi jarak 
        for($y = $x; $y >= 1; $y--){ 
            echo("&nbsp ");
        }
        //Mencetak pola segitiga ke kiri
        for($a = $x; $a <= 3; $a++){
            echo("*");
        }
        //Untuk mencetak pola ke samping kanan / menduplikat ke kanan
        for($b = 3; $b > $x; $b--){
            echo("*");
        }
        echo "<br>";
    }

    echo("Segitiga F, input = 5"),"<br>";
    // Mengatur pola agar mulai dari tengah
    for($x = 3; $x > 0; $x--){
        // Memberi jarak
        for($y = 1; $y <= $x; $y++){
            echo("&nbsp ");
        }
        //Mencetak pola segitiga ke kiri
        for($a = 4; $a > $x; $a--){
            echo ("*");
        }
        //Untuk mencetak pola ke samping kanan / menduplikat ke kanan
        for($b = $x; $b < 3; $b++){
            echo("*");
        }
        echo "<br>";
    }
    

?>