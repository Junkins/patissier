<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreComponentTask;

class AspAdminAuthComponentTask extends CoreComponentTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Controller/Component/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'admin_auth_component';
        parent::main($name);
    }

    public function name()
    {
        return 'admin_auth_component';
    }

    public function fileName($name)
    {
        return 'AdminAuthComponent.php';
    }

    public function template()
    {
        return 'Controller/Component/admin_auth_component';
    }
}