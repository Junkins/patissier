<?php
namespace Patissier\Shell\Task\Common;

use Bake\Shell\Task\SimpleBakeTask;

class AppValidationTask extends SimpleBakeTask
{
    public $pathFragment = 'Validation/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'app_validation';
        parent::main($name);
    }

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