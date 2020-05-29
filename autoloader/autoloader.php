<?php

spl_autoload_register('autoloader');

function autoloader($className)
{

    $path = "classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath))
        return false;

    require_once $fullPath;

}