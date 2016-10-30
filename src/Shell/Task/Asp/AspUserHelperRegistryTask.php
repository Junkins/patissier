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
        $name = 'user_helper_registry';
        parent::main($name);
    }

    public function name()
    {
        return 'user_helper_registry';
    }

    public function fileName($name)
    {
        return 'UserHelperRegistry.php';
    }

    public function template()
    {
        return '/View/user_helper_registry';
    }
}