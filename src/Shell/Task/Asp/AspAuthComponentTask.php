<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreComponentTask;

class AspAuthComponentTask extends CoreComponentTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Controller/Component/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'auth_component';
        parent::main($name);
    }

    public function name()
    {
        return 'auth_component';
    }

    public function fileName($name)
    {
        return 'AuthComponent.php';
    }

    public function template()
    {
        return '/Controller/Component/auth_component';
    }
}