<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppEntityTask extends AppBakeTask
{
    public $pathFragment = 'Model/Entity/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_entity';
        parent::main($name);
    }

    public function name()
    {
        return 'app_entity';
    }

    public function fileName($name)
    {
        return 'AppEntity.php';
    }

    public function template()
    {
        return 'Model/app_entity';
    }
}