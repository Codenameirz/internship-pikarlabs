<?php

    include_once "parsedown/Parsedown.php";

    function bacaMD($file){
        $contents = file_get_contents($file);
        $Parsedown = new Parsedown();
        echo $Parsedown->text($contents);
    }

?>