<?php

namespace hhdebb;

class PhpPrint
{
    public static function p($var)
    {
        print_r($var);
    }
    
    public static function pd($var)
    {
        print_r($var);
        die();
    }
    
    public static function v($var)
    {
        var_dump($var);
    }
    
    public static function vd($var)
    {
        var_dump($var);
        die();
    }
}