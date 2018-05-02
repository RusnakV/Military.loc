<?php
if(isset($_POST['base'])){
    $base = $_POST['base'];
    $base = intval($base);
    require_once "../Db.php";
    require_once "../../models/Weapons.php";

    $listWeapons = Weapons::listWeaponsById($base);
    ?>
<table class="highlight">
    <thead>
    <tr>
        <th>Name</th>
        <th>Model</th>
        <th>Caliber</th>
        <th>Range</th>
        <th>Rate of fire</th>
        <th>Year of manufacture</th>
        <th>Count</th>
        <th>Operations</th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($listWeapons as $weapon):?>
        <tr>
            <td><?=$weapon['name']?></td>
            <td><?=$weapon['model']?></td>
            <td><?=$weapon['caliber']?></td>
            <td><?=$weapon['range']?></td>
            <td><?=$weapon['rate_of_fire']?></td>
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