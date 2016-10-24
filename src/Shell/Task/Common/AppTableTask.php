<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppTableTask extends CoreBakeTask
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
        return 'Patissier.Model/app_table';
    }
}