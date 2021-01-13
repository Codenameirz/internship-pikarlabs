<?php

    $input = [1, 3, 2, 9, 4];
    $cari = 2;

        // Variabel yang belum di set
        $index = null;
        //$input sebagai $key dan $value adalah nilai dari $key
        foreach($input as $key => $value){
            // Jika isi $value sama dengan $find
            if($value == $cari){
                // $index yang belum diset nilainya menjadi sama dengan $key
                $index = $key;
            }
        }
        // Jika berisi $index,
        if(isset($index)){
            // maka akan menampilkan
            echo "index ke $index";
        }
        // Jika tidak berisi $index,
        else{
            // tampilkan
            echo "data tidak ditemukan";
        }
    

?>