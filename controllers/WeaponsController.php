<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 23.04.2018
 * Time: 20:55
 */

class WeaponsController
{
    public function actionGetListWeapons(){
        $weapons_list = Weapons::listWeapons();
        $weapons_listArtillery = Weapons::listWeaponsArtillery();
        $military_bases_list = MilitaryBases::listOfBases();
        $weapons_listAutomatic = Weapons::listWeaponsAutomatic();
        $weapons_listCarabine = Weapons::listWeaponsCarabine();
        $weapons_listRockets = Weapons::listWeaponsRockets();
        $weapons_type = Weapons::listWeaponsTypes();
        require_once ROOT . "/views/weapons/index.php";
    }

}