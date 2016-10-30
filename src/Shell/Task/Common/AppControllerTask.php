<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppControllerTask extends CoreBakeTask
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
        return '/Controller/app_controller';
    }
}