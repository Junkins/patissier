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
        return 'AppTable.php';
    }

    public function template()
    {
        return 'Model/app_table';
    }
}