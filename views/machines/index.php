<?require_once ROOT . '/views/layouts/header.php'?>
    <ul id="tabs-swipe-demo"  class="tabs" >
        <li class="tab col s6"><a href="#test-swipe-1">Техніка військової частини</a></li>
        <li class="tab col s6"><a href="#test-swipe-2">БТР</a></li>
        <li class="tab col s6"><a href="#test-swipe-3">БМП</a></li>
        <li class="tab col s6"><a href="#test-swipe-4">Танки </a></li>
        <li class="tab col s6"><a href="#test-swipe-5">БРДМ</a></li>
        <li class="tab col s6"><a href="#test-swipe-6">Військовий транспорт </a></li>


    </ul>
    <div id="test-swipe-2" class="col s12 military-green">
        <table class="highlight">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Armor</th>
                <th>Crew number</th>
                <th>Aappointment</th>
                <th>Year of manufacture</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($machines_listBTR as $btr):?>
                <tr>
                    <td><?=$btr['name']?></td>
                    <td><?=$btr['model']?></td>
                    <td><?=$btr['cannon']?></td>
                    <td><?=$btr['armor']?></td>
                    <td><?=$btr['crew_number']?></td>
                    <td><?=$btr['appointment']?></td>
                    <td><?=$btr['year_of_manufacture']?></td>
                    <td>
                        <a machine-id="<?=$btr['id']?>" class="waves-effect waves-light btn-small military-red delete-machine">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>
        </table>
    </div>

    </div>
    <div id="test-swipe-3" class="col s12 military-green">
        <table class="highlight">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Armor</th>
                <th>Crew number</th>
                <th>Aappointment</th>
                <th>Year of manufacture</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($machines_listBMP as $bmp):?>
                <tr>
                    <td><?=$bmp['name']?></td>
                    <td><?=$bmp['model']?></td>
                    <td><?=$bmp['cannon']?></td>
                    <td><?=$bmp['armor']?></td>
                    <td><?=$bmp['crew_number']?></td>
                    <td><?=$bmp['appointment']?></td>
                    <td><?=$bmp['year_of_manufacture']?></td>
                    <td>
                        <a machine-id="<?=$bmp['id']?>" class="waves-effect waves-light btn-small military-red delete-machine">Видалити</a>
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
                <th>Armor</th>
                <th>Crew number</th>
                <th>Aappointment</th>
                <th>Year of manufacture</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($machines_listTank as $tank):?>
                <tr>
                    <td><?=$tank['name']?></td>
                    <td><?=$tank['model']?></td>
                    <td><?=$tank['cannon']?></td>
                    <td><?=$tank['armor']?></td>
                    <td><?=$tank['crew_number']?></td>
                    <td><?=$tank['appointment']?></td>
                    <td><?=$tank['year_of_manufacture']?></td>
                    <td>
                        <a machine-id="<?=$tank['id']?>" class="waves-effect waves-light btn-small military-red delete-machine">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>

        </table>
    </div>

    <div id="test-swipe-1" class="col s12">
        <div class="machines-container">
            <div class="row">
                <div class="input-field col s6 military-input-weapons">
                    <select id="select-machines-by-base">
                        <option id="bases-selector" value="" disabled selected>Військові частини</option>
                        <?foreach ($military_bases_list as $bases):?>
                            <option value="<?=$bases['id']?>"><?=$bases['name']?></option>
                        <?endforeach;?>
                    </select>
                    <label>Виберіть війскову частину</label>
                </div>
                <div id="military-machines-progress" class="progress">
                    <div class="indeterminate"></div>
                </div>
                <div id="military-bases-machines" class="col s12"></div>
            </div>
        </div>
    </div>
    <div id="test-swipe-5" class="col s12 military-green">
        <table class="highlight">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Armor</th>
                <th>Crew number</th>
                <th>Aappointment</th>
                <th>Year of manufacture</th>
            </tr>
            </thead>

            <tbody>
            <?foreach ($machines_listBRDM as $brdm):?>
                <tr>
                    <td><?=$brdm['name']?></td>
                    <td><?=$brdm['model']?></td>
                    <td><?=$brdm['cannon']?></td>
                    <td><?=$brdm['armor']?></td>
                    <td><?=$brdm['crew_number']?></td>
                    <td><?=$brdm['appointment']?></td>
                    <td><?=$brdm['year_of_manufacture']?></td>
                    <td>
                        <a machine-id="<?=$brdm['id']?>" class="waves-effect waves-light btn-small military-red delete-machine">Видалити</a>
                        <a class="waves-effect waves-light btn-small">Редагувати</a>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>

        </table>
    </div>
    <div id="test-swipe-6" class="col s12 military-green">
        <table class="highlight">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Armor</th>
                <th>Crew number</th>
                <th>Aappointment</th>
                <th>Year of manufacture</th>

            </tr>
            </thead>

            <tbody>
            <?foreach ($machines_listTransport as $transport):?>
                <tr>
                    <td><?=$transport['name']?></td>
                    <td><?=$transport['model']?></td>
                    <td><?=$transport['cannon']?></td>
                    <td><?=$transport['armor']?></td>
                    <td><?=$transport['crew_number']?></td>
                    <td><?=$transport['appointment']?></td>
                    <td><?=$transport['year_of_manufacture']?></td>
                    <td>
                        <a machine-id="<?=$tr['id']?>" class="waves-effect waves-light btn-small military-red delete-machine">Видалити</a>
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
        <form autocomplete="off" action="../../components/form/addMachine.php" method="post">
            <div class="modal-content">
                <h5>Додати техніку</h5>
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
                        <input name="cannon" id="cannon" type="text" class="validate">
                        <label for="cannon">Гармата</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="armor" id="armor" type="text" class="validate">
                        <label for="armor">Броня</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="crew_number" id="crew_number" type="text" class="validate">
                        <label for="crew_number">Екіпаж</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="appointment" id="appointment" type="text" class="validate">
                        <label for="appointment">Призначення</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="year_of_manufacture" id="year_of_manufacture" type="text" class="validate">
                        <label for="year_of_manufacture">Рік виготовлення</label>

                    </div><div class="input-field col s12">
                        <input name="count" id="count" type="text" class="validate">
                        <label for="count">Кількість</label>
                    </div>

                    <div class="input-field col s12">
                        <select name="machineType">
                            <option value="" disabled selected>Виберіть тип техніки</option>
                            <?foreach ($machine_type as $type):?>
                                <option value="<?=$type['id']?>"><?=$type['type_of_machine']?></option>
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