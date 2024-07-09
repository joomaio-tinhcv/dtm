<?php
namespace App\_solution_\_plugin_\registers;

use SPT\Application\IApp;

class Installer
{
    public static function info()
    {
        return [
            'tags' => [],
            'solution' => '_solution_',
            'folder_name' => '_plugin_',
            'name' => '_plugin_',
            'description' => '',
            'dependencies' => []
        ];
    }
    
    public static function name()
    {
        return '_plugin_';
    }

    public static function detail()
    {
        return [
            'author' => '',
            'created_at' => '',
            'description' => ''
        ];
    }

    public static function version()
    {
        return '';
    }

    public static function assets()
    {
        return ;
    }

    public static function install( IApp $app)
    {
        return true;
    }
    public static function uninstall( IApp $app)
    {
        // run sth to uninstall
    }
    public static function active( IApp $app)
    {
        // run sth to prepare the install
    }
    public static function deactive( IApp $app)
    {
        // run sth to uninstall
    }
}