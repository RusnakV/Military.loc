<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 30.04.2018
 * Time: 12:44
 */

class Military
{

    public static function listMilitaryById($base_id)
    {
        $base_id = intval($base_id);
        $db = Db::getConnection();
        $query = $db->prepare("SELECT military_workers.id, military_workers.first_name, military_workers.last_name, military_workers.patronymic, military_workers.telephone, military_workers.adress, military_workers.position, military_base.name, squad.name_of_squad, platoon.name_of_platoon, department.name_of_department, military_ranks.name_of_rank
FROM (((((military_workers
       INNER JOIN military_base ON military_workers.military_base_id = :base_id) 
       INNER JOIN squad ON military_workers.squad_id = squad.id)
       INNER JOIN platoon ON military_workers.platoon_id = platoon.id)
       INNER JOIN department ON military_workers.department_id = department.id)
       INNER JOIN military_ranks ON military_workers.rank_id = military_ranks.id)");
        $query->bindParam(":base_id", $base_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public  static function listMilitaryWorkers(){
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM military_workers");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();

    }
    public  static function listMilitarySquad(){
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM squad");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();

    }
    public  static function listMilitaryPlatoon(){
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM platoon");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();
    }
    public  static function listMilitaryDepartment(){
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM department");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();
    }
    public  static function listMilitaryRank(){
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM military_ranks");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();
    }


    public static function addNewWorker($first_name,$last_name,$patronymic, $telephone, $adress,$base_id, $squad_id, $platoon_id,$department_id,$rank_id,$position){
        $db = Db::getConnection();
        $query = $db->prepare("INSERT INTO military_workers (first_name, last_name, patronymic, telephone, 	adress, military_base_id, squad_id, platoon_id, department_id,	rank_id,position) VALUES (:first_name, :last_name, :patronymic, :telephone, :adress, :base_id, :squad_id, :platoon_id, :department_id,	:rank_id, :position )");
        $query->bindParam(":first_name", $first_name, PDO::PARAM_STR);
        $query->bindParam(":last_name", $last_name,PDO::PARAM_STR);
        $query->bindParam(":patronymic", $patronymic,PDO::PARAM_STR);
        $query->bindParam(":telephone", $telephone,PDO::PARAM_STR);
        $query->bindParam(":adress", $adress,PDO::PARAM_STR);
        $query->bindParam(":base_id", $base_id,PDO::PARAM_STR);
        $query->bindParam(":squad_id", $squad_id,PDO::PARAM_STR);
        $query->bindParam(":platoon_id", $platoon_id, PDO::PARAM_STR);
        $query->bindParam(":department_id", $department_id, PDO::PARAM_STR);
        $query->bindParam(":rank_id", $rank_id, PDO::PARAM_STR);
        $query->bindParam(":position", $position, PDO::PARAM_STR);
        $query->execute();
        return true;
    }

    public static function deleteWorker($id){
        $db = Db::getConnection();
        $query = $db->prepare("DELETE FROM military_workers WHERE id = :id");
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
    }
}