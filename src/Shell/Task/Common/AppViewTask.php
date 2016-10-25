<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppViewTask extends CoreBakeTask
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