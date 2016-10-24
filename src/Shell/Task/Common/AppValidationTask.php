<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AppValidationTask extends CoreBakeTask
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
        return 'Patissier.Validation/app_validation';
    }
}