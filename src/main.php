<?php

if (!function_exists('p')) 
{
    function p($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (!function_exists('ps')) 
{
    function ps($data)
    {
        p($data);
        die;
    }
}

if (!function_exists('v')) 
{
    function v($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
}

if (!function_exists('vs')) 
{
    function vs($data)
    {
        v($data);
        die;
    }
}


