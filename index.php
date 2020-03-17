<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$valeurs = new Array(
  'valeur1' => 'nom';
  'valeur2' => 'prenom';
  'valeur3' => 'email';
  'valeur4' => 'motdepasse';
);
