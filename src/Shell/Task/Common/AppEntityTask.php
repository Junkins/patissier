<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppEntityTask extends CoreBakeTask
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
        return 'Patissier.Model/app_entity';
    }
}