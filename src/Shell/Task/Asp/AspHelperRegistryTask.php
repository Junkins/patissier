<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspHelperRegistryTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'View/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'helper_registry';
        parent::main($name);
    }

    public function name()
    {
        return 'helper_registry';
    }

    public function fileName($name)
    {
        return 'HelperRegistry.php';
    }

    public function template()
    {
        return '/View/helper_registry';
    }
}