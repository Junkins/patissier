<?php
namespace App\Controller\User;

use Cake\Core\App;
use Cake\Controller\ComponentRegistry;

class UserComponentRegistry extends ComponentRegistry
{
    /**
     * _resolveClassName
     * @author ito
     */
    protected function _resolveClassName($class)
    {
        $classObject = App::className($class, 'Controller/Component/User', 'Component');
        return ($classObject) ? $classObject : App::className($class, 'Controller/Component', 'Component');
    }
}