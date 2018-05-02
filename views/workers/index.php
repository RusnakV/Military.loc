<?require_once ROOT . '/views/layouts/header.php'?>
<ul id="tabs-swipe-demo"  class="tabs" >
    <li class="tab col s6"><a href="#test-swipe-6">Військовослужбовці</a></li>
    <li class="tab col s6"><a href="#test-swipe-1">Гвинтівки</a></li>
    <li class="tab col s6"><a href="#test-swipe-2">Автоматична зброя</a></li>
    <li class="tab col s6"><a href="#test-swipe-3">Карабіни </a></li>
    <li class="tab col s6"><a href="#test-swipe-4">Ракетне озброєння</a></li>
    <li class="tab col s6"><a href="#test-swipe-7">Артилерія </a></li>

</ul>
    <div id="test-swipe-1" class="col s12 military-green">
        <table class="highlight">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Armor</th>
                <th>Crew number</th>
                <th>appointment</th>
                <th>Year of manufacture</th>
                <th>Type of machine</th>
                <th>Count</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($machines_list as $machine):?>
                <tr>
                    <td><?=$machine['name']?></td>
                    <td><?=$machine['model']?></td>
                    <td><?=$machine['caliber']?></td>
                    <td><?=$machine['range']?></td>
                    <td><?=$machine['rate_of_fire']?></td>
                    <td><?=$machine['year_of_manufacture']?></td>
                    <td><?=$machine['count']?></td>
                    <td>
                        <a class="waves-effect waves-light btn-small military-red">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>
        </table>
    </div>
    <div id="test-swipe-2"  class="col s12 military-green">
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
            <?foreach ($weapons_listAutomatic as $automatic):?>
                <tr>
                    <td><?=$automatic['name']?></td>
                    <td><?=$automatic['model']?></td>
                    <td><?=$automatic['caliber']?></td>
                    <td><?=$automatic['range']?></td>
                    <td><?=$automatic['rate_of_fire']?></td>
                    <td><?=$automatic['year_of_manufacture']?></td>
                    <td><?=$automatic['count']?></td>
                    <td>
                        <a class="waves-effect waves-light btn-small military-red">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>

        </table>
    </div>
    <div id="test-swipe-3" class="col s12 military-green">
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
            <?foreach ($weapons_listCarabine as $carabine):?>
                <tr>
                    <td><?=$carabine['name']?></td>
                    <td><?=$carabine['model']?></td>
                    <td><?=$carabine['caliber']?></td>
                    <td><?=$carabine['range']?></td>
                    <td><?=$carabine['rate_of_fire']?></td>
                    <td><?=$carabine['year_of_manufacture']?></td>
                    <td><?=$carabine['count']?></td>
                    <td>
                        <a class="waves-effect waves-light btn-small military-red">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>

        </table>
    </div>
    <div id="test-swipe-4" class="col s12 military-green">
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
            <?foreach ($weapons_listRockets as $rockets):?>
                <tr>
                    <td><?=$rockets['name']?></td>
                    <td><?=$rockets['model']?></td>
                    <td><?=$rockets['caliber']?></td>
                    <td><?=$rockets['range']?></td>
                    <td><?=$rockets['rate_of_fire']?></td>
                    <td><?=$rockets['year_of_manufacture']?></td>
                    <td><?=$rockets['count']?></td>
                    <td>
                        <a class="waves-effect waves-light btn-small military-red">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>

        </table>
    </div>

    <div id="test-swipe-6" class="col s12">
        <div class="container">
            <div class="row">
                <div class="input-field col s6 military-input-weapons">
                    <select>
                        <option id="bases-selector" value="" disabled selected>Військові частини</option>
                        <?foreach ($military_bases_list as $bases):?>
                            <option value="<?=$bases['id']?>"><?=$bases['name']?></option>
                        <?endforeach;?>
                    </select>
                    <label>Виберіть війскову частину</label>
                </div>
                <div id="military-weapon-progress" class="progress">
                    <div class="indeterminate"></div>
                </div>
                <div id="military-bases-weapons" class="col s12"></div>
            </div>
        </div>
    </div>
    <div id="test-swipe-7" class="col s12 military-green">
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
            <?foreach ($weapons_listArtillery as $artillery):?>
                <tr>
                    <td><?=$artillery['name']?></td>
                    <td><?=$artillery['model']?></td>
                    <td><?=$artillery['caliber']?></td>
                    <td><?=$artillery['range']?></td>
                    <td><?=$artillery['rate_of_fire']?></td>
                    <td><?=$artillery['year_of_manufacture']?></td>
                    <td><?=$artillery['count']?></td>
                    <td>
                        <a class="waves-effect waves-light btn-small military-red">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>

        </table>
    </div>

<?require_once ROOT . '/views/layouts/footer.php'?>


</ul>
<?require_once ROOT . '/views/layouts/footer.php'?>