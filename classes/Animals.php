<?php
abstract class Animals implements Biologie {
  protected $regne = 'animal';
  protected $masse;
  protected $taille;
  protected $typeRespiration;
  protected $consommationCO2;
  protected $rejetCO2;

  protected function respirer($typeR, $conso, $rejet) {
    $this->typeRespiration = $typeR;
    $this->consommationCO2 = $conso;
    $this->rejetCO2 = $rejet;
  }
}
