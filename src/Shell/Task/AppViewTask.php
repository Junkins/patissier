<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppViewTask extends AppBakeTask
{
    public $pathFragment = 'View/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_view';
        parent::main($name);
    }

    public function name()
    {
        return 'app_view';
    }

    public function fileName($name)
    {
        return 'AppView.php';
    }

    public function template()
    {
        return 'View/app_view';
    }
}