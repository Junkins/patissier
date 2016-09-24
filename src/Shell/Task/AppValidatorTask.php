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
        // AppValidator.php
        $name = 'Validator';
        return parent::fileName($name);
    }

    public function template()
    {
        return 'Validation/app_validator';
    }
}