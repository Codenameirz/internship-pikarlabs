<?php

  include_once "main.php";
  include "components/data.php";
  include "components/function.php";

  $id = $_GET['id'];
  $checkPort = getId($portfolio, $id);

  echo $twig->render('portfolio.twig', [
    'footer' => $footer,
    'portfolio' => $portfolio,
    'id' => $id,
    'checkPort' => $checkPort,
  ]);

?>