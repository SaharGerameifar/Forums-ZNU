<?php
ob_start();
session_start();
include_once 'public/include/config.php';
include_once 'public/include/jdf.php';
include_once 'public/include/function.php';
include_once 'controller/Clayout.php';
include_once 'view/layout/header.php';

            $controller=@$_GET['c']?$_GET['c']:'index';
            $action=@$_GET['a']?$_GET['a']:'index';
            if(file_exists('controller/C'.$controller.'.php')){
            require_once 'controller/C'.$controller.'.php';
            }
include_once 'view/layout/footer.php';
?>