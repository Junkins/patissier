<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppFormTask extends AppBakeTask
{
    public $pathFragment = 'Model/Form/';

    public function name()
    {
        return 'app_form';
    }

    public function fileName($name)
    {
        return 'AppForm.php';
    }

    public function template()
    {
        return 'Model/app_form';
    }
}