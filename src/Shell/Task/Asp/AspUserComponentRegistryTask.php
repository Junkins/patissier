<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserComponentRegistryTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Controller/User/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'user_component_registry';
        parent::main($name);
    }

    public function name()
    {
        return 'user_component_registry';
    }

    public function fileName($name)
    {
        return 'UserComponentRegistry.php';
    }

    public function template()
    {
        return '/Controller/user_component_registry';
    }
}
