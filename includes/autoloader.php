<?php

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className)
    {
        $path = "../classes/"; 
        $extension = ".php";
        $direct = $path . $className . $extension;

        include_once $direct;
    }
    
