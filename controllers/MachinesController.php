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

        $military_bases_list = MilitaryBases::listOfBases();
        $machines_listBTR = Machines::listMachinesBTR();
        $machines_listBMP = Machines::listMachinesBMP();
        $machines_listTank = Machines::listMachinesTank();
        $machines_listBRDM = Machines::listMachinesBRDM();
        $machines_listTransport = Machines::listMachinesTransport();
        $machine_type = Machines::listMachineTypes();

        require_once ROOT . "/views/machines/index.php";

    }


}