<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspTopTemplateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp';
    public $pathFragment = 'Template/Tops/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'top';
        parent::main($name);
    }

    public function name()
    {
        return 'top';
    }

    public function fileName($name)
    {
        return 'top.ctp';
    }

    public function template()
    {
        return '/Template/top';
    }
}