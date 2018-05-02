<?php
if (isset($_POST['weapon_id'])){
    $weapon_id = intval($_POST['weapon_id']);
    require_once "../Db.php";
    require_once "../../models/Weapons.php";

    Weapons::deleteWeapon($weapon_id);

}