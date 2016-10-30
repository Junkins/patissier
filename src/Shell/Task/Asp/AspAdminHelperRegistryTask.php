<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminHelperRegistryTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'View/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'admin_helper_registry';
        parent::main($name);
    }

    public function name()
    {
        return 'admin_helper_registry';
    }

    public function fileName($name)
    {
        return 'AdminHelperRegistry.php';
    }

    public function template()
    {
        return '/View/admin_helper_registry';
    }
}