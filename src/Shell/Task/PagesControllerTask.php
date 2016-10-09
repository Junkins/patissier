<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class PagesControllerTask extends SimpleBakeTask
{
    public $pathFragment = 'Controller/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'pages_controller';
        parent::main($name);
    }

    public function name()
    {
        return 'pages_controller';
    }

    public function fileName($name)
    {
        return 'PagesController.php';
    }

    public function template()
    {
        return 'Controller/pages_controller';
    }
}