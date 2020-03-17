<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoad.php';
spl_autoload_register('classAutoLoader');

$valeurs = array(
  'nom' => 'Michel',
  'prenom' => 'Jean-Pierre',
  'email' => 'jp@michel.com',
  'motdepasse' => 'michelalaplage'
);

//On instancie un objet de la classe Requête
$test = new Requete();

// C'est l'occasion de tester notre classe d'écriture d'erreur
var_dump($test);
