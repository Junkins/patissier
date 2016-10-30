<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminTopTemplateTask extends CoreBakeTask
{
    public $bakeTemplateClass = 'asp_admin';
    public $pathFragment = 'Template/Admin/Tops/';

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