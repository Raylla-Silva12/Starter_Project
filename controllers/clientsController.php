<?php

    define('HOST', 'localhost');
    define('DATABASENAME', 'starter_project');
    define('USER', 'root');
    define('PASSWORD', 'usbw');

    class Connect {
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectionDatabase() {
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e)
            {
                echo "Error!".$e->getMessage();
            }
        }
    }

?>