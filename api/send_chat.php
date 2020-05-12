<?php

$input_user_id = $_POST["user_id"];
$input_message = $_POST["message"];


$result = true;

if( $result ){
    $response = ["success" => true ];
}else {
    $response = ["success" => false];
}

echo ( json_encode( $response ) );

?>