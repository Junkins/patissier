<?php
namespace Patissier\Shell\Task;

use Bake\Shell\Task\SimpleBakeTask;

class AppValidatorTask extends SimpleBakeTask
{
    public $pathFragment = 'Validation/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_validator';
        parent::main($name);
    }

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