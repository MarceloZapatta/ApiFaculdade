<?php
namespace App\Helpers;
 
class LumenConfig {
    public static function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}