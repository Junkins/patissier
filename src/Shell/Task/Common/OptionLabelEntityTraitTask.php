<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class OptionLabelEntityTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Model/Entity/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'option_label_entity_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'option_label_entity_trait';
    }

    public function fileName($name)
    {
        return 'OptionLabelEntityTrait.php';
    }

    public function template()
    {
        return 'Patissier.Model/Entity/Traits/option_label_entity_trait';
    }
}