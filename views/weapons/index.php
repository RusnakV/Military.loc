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
                <th>Year of manufacture</th>
                <th>Caliber</th>
                <th>Rate of fire</th>
                <th>Range</th>
                <th>Operations</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($weapons_list as $weapon):?>
                <tr>
                    <td><?=$weapon['name']?></td>
                    <td><?=$weapon['model']?></td>
                    <td><?=$weapon['year_of_manufacture']?></td>
                    <td><?=$weapon['caliber']?></td>
                    <td><?=$weapon['rate_of_fire']?></td>
                    <td><?=$weapon['range_fire']?></td>
                    <td class="operations">
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
                <th>Year of manufacture</th>
                <th>Caliber</th>
                <th>Rate of fire</th>
                <th>Range</th>
                <th>Operations</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($weapons_listAutomatic as $automatic):?>
                <tr>
                    <td><?=$automatic['name']?></td>
                    <td><?=$automatic['model']?></td>
                    <td><?=$automatic['year_of_manufacture']?></td>
                    <td><?=$automatic['caliber']?></td>
                    <td><?=$automatic['rate_of_fire']?></td>
                    <td><?=$automatic['range_fire']?></td>
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
                <th>Year of manufacture</th>
                <th>Caliber</th>
                <th>Rate of fire</th>
                <th>Range</th>
                <th>Operations</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($weapons_listCarabine as $carabine):?>
                <tr>
                    <td><?=$carabine['name']?></td>
                    <td><?=$carabine['model']?></td>
                    <td><?=$carabine['year_of_manufacture']?></td>
                    <td><?=$carabine['caliber']?></td>
                    <td><?=$carabine['rate_of_fire']?></td>
                    <td><?=$carabine['range_fire']?></td>
                    <td>
                        <a weapon-id="<?=$carabine['id']?>" class="waves-effect waves-light btn-small military-red delete-weapon">Видалити</a>
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
                <th>Year of manufacture</th>
                <th>Caliber</th>
                <th>Rate of fire</th>
                <th>Range</th>
                <th>Operations</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($weapons_listRockets as $rockets):?>
                <tr>
                    <td><?=$rockets['name']?></td>
                    <td><?=$rockets['model']?></td>
                    <td><?=$rockets['year_of_manufacture']?></td>
                    <td><?=$rockets['caliber']?></td>
                    <td><?=$rockets['rate_of_fire']?></td>
                    <td><?=$rockets['range_fire']?></td>
                    <td>
                        <a weapon-id="<?=$rockets['id']?>" class="waves-effect waves-light btn-small military-red delete-weapon">Видалити</a>
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
                <th>Year of manufacture</th>
                <th>Caliber</th>
                <th>Rate of fire</th>
                <th>Range</th>
                <th>Operations</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($weapons_listArtillery as $artillery):?>
                <tr>
                    <td><?=$artillery['name']?></td>
                    <td><?=$artillery['model']?></td>
                    <td><?=$artillery['year_of_manufacture']?></td>
                    <td><?=$artillery['caliber']?></td>
                    <td><?=$artillery['rate_of_fire']?></td>
                    <td><?=$artillery['range_fire']?></td>

                    <td id="operations">
                        <a weapon-id="<?=$artillery['id']?>" class="waves-effect waves-light btn-small military-red delete-weapon">Видалити</a>
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
            <h5>Додати озброєння</h5>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="name" id="last_name" type="text" class="validate">
                        <label for="last_name">Назва</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="model" id="model" type="text" class="validate">
                        <label for="model">Модель</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="year_of_manufacture" id="year" type="text" class="validate">
                        <label for="year">Рік виготовлення</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="caliber" id="caliber" type="text" class="validate">
                        <label for="caliber">Калібер</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="rate_of_fire" id="rate_of_fire" type="text" class="validate">
                        <label for="rate_of_fire">Скорострільність</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="range" id="range" type="text" class="validate">
                        <label for="range">Дальність</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="count" id="count" type="text" class="validate">
                        <label for="count">Кількість</label>
                    </div>

                    <div class="input-field col s12">
                        <select name="weaponType">
                            <option value="" disabled selected>Виберіть тип зброї</option>
                            <?foreach ($weapons_type as $type):?>
                                <option value="<?=$type['id']?>"><?=$type['weapons_type']?></option>
                            <?endforeach;?>
                        </select>

                    </div>
                    <div class="input-field col s12">
                        <select name="base_id">
                            <option value="" disabled selected>Виберіть військову частину</option>
                            <?foreach ($military_bases_list as $base_id):?>
                                <option value="<?=$base_id['id']?>"><?=$base_id['name']?></option>
                            <?endforeach;?>
                        </select>

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