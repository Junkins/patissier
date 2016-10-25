<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class AdminEntityTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Entity/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'admin_entity_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'admin_entity_trait';
    }

    public function fileName($name)
    {
        return 'AdminEntityTrait.php';
    }

    public function template()
    {
        return 'Model/Entity/Traits/admin_entity_trait';
    }
}