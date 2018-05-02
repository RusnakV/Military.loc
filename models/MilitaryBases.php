<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 26.04.2018
 * Time: 9:10
 */

class MilitaryBases
{
    public static function listOfBases()
    {
        $db = Db::getConnection();
        $query = $db->query("SELECT id, name FROM military_base");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}