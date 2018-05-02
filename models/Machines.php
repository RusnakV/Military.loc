<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 29.04.2018
 * Time: 18:21
 */

class Machines
{
    public  static function listMachines() {
        $db = DB::getConnection();
        $query = $db->query("SELECT * FROM war_machine WHERE war_machine.type_of_machine_id =3");
        return $query ->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function listMachinesById($base_id)
    {
        $db = Db::getConnection();
        $query = $db->prepare("SELECT * FROM war_machine WHERE military_base_machines_id = :base_id");
        $query->bindParam(":base_id", $base_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}