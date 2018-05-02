<?require_once ROOT . '/views/layouts/header.php'?>
    <ul id="tabs-swipe-demo"  class="tabs" >
        <li class="tab col s6"><a href="#test-swipe-6">Озброєння військової частини</a></li>
        <li class="tab col s6"><a href="#test-swipe-1">Гвинтівки</a></li>
        <li class="tab col s6"><a href="#test-swipe-2">Автоматична зброя</a></li>
        <li class="tab col s6"><a  href="#test-swipe-3">Карабіни </a></li>
        <li class="tab col s6"><a href="#test-swipe-4">Ракетне озброєння</a></li>
        <li class="tab col s6"><a href="#test-swipe-7">Артилерія </a></li>


    </ul>
    <div id="test-swipe-1" class="col s12 military-green">
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
            <?foreach ($weapons_list as $weapon):?>
                <tr>
                    <td><?=$weapon['name']?></td>
                    <td><?=$weapon['model']?></td>
                    <td><?=$weapon['caliber']?></td>
                    <td><?=$weapon['range']?></td>
                    <td><?=$weapon['rate_of_fire']?></td>
                    <td><?=$weapon['year_of_manufacture']?></td>
                    <td><?=$weapon['count']?></td>
                    <td>
                        <a weapon-id="<?=$weapon['id']?>" class="waves-effect waves-light btn-small military-red delete-weapon">Видалити</a>
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
                        <a weapon-id="<?=$automatic['id']?>" class="waves-effect waves-light btn-small military-red delete-weapon">Видалити</a>
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
                    <select id="select-weapon-by-bases">
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
    <a href="#modal1" id="add-modal" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <form autocomplete="off" action="../../components/form/addWeapon.php" method="post">
        <div class="modal-content">
            <h4>Modal Header</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="name" id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>

                    <div class="input-field col s12">
                        <select name="weaponType">
                            <option value="" disabled selected>Choose your option</option>
                            <?foreach ($weapons_type as $type):?>
                                <option value="<?=$type['id']?>"><?=$type['weapons_type']?></option>
                            <?endforeach;?>
                        </select>
                        <label>Materialize Select</label>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <input value="Додати" type="submit" name="submit" class="modal-close waves-effect waves-green btn-flat">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Відмінити</a>
        </div>
        </form>
    </div>

<?require_once ROOT . '/views/layouts/footer.php'?>