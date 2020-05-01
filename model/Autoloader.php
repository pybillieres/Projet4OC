<?php 
class Autoloader
{
    static function autoload($class)//interet de la mettre en static ?
    {
        require 'model/'.$class.'.php';
    }

    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

}