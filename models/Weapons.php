<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 20.04.2018
 * Time: 11:02
 */

class Weapons
{
    public  static function listWeapons(){
        $DB = Db::getConnection();
        $query = $DB->query("SELECT * FROM weapons WHERE weapons.weapon_type_id =2");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();

    }
    public  static  function listWeaponsArtillery(){
        $DB = Db::getConnection();
        $query = $DB->query("SELECT * FROM weapons WHERE weapons.weapon_type_id =6");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();

    }

    public static function listWeaponsById($base_id)
    {
        $db = Db::getConnection();
        $query = $db->prepare("SELECT * FROM weapons WHERE military_base_weapons_id = :base_id");
        $query->bindParam(":base_id", $base_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public  static function  listWeaponsAutomatic(){
        $DB = Db::getConnection();
        $query = $DB->query("SELECT * FROM weapons WHERE weapons.weapon_type_id =5");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();
    }
    public  static  function  listWeaponsCarabine(){
        $db = Db::getConnection();
        $query = $db->prepare("SELECT * FROM weapons WHERE weapons.weapon_type_id =3");
        $query->bindParam(":base_id", $base_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public  static function  listWeaponsRockets(){
        $db = Db::getConnection();
        $query = $db->prepare("SELECT * FROM weapons WHERE weapons.weapon_type_id =7");
        $query->bindParam(":base_id", $base_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listWeaponsTypes(){
        $DB = Db::getConnection();
        $query = $DB->query("SELECT * FROM type_of_weapon");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();
    }

    public static function addNewWeapon($name, $type){
        $db = Db::getConnection();
        $query = $db->prepare("INSERT INTO weapons (name, weapon_type_id) VALUES (:name, :type)");
        $query->bindParam(":name", $name, PDO::PARAM_STR);
        $query->bindParam(":type", $type, PDO::PARAM_STR);
        $query->execute();
        return true;
    }

    public static function deleteWeapon($id){
        $db = Db::getConnection();
        $query = $db->prepare("DELETE FROM weapons WHERE id = :id");
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
    }



}