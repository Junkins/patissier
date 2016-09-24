<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppTableTask extends AppBakeTask
{
    public $pathFragment = 'Model/Table/';

    public function name()
    {
        return 'app_table';
    }

    public function fileName($name)
    {
        // AppTable.php
        $name = 'Table';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Model/app_table';
    }
}