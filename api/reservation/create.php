<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once '../db/Database.php';
    include_once '../class/Reservations.php';
    $database = new Database();
    $db = $database->getConnection();
    $item = new Reservation($db);
    $data = json_decode(file_get_contents("php://input"));
    $item->$nom = $data->nom;
    $item->email = $data->email;
    $item->$adresse = $data->adresse;
    $item->$telephone = $data->telephone;
    $item->$ci = $data->ci;
    if($item->createReservation()){
        echo 'Reservation created successfully.';
    } else{
        echo 'Reservation could not be created.';
    }
