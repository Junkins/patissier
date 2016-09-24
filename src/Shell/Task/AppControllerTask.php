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
        return 'AppController.php';
    }

    public function template()
    {
        return 'Controller/app_controller';
    }
}