<?php

    error_reporting(E_ALL);

    function addLog($ip, $action, $uri){
        $logs = fopen('db/logs.txt', 'a');
        $log = implode([date('Y-m-d H:m:s'), $ip, $action, $uri],';') . PHP_EOL;
        fwrite($logs, $log);
        fclose($logs);
    }
	/* end --- black box */

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