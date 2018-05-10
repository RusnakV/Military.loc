<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 29.04.2018
 * Time: 18:21
 */

class Machines
{


    public static function listMachinesById($base_id)
    {
        $db = Db::getConnection();
        $query = $db->prepare("SELECT * FROM war_machine WHERE military_base_machines_id = :base_id");
        $query->bindParam(":base_id", $base_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public  static function listMachinesBTR() {
        $db = DB::getConnection();
        $query = $db->query("SELECT * FROM war_machine WHERE war_machine.type_of_machine_id =1");
        return $query ->fetchAll(PDO::FETCH_ASSOC);

    }
    public  static function listMachinesBMP() {
        $db = DB::getConnection();
        $query = $db->query("SELECT * FROM war_machine WHERE war_machine.type_of_machine_id =2");
        return $query ->fetchAll(PDO::FETCH_ASSOC);
    }
    public  static function listMachinesTank() {
        $db = DB::getConnection();
        $query = $db->query("SELECT * FROM war_machine WHERE war_machine.type_of_machine_id =3");
        return $query ->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function listMachineTypes()
    {
        $DB = Db::getConnection();
        $query = $DB->query("SELECT * FROM type_of_war_machine");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query->fetchAll();
    }
    public  static function listMachinesBRDM(){
    $db = DB::getConnection();
    $query = $db->query("SELECT * FROM war_machine WHERE war_machine.type_of_machine_id =4");
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public  static function listMachinesTransport() {
        $db = DB::getConnection();
        $query = $db->query("SELECT * FROM war_machine WHERE war_machine.type_of_machine_id =5");
        return $query ->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function addNewMachine($name,$model,$cannon,$armor, $crew_number, $appointment,$year_of_manufacture, $count, $machineType,$base_id){
        $db = Db::getConnection();
        $query = $db->prepare("INSERT INTO war_machine (name, model, cannon, armor, crew_number, appointment,year_of_manufacture, count_machines, type_of_machine_id, military_base_machines_id) VALUES (:name,:model,:cannon,:armor, :crew_number, :appointment,:year_of_manufacture, :count, :machineType,:base_id)");
        $query->bindParam(":name", $name, PDO::PARAM_STR);
        $query->bindParam(":model", $model,PDO::PARAM_STR);
        $query->bindParam(":cannon", $cannon,PDO::PARAM_STR);
        $query->bindParam(":armor", $armor,PDO::PARAM_STR);
        $query->bindParam(":crew_number", $crew_number,PDO::PARAM_STR);
        $query->bindParam(":appointment", $appointment,PDO::PARAM_STR);
        $query->bindParam(":year_of_manufacture", $year_of_manufacture,PDO::PARAM_STR);
        $query->bindParam(":count", $count, PDO::PARAM_STR);
        $query->bindParam(":machineType", $machineType, PDO::PARAM_STR);
        $query->bindParam(":base_id", $base_id, PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    /*public static function fakeInsert(){
        $db = Db::getConnection();
        $query = $db->query("INSERT INTO war_machine (name, model, cannon, armor, crew_number, appointment,year_of_manufacture, count_machines, type_of_machine_id, military_base_machines_id) VALUES ('fdfd', 'fdfd', 'fdfd', 'fdfd', 'fdfd', 'fdfd','fdfd', 'fdfd', 1, 1)");
    }*/

    public static function deleteMachine($id){
        $db = Db::getConnection();
        $query = $db->prepare("DELETE FROM war_machine WHERE id = :id");
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
    }

}