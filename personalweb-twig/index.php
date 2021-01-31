<?php

  include_once "main.php";
  include "components/data.php";

  echo $twig->render('index.twig', [
    'index' => $index,
    'footer' => $footer,
    'menuNav' => $menuNav,
  ]);

?>