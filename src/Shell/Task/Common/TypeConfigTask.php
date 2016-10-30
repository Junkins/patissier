<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class TypeConfigTask extends CoreBakeTask
{
    public $pathFragment = '../config/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'type_config';
        parent::main($name);
    }

    public function name()
    {
        return 'type_config';
    }

    public function fileName($name)
    {
        return 'type_config.php';
    }

    public function template()
    {
        return '/config/type_config';
    }
}