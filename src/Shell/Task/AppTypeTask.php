<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppTypeTask extends AppBakeTask
{
    public $pathFragment = 'Database/Type/';

    public function name()
    {
        return 'app_type';
    }

    public function fileName($name)
    {
        // AppType.php
        $name = 'Type';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Database/Type/app_type';
    }
}