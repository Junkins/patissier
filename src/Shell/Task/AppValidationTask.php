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
        return 'AppValidation.php';
    }

    public function template()
    {
        return 'Validation/app_validation';
    }
}