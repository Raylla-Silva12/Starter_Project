<?php

    define('ROOT_PATH', dirname(__FILE__));

    require_once ROOT_PATH . "/controllers/clientsController.php";

    $controller = new clientsController();

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller->{$action}();
?>