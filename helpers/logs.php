<?php

function addLog($ip, $action, $uri){
    $logs = fopen('helpers/file_db/logs.txt', 'a');
    $log = implode([date('Y-m-d H:m:s'), $ip, $action, $uri],';') . PHP_EOL;
    fwrite($logs, $log);
    fclose($logs);
}