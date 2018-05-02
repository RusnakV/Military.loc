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
        <?foreach ($listMachines as $weapon):?>
            <tr>
                <td><?=$weapon['name']?></td>
                <td><?=$weapon['model']?></td>
                <td><?=$weapon['cannon']?></td>
                <td><?=$weapon['armor']?></td>
                <td><?=$weapon['crew_number']?></td>
                <td><?=$weapon['appointment']?></td>
                <td><?=$weapon['year_of_manufacture']?></td>
                <td><?=$weapon['count']?></td>
                <td>
                    <a class="waves-effect waves-light btn-small military-red">Видалити</a>
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