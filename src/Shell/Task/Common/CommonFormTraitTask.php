<?php
namespace Patissier\Shell\Task\Common;

use Patissier\Shell\Task\CoreBakeTask;

class CommonFormTraitTask extends CoreBakeTask
{
    public $pathFragment = 'Form/Traits/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'common_form_trait';
        parent::main($name);
    }

    public function name()
    {
        return 'common_form_trait';
    }

    public function fileName($name)
    {
        return 'CommonFormTrait.php';
    }

    public function template()
    {
        return '/Form/Traits/common_form_trait';
    }
}