<?php

$input_user_id = $_GET["username"];


$result_from_db = [
    "user_id" => 1,
    "username" => "Potato"
];

echo json_encode( $result_from_db );

?>