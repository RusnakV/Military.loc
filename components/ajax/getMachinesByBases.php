<?php
if(isset($_POST['base'])){
    $base = $_POST['base'];
    $base = intval($base);
    require_once "../Db.php";
    require_once "../../models/Machines.php";

    $listMachines = Machines::listMachinesById($base);

    ?>
    <table class="highlight">
        <thead>
        <tr>
            <th>Name</th>
            <th>Model</th>
            <th>Cannon</th>
            <th>Armor</th>
            <th>Crew number</th>
            <th>Appointment</th>
            <th>Year of manufacture</th>
            <th>Count</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        <?foreach ($listMachines as $machine):?>
            <tr>
                <td><?=$machine['name']?></td>
                <td><?=$machine['model']?></td>
                <td><?=$machine['cannon']?></td>
                <td><?=$machine['armor']?></td>
                <td><?=$machine['crew_number']?></td>
                <td><?=$machine['appointment']?></td>
                <td><?=$machine['year_of_manufacture']?></td>
                <td><?=$machine['count_machines']?></td>
                <td>
                    <a machine-id="<?=$machine['id']?>" class="waves-effect waves-light btn-small military-red delete-machine">Видалити</a>
                    <a class="waves-effect waves-light btn-small">Редагувати</a>
                </td>
            </tr>
        <?endforeach;?>
        </tbody>
    </table>
    <?
} else
{
    echo "no";
}