<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 29.04.2018
 * Time: 18:20
 */

class MachinesController
{
    public  function actionGetListMilitaryMachines(){
        $machines_list = Machines::listMachines();
        $military_bases_list = MilitaryBases::listOfBases();
        require_once ROOT . "/views/machines/index.php";

    }


}