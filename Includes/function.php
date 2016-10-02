<?php

function get_hash_password($email, $password) {
    $code = md5($email) . sha1("f134h&@o$") . md5($password);
    return $code;
}

function redirect($url) {
    header("Location: $url");
    exit(); 
}

function escape_string($string) {
    return Db::get()->real_escape_string($string);
}

function is_post() {
    return ( $_SERVER['REQUEST_METHOD'] == "POST" );
}
function get_post_data($name) {
    return escape_string($_POST[$name]);
}
function add_flash_message( $message) {
    if(!isset($_SESSION['flash_messages'])){
        $_SESSION['flash_messages'] = [];
    }
    $_SESSION['flash_messages'][]=$message;
}


function get_flash_message() {
    if(!isset($_SESSION['flash_messages'])){
        return [];
    }
    $messages = $_SESSION['flash_messages'];
     $_SESSION['flash_messages'] = [] ;
     return $messages;
}

function convert_all_to_assoc($result ) {
            while ($data=$result -> fetch_assoc ())
        {
            $arr[]=$data;
        }
        return $arr;
}