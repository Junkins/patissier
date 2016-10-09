<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppControllerTask extends AppBakeTask
{
    public $pathFragment = 'Controller/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_controller';
        parent::main($name);
    }

    public function name()
    {
        return 'app_controller';
    }

    public function fileName($name)
    {
        return 'AppController.php';
    }

    public function template()
    {
        return 'Controller/app_controller';
    }
}