<?php
namespace App\_solution_\_plugin_\registers;

use SPT\Application\IApp; 

class Dispatcher
{
    public static function dispatch(IApp $app)
    {
        $cName = $app->get('controller');
        $fName = $app->get('function');
        $container = $app->getContainer();
        $controller = 'App\_solution_\_plugin_\controllers\\'. $cName;
        if(!class_exists($controller))
        {
            $app->raiseError('Invalid controller '. $cName);
        }

        $controller = new $controller($container);
        $controller->{$fName}();
        
        if (!$cli)
        {
            $fName = 'to'. ucfirst($app->get('format', 'html'));
    
            return $app->finalize(
                $controller->{$fName}()
            );
        }
       
        exit(0);
    }

    public static function terminal(IApp $app)
    {
    }
}