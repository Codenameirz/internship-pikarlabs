<?php

    $input = [
        [ 'id' => 122, 'nama' => 'rama' ],
        [ 'id' => 287, 'nama' => 'renaldy' ],
        [ 'id' => 423, 'nama' => 'fakhri' ],
    ];

    // Function untuk mencari siswa
    function cariSiswa($find){
        $index = null;
        // agar $input bisa digunakan
        global $input;
        //$input sebagai $key dan $value adalah nilai dari $key
        foreach($input as $key => $value){
            // Jika 'id' dalam $value sama dengan $find
            if($value['id'] == $find){
                $index = $key;
            }
        }
        //Jika berisi $index
        if(isset($index)){
            //maka tampilkan
            echo "cari siswa \"$find\" <br>";
            echo "index ke $index <br>";
            echo "id = ". $input[$index]['id'];
            echo ", nama = ". $input[$index]['nama'];
            echo "<br>";
        }
        //Jika tidak berisi $index
        else{
            // tampilkan
            echo "cari siswa \"$find\"","<br>";
            echo "data tidak ditemukan","<br>";
        }
    }
    
    //Memanggil Function
    cariSiswa(423);
    cariSiswa('ivan');


?>