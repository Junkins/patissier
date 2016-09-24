<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppEntityTask extends AppBakeTask
{
    public $pathFragment = 'Model/Entity/';

    public function name()
    {
        return 'app_entity';
    }

    public function fileName($name)
    {
        // AppEntity.php
        $name = 'Entity';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Model/app_entity';
    }
}