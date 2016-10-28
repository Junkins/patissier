<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminComponentRegistryTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Controller/Admin/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'admin_component_registry';
        parent::main($name);
    }

    public function name()
    {
        return 'admin_component_registry';
    }

    public function fileName($name)
    {
        return 'AdminComponentRegistry.php';
    }

    public function template()
    {
        return 'Controller/admin_component_registry';
    }
}
