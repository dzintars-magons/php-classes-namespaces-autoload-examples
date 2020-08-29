<?php
// spl_autoload_register('myAutoLoader');
// function myAutoLoader($className){
//     $fullPath = "../classes/" . $className . ".php";

//     if (!file_exists($fullPath)) {
//         return false;
//     }

//     include_once $fullPath;
// }

spl_autoload_register(function ($class) {
    // require "../classes/$class.php";
    require '../classes/' . str_replace('\\', '/', $class) . '.php';
});