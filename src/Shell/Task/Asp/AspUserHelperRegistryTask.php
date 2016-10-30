<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserHelperRegistryTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
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
        return 'UserHelperRegistry.php';
    }

    public function template()
    {
        return '/View/admin_helper_registry';
    }
}