<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspLayoutDefaultTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Template/Layout/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'layout_default';
        parent::main($name);
    }

    public function name()
    {
        return 'layout_default';
    }

    public function fileName($name)
    {
        return 'default.ctp';
    }

    public function template()
    {
        return '/Layout/layout_default';
    }
}