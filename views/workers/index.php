<?require_once ROOT . '/views/layouts/header.php'?>
<ul id="tabs-swipe-demo"  class="tabs" >
    <li class="tab col s6"><a href="#test-swipe-6">Військовослужбовці</a></li>
    <li class="tab col s6"><a href="#test-swipe-1">Рота</a></li>
    <li class="tab col s6"><a href="#test-swipe-2">Взвод</a></li>
    <li class="tab col s6"><a href="#test-swipe-3">Відділення </a></li>


</ul>
    <div id="test-swipe-1" class="col s12 military-green">
        <table class="highlight">
            <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Patronymic</th>
                <th>Telephone</th>
                <th>Adress</th>
                <th>Squad </th>
                <th>Platoon</th>
                <th>Department</th>
                <th>Rank</th>
                <th>Position</th>
                <th>Operations</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($workers_list as $workers):?>
                <tr>
                    <td><?=$workers['first_name']?></td>
                    <td><?=$workers['last_name']?></td>
                    <td><?=$workers['patronymic']?></td>
                    <td><?=$workers['telephone']?></td>
                    <td><?=$workers['adress']?></td>
                    <td><?=$workers['military_base_id']?></td>
                    <td><?=$workers['squad_id']?></td>
                    <td><?=$workers['platoon_id']?></td>
                    <td><?=$workers['department_id']?></td>
                    <td><?=$workers['rank_id']?></td>
                    <td><?=$workers['position']?></td>
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


    <div id="test-swipe-6" class="col s12">
        <div class="machines-container">
            <div class="row">
                <div class="input-field col s6 military-input-weapons">
                    <select id="select-workers-by-base">
                        <option id="bases-selector" value="" disabled selected>Військові частини</option>
                        <?foreach ($military_bases_list as $bases):?>
                            <option value="<?=$bases['id']?>"><?=$bases['name']?></option>
                        <?endforeach;?>
                    </select>
                    <label>Виберіть війскову частину</label>
                </div>
                <div id="military-workers-progress" class="progress">
                    <div class="indeterminate"></div>
                </div>
                <div id="military-bases-workers" class="col s12"></div>
            </div>
        </div>
    </div>
    <a href="#modal1" id="add-modal" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <form autocomplete="off" action="../../components/form/addWorker.php" method="post">
            <div class="modal-content">
                <h5>Додати дані про військовослужбовця</h5>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="first_name" id="first_name" type="text" class="validate">
                        <label for="first_name">Ім’я</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="last_name" id="last_name" type="text" class="validate">
                        <label for="last_name">Прізвище</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="patronymic" id="patronymic" type="text" class="validate">
                        <label for="patronymic">По батькові</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="telephone" id="telephone" type="text" class="validate">
                        <label for="telephone">Телефон</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="adress" id="adress" type="text" class="validate">
                        <label for="adress">Адрес</label>
                    </div>


                    <div class="input-field col s12">
                        <select name="base_id">
                            <option value="" disabled selected>Виберіть військову частину</option>
                            <?foreach ($military_bases_list as $bases):?>
                                <option value="<?=$bases['id']?>"><?=$bases['name']?></option>
                            <?endforeach;?>
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select name="squad_id">
                            <option value="" disabled selected>Виберіть роту</option>
                            <?foreach ($listOfSquad as $squad):?>
                                <option value="<?=$squad['id']?>"><?=$squad['name_of_squad']?></option>
                            <?endforeach;?>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select name="platoon_id">
                            <option value="" disabled selected>Виберіть взвод</option>
                            <?foreach ($listOfPlatoon as $platoon):?>
                                <option value="<?=$platoon['id']?>"><?=$platoon['name_of_platoon']?></option>
                            <?endforeach;?>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select name="department_id">
                            <option value="" disabled selected>Виберіть відділення</option>
                            <?foreach ($listOfDepartment as $department):?>
                                <option value="<?=$department['id']?>"><?=$department['name_of_department']?></option>
                            <?endforeach;?>
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select name="rank_id">
                            <option value="" disabled selected>Виберіть звання</option>
                            <?foreach ($listOfRank as $rank):?>
                                <option value="<?=$rank['id']?>"><?=$rank['name_of_rank']?></option>
                            <?endforeach;?>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <input name="position" id="position" type="text" class="validate">
                        <label for="position">Посада</label>
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
