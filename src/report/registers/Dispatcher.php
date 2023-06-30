<?php
namespace DTM\report\registers;

use SPT\Application\IApp;
use SPT\Response;

class Dispatcher
{
    public static function dispatch(IApp $app)
    {
        $app->plgLoad('permission', 'CheckSession');
        $cName = $app->get('controller');
        $fName = $app->get('function');

        $cName = ucfirst($cName);
        $controller = 'DTM\report\controllers\\'. $cName;
        if(!class_exists($controller))
        {
            $app->raiseError('Invalid controller '. $cName);
        }

        $controller = new $controller($app->getContainer());
        $controller->{$fName}();
        $controller->setCurrentPlugin();
        $controller->useDefaultTheme();

        $fName = 'to'. ucfirst($app->get('format', 'html'));

        $app->finalize(
            $controller->{$fName}()
        );
    }
}