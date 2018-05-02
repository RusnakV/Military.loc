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
        require_once ROOT . "/views/workers/index.php";

    }

}