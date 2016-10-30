<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserLayoutDefaultTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Template/Layout/User/';

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