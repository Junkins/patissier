<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspUserError500TemplateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_user';
    public $pathFragment = 'Template/User/Error/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'error500';
        parent::main($name);
    }

    public function name()
    {
        return 'error500';
    }

    public function fileName($name)
    {
        return 'error500.ctp';
    }

    public function template()
    {
        return '/Template/error500';
    }
}