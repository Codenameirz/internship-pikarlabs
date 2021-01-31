<?php

  include_once "main.php";
  include "components/data.php";
  include "components/function.php";

  if(!isset($mailTerkirim)){
    $mailTerkirim = null;
  }
  else{
    $mailTerkirim = true;
  }

  echo $twig->render('v2.twig', [
    'footer' => $footer,
    'menuNav' => $menuNav,
    'jumbotron' => $jumbotron,
    'section' => $section,
    'profile' => $profile,
    'skill' => $skill,
    'education' => $education,
    'portfolio' => $portfolio,
    'modalEmail' => $modalEmail,
    'mailTerkirim' => $mailTerkirim,
  ]);

?>