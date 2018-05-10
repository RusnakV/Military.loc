<?php
require_once "../Db.php";
require_once "../../models/Weapons.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $year_of_manufacture = $_POST['year_of_manufacture'];
    $caliber = $_POST['caliber'];
    $rate_of_fire = $_POST['rate_of_fire'];
    $range = $_POST['range'];
    $count = $_POST['count'];
    $type = $_POST['weaponType'];
    $base_id = $_POST['base_id'];

    $count = strval($count);
    $range = strval($range);


    Weapons::addNewWeapon($name,$model,$year_of_manufacture, $caliber, $rate_of_fire,$range, $count, $type,$base_id);
    $host = $_SERVER['HTTP_HOST'];
    header("location: http://$host/weapons");


}