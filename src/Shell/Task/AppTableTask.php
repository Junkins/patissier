<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class AppTableTask extends SimpleBakeTask
{
    public $pathFragment = 'Model/Table/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_table';
        parent::main($name);
    }

    public function name()
    {
        return 'app_table';
    }

    public function fileName($name)
    {
        return 'AppTable.php';
    }

    public function template()
    {
        return 'Model/app_table';
    }
}