<?php
    class Reservation{
        // Connection
        private $conn;
        // Table
        private $db_table = "reservation";
        // Columns
        public $id;
        public $nom;
        public $adresse;
        public $telephone;
        public $email;
        public $ci;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // CREATE
        public function createReservation(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        nom = :nom, 
                        email = :email, 
                        adresse = :adresse, 
                        telephone = :telephone, 
                        ci = :ci";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nom=htmlspecialchars(strip_tags($this->nom));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->adresse=htmlspecialchars(strip_tags($this->adresse));
            $this->telephone=htmlspecialchars(strip_tags($this->telephone));
            $this->ci=htmlspecialchars(strip_tags($this->ci));
        
            // bind data
            $stmt->bindParam(":nom", $this->nom);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":adresse", $this->adresse);
            $stmt->bindParam(":telephone", $this->telephone);
            $stmt->bindParam(":ci", $this->ci);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }    
    }
