<?php

    $input = [
        [ 'id' => 122, 'nama' => 'rama' ],
        [ 'id' => 287, 'nama' => 'renaldy' ],
        [ 'id' => 423, 'nama' => 'fakhri' ],
    ];

    // Buat function untuk mencari objek
    function cariObject($object,$cari){
        // Variabel yang belum di set
        $index = null;
        //Agar $input bisa digunakan
        global $input;
            // $input sebagai $list dan $value adalah nilai dari $list
            foreach($input as $list => $value){
                //Jika $value berisi $object dan sama dengan $cari
                if($value[$object] == $cari){
                    // $index nilainya sama dengan $list
                    // $index yang belum diset nilainya menjadi sama dengan $list
                    $index = $list;
                }
            }
            // Jika berisi $index
            if(isset($index)){
                // maka tampilkan data yang ditemukan
                echo "cari siswa \"$object : $cari\" <br>";
                echo "index ke $index <br>";
                echo "id = ". $input[$index]['id'];
                echo ", nama = ". $input[$index]['nama'];
                echo "<br>";
            }
            // Jika tidak, maka
            else{
                //Tampilkan data tidak ditemukan
                echo "cari siswa \"$object : $cari\"<br>";
                echo "data tidak ditemukan";
                echo "<br>";
        }
    }
    
    //Panggil function
    cariObject('id','287');
    cariObject('nama', 'rahman');

?>