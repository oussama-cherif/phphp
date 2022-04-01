<?php
class Animal
{
  // Connection
  private $conn;
  // Table
  private $db_table = "animal";
  // Columns
  public $id;
  public $nom;
  public $age;
  public $photo;
  public $race;
  public $sexe;
  public $created;
  // Db connection
  public function __construct($db)
  {
    $this->conn = $db;
  }
  // GET ALL
  public function getAnimals()
  {
    $sqlQuery = "SELECT id, nom, age, photo, created FROM " . $this->db_table . "";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
  }

  // READ single
  public function getSingleAnimal()
  {
    $sqlQuery = "SELECT id, nom, photo, age FROM " . $this->db_table . "
                         WHERE id = ? LIMIT 0,1";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->nom = $dataRow['nom'];
    $this->photo = $dataRow['photo'];
    $this->age = $dataRow['age'];
  }
}
