<?php

$result_from_db = [    
    "user_id" => 1, 
    "username" => "Potato",  
    "message" => "Hello world",
    "time" => "2018-05-05 00:00:00"
];

$list_log = [];

array_push( $list_log, $result_from_db);

echo ( json_encode($list_log) );

?>