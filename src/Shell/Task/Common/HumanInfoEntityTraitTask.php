<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class HumanInfoEntityTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Entity/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'human_info_entity_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'human_info_entity_trait';
    }

    public function fileName($name)
    {
        return 'HumanInfoEntityTrait.php';
    }

    public function template()
    {
        return 'Model/Entity/Traits/human_info_entity_trait';
    }
}