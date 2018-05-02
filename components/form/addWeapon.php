<?php
require_once "../Db.php";
require_once "../../models/Weapons.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $type = $_POST['weaponType'];

    Weapons::addNewWeapon($name, $type);
    $host = $_SERVER['HTTP_HOST'];
    header("location: http://$host/weapons");
}