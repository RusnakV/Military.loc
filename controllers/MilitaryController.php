<?php
/**
 * Created by PhpStorm.
 * User: Віктор
 * Date: 23.04.2018
 * Time: 11:40
 */

class MilitaryController
{
    public function actionGetListMilitaryWorkers()    {
        $workers_list = Military::listMilitaryWorkers();
        $military_bases_list = MilitaryBases::listOfBases();
        $listOfSquad = Military::listMilitarySquad();
        $listOfPlatoon = Military::listMilitaryPlatoon();
        $listOfDepartment = Military::listMilitaryDepartment();
        $listOfRank = Military::listMilitaryRank();
        require_once ROOT . "/views/workers/index.php";

    }

}