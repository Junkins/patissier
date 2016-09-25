<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class AppTypeTask extends SimpleBakeTask
{
    public $pathFragment = 'Database/Type/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_type';
        parent::main($name);
    }

    public function name()
    {
        return 'app_type';
    }

    public function fileName($name)
    {
        return 'AppType.php';
    }

    public function template()
    {
        return 'Database/Type/app_type';
    }
}