<?php

    error_reporting(E_ALL);

    function dbInstance(string $DSN, string $userName, string $userPassword) : PDO{
        static $DBInstance;

        if(empty($DBInstance)){
            $DBInstance = new PDO ($DSN, $userName, $userPassword);
        }
        return  $DBInstance;
    }

    function dbQuery(PDO $db, string $sql_query, array $params = []) : PDOStatement {
        $query = $db->prepare($sql_query);
        $query->execute($params);
        return $query;
    }