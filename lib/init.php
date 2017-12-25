<?php
require_once ROOT.DS.'config'.DS.'config.php';
function __autoload($class_name){
    $controller_path=ROOT.DS.'controllers'.DS.strtolower(str_replace('Controller','',$class_name)).'.controller.php';
    $lib_path=ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
    $model_path=ROOT.DS.'models'.DS.strtolower($class_name).'.php';
    if(file_exists($controller_path)){
        require_once $controller_path;
    }elseif (file_exists($lib_path)){
        require_once $lib_path;
    }elseif (file_exists($model_path)){
        require_once $model_path;
    }else{
        throw new Exception('Error require_once init.php');
    }
}
?>