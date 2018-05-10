<?php
require_once "../Db.php";
require_once "../../models/Military.php";

if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $patronymic = $_POST['patronymic'];
    $telephone = $_POST['telephone'];
    $adress = $_POST['adress'];
    $base_id = $_POST['base_id'];
    $squad_id = $_POST['squad_id'];
    $platoon_id = $_POST['platoon_id'];
    $department_id = $_POST['department_id'];
    $rank_id = $_POST['rank_id'];
    $position = $_POST['position'];




    Military::addNewWorker($first_name,$last_name,$patronymic, $telephone, $adress,$base_id, $squad_id, $platoon_id,$department_id,$rank_id,$position);
    $host = $_SERVER['HTTP_HOST'];
    header("location: http://$host/military");


}