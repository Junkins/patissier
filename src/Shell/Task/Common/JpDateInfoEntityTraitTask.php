<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class JpDateInfoEntityTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Entity/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'jp_date_info_entity_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'jp_date_info_entity_trait';
    }

    public function fileName($name)
    {
        return 'JpDateInfoEntityTrait.php';
    }

    public function template()
    {
        return 'Model/Entity/Traits/jp_date_info_entity_trait';
    }
}