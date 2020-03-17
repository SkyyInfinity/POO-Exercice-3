<?php
class Requete {
  private $pdo;
  private $host = 'mysql:host=localhost;port=3306;dbname=toto';
  private $login = 'root';
  private $password = '';

  function __construct() {
    try {
      $this->pdo = new PDO($this->host, $this->login, $this->password);
    } catch (PDOException $e) {
      Log::logWrite($e->getMessage());
    }
  }

  public function inserer($table, $valeurs) {
    $sql = "INSERT INTO $table ";
    foreach($values as $key => $value) {
      $sql .= $key;
      if($key !== count($value - 1)) {
        $sql .= ", ";
      }
    }

    $sql = "INSERT INTO VALUES ";

      foreach ($values as $key => $content) {
        $sql .= $content[0];
        if ($key !== count($values) - 1) {
          $sql .=", ";
        }
      }
  }

  public function __destruct() {
    unset($this->pdo);
  }
}
