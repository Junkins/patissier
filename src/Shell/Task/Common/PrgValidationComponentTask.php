<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class PrgValidationComponentTask extends CoreBakeTask
{
    public $pathFragment = 'Controller/Component/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'prg_validation_component';
        parent::main($name);
    }

    public function name()
    {
        return 'prg_validation_component';
    }

    public function fileName($name)
    {
        return 'PrgValidationComponent.php';
    }

    public function template()
    {
        return '/Controller/Component/prg_validation_component';
    }
}