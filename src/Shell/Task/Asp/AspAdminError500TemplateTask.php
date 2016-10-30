<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminError500TemplateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Template/Admin/Error/';

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