<?php
require_once "../Db.php";
require_once "../../models/Machines.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $cannon = $_POST['cannon'];
    $armor = $_POST['armor'];
    $crew_number = $_POST['crew_number'];
    $appointment = $_POST['appointment'];
    $year_of_manufacture = $_POST['year_of_manufacture'];
    $count = $_POST['count'];
    $machineType = $_POST['machineType'];
    $base_id = $_POST['base_id'];

   $count = strval($count);





  Machines::addNewMachine($name,$model,$cannon,$armor, $crew_number, $appointment,$year_of_manufacture, $count, $machineType,$base_id);

    $host = $_SERVER['HTTP_HOST'];
    header("location: http://$host/machines");


}