<?php
namespace App\Controller;

use Cake\Controller\ComponentRegistry;

class AdminComponentRegistry extends ComponentRegistry
{
    /**
     * _resolveClassName
     * @author ito
     */
    protected function _resolveClassName($class)
    {
        $classObject = App::className($class, 'Controller/Component/Admin', 'Component');
        return ($classObject) ? $classObject : App::className($class, 'Controller/Component', 'Component');
    }
}