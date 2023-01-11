<?php 

  try 
  {
      //$bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
      $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204;charset=utf8', 'flypa1556204', 'Pape1998Paul_',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
  }
  catch(PDOException $e)
  {
      die('Erreur : '.$e->getMessage());
  }

