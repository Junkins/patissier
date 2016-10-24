<?php
namespace Patissier\Console;

use Cake\Core\App;
use Cake\Console\TaskRegistry;

class PatissierTaskRegistry extends TaskRegistry
{
    protected function _resolveClassName($class)
    {
        return App::className($class, 'Shell/Task/' . $this->_Shell->subDir , 'Task');
    }
}
