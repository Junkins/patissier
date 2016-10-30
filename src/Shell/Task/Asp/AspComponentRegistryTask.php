<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspComponentRegistryTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Controller/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'component_registry';
        parent::main($name);
    }

    public function name()
    {
        return 'component_registry';
    }

    public function fileName($name)
    {
        return 'ComponentRegistry.php';
    }

    public function template()
    {
        return '/Controller/component_registry';
    }
}
