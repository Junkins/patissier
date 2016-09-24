<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppControllerTask extends AppBakeTask
{
    public $pathFragment = 'Controller/';

    public function name()
    {
        return 'app_controller';
    }

    public function fileName($name)
    {
        // AppController.php
        $name = 'Controller';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Controller/app_controller';
    }
}