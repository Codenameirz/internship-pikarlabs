<?php

    function showProfile($input, $get){
        $index = null;

        foreach($input as $key => $value){
            if($value['id'] == $get){
                $index = $key;
            }
        }
        return $index;
    }

    function showTable($input){
        foreach($input as $data){
        echo "<tr>";
        echo "<td>".$data['id']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['asal']."</td>";
        echo "<td><a href=?id=".$data['id'].">Profil</a></td>";
        echo "<tr>";
        }
    }

    // function searchId($input, $id){
    //     $filter = [];

    //     if(empty(trim($id))){
    //         $id = "";
    //         showTable($input);
    //         die;
    //     }

    //     if(!empty($id)){
    //         echo"<p>Mencari siswa dengan ID \"".$id."\"</p>";
    //     }

    //     foreach($input as $key => $value){
    //         if(strpos($value['id'], $id) !== false){
    //             array_push($filter,$value);
    //         }
    //     }
        
    //     //Jika $filter tidak kosong, maka tampilkan tabel
    //     if(!empty($filter)){
    //         showTable($filter);
    //     }
    //     //Jika kosong tampilkan pesan data tidak ditemukan
    //     else{
    //         echo"Data tidak ditemukan";
    //     }
    // }

    function searchId($input, $id){
        $filter = [];

        if(empty(trim($id))){
            return $input;
        }

        foreach($input as $key => $value){
            if(strpos($value['id'], $id) !== false){
                array_push($filter,$value);
            }
        }
        
        return $filter;
    }

    

?>