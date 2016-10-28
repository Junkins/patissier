<?php
namespace App\View;

use Cake\Core\App;
use Cake\View\HelperRegistry;

class AdminHelperRegistry extends HelperRegistry
{
    protected function _resolveClassName($class)
    {
        $classObject = App::className($class, 'View/Helper/Admin', 'Helper');
        return ($classObject)?$classObject:App::className($class, 'View/Helper', 'Helper');
    }
}