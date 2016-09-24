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
        // AppForm.php
        $name = 'Form';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Model/app_form';
    }
}