<?php
if (isset($_POST['worker_id'])){
    $worker_id = intval($_POST['worker_id']);
    require_once "../Db.php";
    require_once "../../models/Military.php";
    echo $worker_id;
    Military::deleteWorker($worker_id);

}