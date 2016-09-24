<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppValidationTask extends AppBakeTask
{
    public $pathFragment = 'Validation/';

    public function name()
    {
        return 'app_validation';
    }

    public function fileName($name)
    {
        // AppValidation.php
        $name = 'Validation';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Validation/app_validation';
    }
}