<?php

    $input = 5;

    if($input % 2 == 0){
        echo "Angka harus ganjil";
    }
    else{
        echo("Segitiga A, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            for($y = $x; $y >= 1; $y--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga B, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            for($y = $input; $y >= $x; $y--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga C, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            for($y = $input; $y >= $x; $y--){
                echo(" &nbsp");
            }
            for($z = 1; $z <= $x; $z++){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga D, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            for($y = 1; $y <= $x; $y++){
                echo("&nbsp ");
            }
            for($z = $input; $z >= $x; $z--){
                echo("*");
            }
            echo "<br>";
        }

        echo("Segitiga E, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            for($y = 1; $y <= $x; $y++){
                echo "&nbsp ";
            }
            for($a = $input+1; $a > $x+($input/2); $a--){
                echo "*";
            }
            for($b = $input; $b > $a; $b--){
                echo "*";
            }
            echo "<br>";
        }

        echo("Segitiga F, input = $input"),"<br>";
        for($x = $input; $x-($input/2) > 0; $x--){
            for($y = 1; $y <= $x; $y++){
                echo "&nbsp ";
            }
            for($a = $input; $a > $x; $a--){
                echo "*";
            }
            for($b = $input+1; $b > $a; $b--){
                echo "*";
            }
            echo "<br>";
        }

        echo("Segitiga G, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            if($x <= $input / 2){
                for($y = 1; $y <= $x; $y++){
                    echo "*";
                }
            }
            if($x >= $input / 2){
                for($y = $input; $y >= $x; $y--){
                    echo "*";
                }
            }
            if($x != 1 && $x != $input){
                echo "*";
            }
            echo "<br>";
        }
        

        echo("Segitiga H, input = $input"),"<br>";
        for($x = 1; $x <= $input; $x++){
            if($x <= $input / 2){
                for($y = $input; $y >= $x; $y--){
                    echo " &nbsp";
                }
                if($x != 1){
                    echo "*";
                }
                else{
                    echo " &nbsp";
                }
                for($z = 1; $z <= $x; $z++){
                    echo "*";
                }
            }
            if($x >= $input / 2){    
                for($y = 1; $y <= $x; $y++){
                    echo " &nbsp";
                }
                if($x != $input){
                    echo "*";
                }
                else{
                    echo " &nbsp";
                }
                for($z = $input; $z >= $x; $z--){
                    echo "*";
                }
            }
            echo"<br>";
        }      
    }

?>