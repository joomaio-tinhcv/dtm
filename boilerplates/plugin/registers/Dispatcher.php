<?php
namespace App\__solution__\__plugin__\registers;

use SPT\Application\IApp; 

class Dispatcher
{
    public static function dispatch(IApp $app)
    {
        $cName = $app->get('controller');
        $fName = $app->get('function');
        $container = $app->getContainer();
        $controller = 'App\__solution__\__plugin__\controllers\\'. $cName;
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