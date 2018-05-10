<?php
if (isset($_POST['machine_id'])){
    $machine_id = intval($_POST['machine_id']);
    require_once "../Db.php";
    require_once "../../models/Machines.php";

    Machines::deleteMachine($machine_id);

}