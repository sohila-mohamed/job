<?php 
// start sesstion
session_start();

// config 
require_once 'config.php';

// include helpers
require_once 'helpers/system_helper.php';

//autoloader
function __autoload($class_name){
    require_once 'lib/' .$class_name. '.php';
}
