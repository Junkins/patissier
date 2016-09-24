<?php
namespace Patissier\Shell\Task;

use Patissier\Shell\Task\AppBakeTask;

class AppValidatorTask extends AppBakeTask
{
    public $pathFragment = 'Validation/';

    public function name()
    {
        return 'app_validator';
    }

    public function fileName($name)
    {
        return 'AppValidator.php';
    }

    public function template()
    {
        return 'Validation/app_validator';
    }
}