<?php
namespace App\View;

use Cake\Core\App;
use Cake\View\HelperRegistry;

class UserHelperRegistry extends HelperRegistry
{
    protected function _resolveClassName($class)
    {
        $classObject = App::className($class, 'View/Helper/User', 'Helper');
        return ($classObject)?$classObject:App::className($class, 'View/Helper', 'Helper');
    }
}