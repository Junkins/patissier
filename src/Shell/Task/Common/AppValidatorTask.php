<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppValidatorTask extends CoreBakeTask
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