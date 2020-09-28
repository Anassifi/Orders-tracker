<?php 

function CreateSession($session_name,$session_value){
    $_SESSION["$session_name"] = $session_value;
}

function debug($var){

    echo '<pre>';

    var_dump($var);

    echo '</pre>';

}