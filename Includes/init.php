<?php
session_start () ;

require 'function.php' ;
require __DIR__ . '/../vendor/autoload.php' ;

$a=  get_flash_message();

spl_autoload_register ( function($cn) {
    $file = __DIR__ . "/$cn.class.php" ;
    if ( file_exists ( $file ) ) {
        require $file ;
    }
} ) ;


