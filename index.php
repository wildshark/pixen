<?php
session_start();
include("control/global.php");
include("control/control.php");
if(!isset($_REQUEST['submit'])){
    if(!isset($_REQUEST['page'])){
        if(!isset($_REQUEST['main'])){
            require($_TEMPLATE['home']);
            exit;
        }
    }else{
        switch($_REQUEST['page']){

            case"home";
                $page = $_TEMPLATE["home"];
            break;

            case"service";
                $page = $_TEMPLATE["service"];
            break;

            case"project";
                $page = $_TEMPLATE["project"];
            break;

            case"contact";
                $page = $_TEMPLATE["contact"];
            break;
            
        }

        require_once($page);
    }
}

?>