<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 30.04.2018
 * Time: 12:44
 */

class Military
{
    public  static function listMilitaryWorkers(){
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM military_workers");
        $query ->setFetchMode(PDO::FETCH_ASSOC);
        return $query ->fetchAll();

    }

}