<?php
namespace Patissier\Shell\Task\Asp;

use Patissier\Shell\Task\CoreBakeTask;

class AspAdminElementTableTask extends CoreBakeTask
{
    public $pathFragment = 'Template/Element/Admin/';
    public $bakeTemplateClass = 'asp_admin';

    /**
     * Execute method
     */
    public function main($name = null)
    {
        $name = 'element_table';
        parent::main($name);
    }

    public function name()
    {
        return 'element_table';
    }

    public function fileName($name)
    {
        return 'table.ctp';
    }

    public function template()
    {
        return 'Layout/element_table';
    }
}