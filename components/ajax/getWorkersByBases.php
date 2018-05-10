<?php
if(isset($_POST['base'])){
    $base = $_POST['base'];
    $base = intval($base);
    require_once "../Db.php";
    require_once "../../models/Military.php";

    $listWorkers = Military::listMilitaryById($base);

    ?>
    <table class="highlight">
        <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Patronymic</th>
            <th>Telephone</th>
            <th>Adress</th>
            <th>Miliray base</th>
            <th>Squad</th>
            <th>Platoon</th>
            <th>Department</th>
            <th>Rank</th>
            <th>Position</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        <?foreach ($listWorkers as $workers):?>
            <tr>
                <td><?=$workers['first_name']?></td>
                <td><?=$workers['last_name']?></td>
                <td><?=$workers['patronymic']?></td>
                <td><?=$workers['telephone']?></td>
                <td><?=$workers['adress']?></td>
                <td><?=$workers['name']?></td>
                <td><?=$workers['name_of_squad']?></td>
                <td><?=$workers['name_of_platoon']?></td>
                <td><?=$workers['name_of_department']?></td>
                <td><?=$workers['name_of_rank']?></td>
                <td><?=$workers['position']?></td>
                <td>
                    <a worker-id="<?=$workers['id']?>" class="waves-effect waves-light btn-small military-red delete-worker">Видалити</a>
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