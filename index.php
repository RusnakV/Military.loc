<?php
// Пример функции
//$string = '21-11-2015';
//$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//$replacement = 'Год $3, месяц $2, день $1';
//echo preg_replace($pattern, $replacement, $string);
// Год 2015, месяц 11, день 21

    // FRONT CONTROLLER


    // 1. Общие настройки
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    session_start();

    // 2. Подключение файлов системы
    define('ROOT', dirname(__FILE__));
    require_once (ROOT.'/components/Autoload.php');


    // 3. Установка соединения с БД


    // 4. Вызов Router
    $router = new Router();
    $router->run();