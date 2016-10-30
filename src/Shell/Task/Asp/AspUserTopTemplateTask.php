<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserTopTemplateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Template/User/Tops/';

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