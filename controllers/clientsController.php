<?php

    require_once ROOT_PATH .'/models/Client.php';

    class clientsController 
    {
        private $model;

        function __construct()
        {
            $this->model = new ClientModel();
        }

        function getAll()
        {
            $resultData = $this->model->getAll();
            require_once('./views/index.php');
        }
    }

?>