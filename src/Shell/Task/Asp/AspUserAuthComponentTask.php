<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreComponentTask;

class AspUserAuthComponentTask extends CoreComponentTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Controller/Component/User/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'user_auth_component';
        parent::main($name);
    }

    public function name()
    {
        return 'user_auth_component';
    }

    public function fileName($name)
    {
        return 'UserAuthComponent.php';
    }

    public function template()
    {
        return '/Controller/Component/user_auth_component';
    }
}