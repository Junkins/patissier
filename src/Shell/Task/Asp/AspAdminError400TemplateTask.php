<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminError400TemplateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Template/Admin/Error/';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'error400';
        parent::main($name);
    }

    public function name()
    {
        return 'error400';
    }

    public function fileName($name)
    {
        return 'error400.ctp';
    }

    public function template()
    {
        return 'Template/error400';
    }
}