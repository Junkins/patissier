<?php
namespace Patissier\Shell\Task\Wrapper;

use Bake\Shell\Task\SimpleBakeTask;

class AppEntityTask extends SimpleBakeTask
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